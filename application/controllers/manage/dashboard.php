<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['local_view'] = 'v_dashboard';
		$this->load->view('v_manage',$data);
	}
}