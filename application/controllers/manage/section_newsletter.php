<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Section_newsletter extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	function edit($id){
		if (is_post()) {
			$item = $this->input->post();

			$this->db->where('id', $id);
			$this->db->update('section_newsletter', $item); 
			$this->session->set_flashdata('message','Data Saved Successfully');
			redirect(base_url("manage/section_newsletter/edit/$id"));
		}
		$data['items'] 		= $this->db->get_where('section_newsletter',array('id'=>$id))->row();
		$data['local_view'] = 'v_section_newsletter';
		$this->load->view('v_manage',$data);
	}
}