<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends Base_Controller {
    public function index()
    {
    	$this->rs = $this->db->get('customers')->result();
    	$this->render('customer/index', $this);
    }

  	public function add()
  	{
  		$this->render('customer/add');
  	}

  	public function do_add()
  	{
  		$this->db->insert('customers', array(
  			'customer_name' => $this->input->post('customer_name')
  		));
  		$cus_id = $this->db->insert_id();

  		$this->upload->initialize(array(
  			'upload_path' => 'upload/',
  			'allowed_types' => 'jpg|jpeg|png',
  			'file_name' => 'logo-'.$cus_id
  		));
  		if ($this->upload->do_upload('customer_logo')) {
  			$data = $this->upload->data();
  			$this->db->where('cus_id', $cus_id)->update('customers', array(
  				'customer_logo' => $data['file_name'],
  			));
  		} 
  		redirect('customer');
  	}

  	public function delete($id)
  	{
  		$this->db->where('cus_id', $id)->delete('customers');
  		redirect('customer');
  	}

  	// campaign
  	public function campaign($id)
  	{
  		$this->f = $this->db->where('cus_id', $id)->get('customers')->row();
  		$this->rs = $this->db->where('cus_id', $id)->get('campaign')->result();
  		$this->render('customer/campaign/index', $this);
  	}

    public function delete_campaign($cus_id, $campaign_id)
    {
      $this->db->where('cus_id', $cus_id)->where('campaign_id', $campaign_id)->delete('campaign');
      $this->db->where('campaign_id', $campaign_id)->delete('campaign_member');
      redirect('customer/campaign/'.$cus_id);

    }

  	public function campaign_add($id)
  	{
  		$this->f = $this->db->where('cus_id', $id)->get('customers')->row();
  		$this->render('customer/campaign/add', $this);
  	}

  	public function do_campaign_add()
  	{
  		$config = array(
  			array(
  				'field' => 'cus_id',
  				'label' => 'ID',
  				'rules' => 'required'
  			),
  			array(
  				'field' => 'campaign_name',
  				'label' => 'Name',
  				'rules' => 'required'
  			),
  		);
  		$this->form_validation->set_rules($config);
  		if ($this->form_validation->run()) {
  			$this->db->insert('campaign', array( 'campaign_name' => $this->input->post('campaign_name'), 'cus_id' => $this->input->post('cus_id') ));
  		}
  		redirect('customer/campaign/'.$this->input->post('cus_id'));
  	}

  	public function product($cus_id, $campaign_id)
  	{
      if($_SERVER['REQUEST_METHOD']=='POST') {
        $inp = $this->input->post('product_id');
        foreach($inp as $index => $val) {
          $this->db->where('product_id', $val)->update('campaign_member', array(
            'member_id' => NULL
          ));
        }

        redirect('customer/product/'.$cus_id.'/'.$campaign_id);
      }
  		$this->f = $this->db->where('cus_id', $cus_id)->get('customers')->row();
  		$this->campaign = $this->db->where('cus_id', $cus_id)->where('campaign_id', $campaign_id)->get('campaign')->row();
  		$this->rs = $this->db->select('product.product_name, product.product_id, product.campaign_id, member.member_name, created_date, campaign_member.member_id')
                ->where('product.campaign_id', $campaign_id)
                ->join('campaign_member', 'product.product_id = campaign_member.product_id', 'LEFT')
                ->join('member', 'campaign_member.member_id = member.member_id', 'LEFT')
                ->group_by('product.product_id')
                ->get('product')->result();



  		$this->render('customer/campaign/product', $this);
  	}


    public function product_export($cus_id, $campaign_id)
    {
      $this->f = $this->db->where('cus_id', $cus_id)->get('customers')->row();
      $this->campaign = $this->db->where('cus_id', $cus_id)->where('campaign_id', $campaign_id)->get('campaign')->row();
      $this->rs = $this->db->select('product.product_name, product.product_id, product.campaign_id, member.member_name, created_date')
                ->where('product.campaign_id', $campaign_id)
                ->join('campaign_member', 'product.product_id = campaign_member.product_id', 'LEFT')
                ->join('member', 'campaign_member.member_id = member.member_id', 'LEFT')
                ->group_by('product.product_id')
                ->get('product')->result();


      header("Content-type: application/vnd.ms-excel");
      // header('Content-type: application/csv'); //*** CSV ***//
      header("Content-Disposition: attachment; filename=export.xls");

      $this->load->view('customer/campaign/product_export', $this);
    }


  	public function product_add($cus_id, $campaign_id)
  	{
  		if ($_SERVER['REQUEST_METHOD']=='POST') {
        $no = $this->input->post('no');
        for($i=1; $i<=$no; $i++) {
    			$this->db->insert('product', array(
    				'campaign_id' => $campaign_id,
    				'product_name' => $this->input->post('product_name').' ('.$i.')',
    			));
        }
  			redirect('customer/product/'.$cus_id.'/'.$campaign_id);
  		}
  		$this->f = $this->db->where('cus_id', $cus_id)->get('customers')->row();
  		$this->campaign = $this->db->where('cus_id', $cus_id)->where('campaign_id', $campaign_id)->get('campaign')->row();
  		$this->rs = $this->db->where('campaign_id', $campaign_id)->join('member', 'product.member_id = member.member_id', 'LEFT')->get('product')->result();
  		$this->render('customer/campaign/product_add', $this);
  	}

  	public function member($cus_id, $campaign_id)
  	{
      if ($_SERVER['REQUEST_METHOD']=='POST') {
        require_once APPPATH.'libraries/PHPExcel/PHPExcel.php';

        $config['upload_path'] = 'upload/files/';
        $config['allowed_types'] = '*';
        $config['file_name'] = time();

        $this->upload->initialize($config);

        if ( $this->upload->do_upload("file"))
        {
          $ar = $this->upload->data();
          $path = FCPATH.'upload/files/'.$ar['file_name'];

          //echo $path;

          $objPHPExcel = PHPExcel_IOFactory::load($path);
          $objPHPExcel->setActiveSheetIndex();
          $sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
          foreach($sheetData as $row){
            $name = $row['A'];
            $rs = $this->db->where('member_name', $name)->get('member');
            $member_id = '';
            if ($rs->num_rows()==0) {
              $this->db->insert('member', array('member_name' => $name));
              $member_id = $this->db->insert_id();
            } else {
              $member_id = $rs->row()->member_id;
            }

            $this->db->insert('campaign_member', array(
              'member_id' => $member_id,
              'campaign_id' => $campaign_id
            ));

          }
        
          
        }
        redirect('customer/member/'.$cus_id.'/'.$campaign_id);
      }


      $this->f = $this->db->where('cus_id', $cus_id)->get('customers')->row();
      $this->campaign = $this->db->where('cus_id', $cus_id)->where('campaign_id', $campaign_id)->get('campaign')->row();
  		$this->rs = $this->db->join('member', 'campaign_member.member_id = member.member_id')
                    ->join('product', 'campaign_member.product_id = product.product_id', 'LEFT')
                    ->where('campaign_member.campaign_id', $campaign_id)
                    ->order_by('CONVERT( member_name USING tis620 ) ASC', '', false)
                    ->group_by('campaign_member.member_id')
                    ->get('campaign_member')->result();
  		$this->render('customer/campaign/member', $this);
  	}
}
