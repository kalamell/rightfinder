<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function get_name()
{
	$ci =& get_instance();
	$rs = $ci->db->where('user_id', $ci->session->userdata('login'))->get('user');
	return $rs->row()->name;
}