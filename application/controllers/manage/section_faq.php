<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Section_faq extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	function edit($id){
		if (is_post()) {
			$item = $this->input->post();
			$this->db->where('id', $id);
			$this->db->update('section_faq', $item); 

			$this->session->set_flashdata('message','Data Saved Successfully');
			redirect(base_url("manage/section_faq/edit/$id"));
		}

		$data['id'] 		= $id;
		$data['master'] 	= $this->db->get_where('section_faq',array('id'=>$id))->row();
		$data['items'] 		= $this->db->get_where('section_faq_items',array('sfaq_id'=>$id));
		$data['local_view'] = 'v_section_faq';
		$this->load->view('v_manage',$data);
	}

	function add_item(){
		$data = $this->input->post();
		$this->db->insert('section_faq_items',$data);
		echo "success";
	}

	function delete_item($id,$ids){
		$this->db->delete('section_faq_items', array('id' => $id)); 
		$this->session->set_flashdata('message', 'Data Deleted Successfully');
		redirect(base_url("manage/section_faq/edit/$ids"));
	}

}