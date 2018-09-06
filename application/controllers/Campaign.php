<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campaign extends Base_Controller {
    public function index()
    {

    }

    public function id($campaign_id, $product_id)
    {
    	$this->f = $this->db->join('campaign', 'product.campaign_id = campaign.campaign_id')
    				->join('customers', 'campaign.cus_id = customers.cus_id')
    				->where('product.campaign_id', $campaign_id)->where('product_id', $product_id)->get('product')->row();
    	$this->load->view('campaign/view', $this);
    }

    public function getmember($campaign_id, $product_id)
    {
    	$rs = $this->db->join('member', 'campaign_member.member_id = member.member_id')->where('campaign_id', $campaign_id)->get('campaign_member')->result();
    	$ar = array();
    	foreach($rs as $r) {
    		$ar[] = $r->member_name;
    	}
        echo json_encode($ar);
    }

    public function do_save()
    {
        $campaign_id = $this->input->post('campaign_id');
        $product_id = $this->input->post('product_id');
        $member_name = $this->input->post('member_name');

        $member_id = $this->db->where('member_name', $member_name)->get('member')->row()->member_id;

        $this->db->set('created_date', 'NOW()', FALSE)
            ->where('campaign_id', $campaign_id)
            ->where('member_id', $member_id)->update('campaign_member', 
                array('product_id' => $product_id));

    }
}
