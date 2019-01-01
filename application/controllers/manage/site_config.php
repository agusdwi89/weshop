<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site_config extends CI_Controller {

	public function index()
	{
		if (is_post()) {
			$data = $this->input->post();
			foreach ($data as $key => $value) {
				$data = array('value' => $value );
				$this->db->where('name', $key);
				$this->db->update('site_config', $data); 
			}
			$this->session->set_flashdata('message','Data Saved Successfully');	
			redirect(base_url('manage/site_config'));
		}

		$data['data'] = array(
			"site-title"		=> $this->db->get_where('site_config',array('id'=>1))->row()->value,
			"top-title"			=> $this->db->get_where('site_config',array('id'=>2))->row()->value,
			"top-subtitle"		=> $this->db->get_where('site_config',array('id'=>3))->row()->value,
			"meta-description"	=> $this->db->get_where('site_config',array('id'=>4))->row()->value,
			"meta-keywords"		=> $this->db->get_where('site_config',array('id'=>5))->row()->value
		);
		$data['local_view'] 	= 'v_site_config';
		$this->load->view('v_manage',$data);
	}

}