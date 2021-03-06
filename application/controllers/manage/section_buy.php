<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Section_buy extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	function edit($id){
		if (is_post()) {
			$item = $this->input->post();

			$this->db->where('id', $id);
			$this->db->update('section_buy', $item); 
			$this->session->set_flashdata('message','Data Saved Successfully');
			redirect(base_url("manage/section_buy/edit/$id"));
		}
		$data['items'] 		= $this->db->get_where('section_buy',array('id'=>$id))->row();
		$data['local_view'] = 'v_section_buy';
		$this->load->view('v_manage',$data);
	}
}