<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Section_footer extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	function edit($id){
		if (is_post()) {
			$item = $this->input->post();
			if ($_FILES['userfile']['size'] > 0 ){
				$upload = $this->upload();
				if (!$upload[0]){
					$this->session->set_flashdata('log',$upload[1]);
					$this->session->set_flashdata('message','Error while uploading image');
					redirect(base_url("manage/section_footer/edit/$id"));
				}else{
					$item['r_image'] = $upload[1]['file_name'];
				}	
			}
			$this->db->where('id', $id);
			$this->db->update('section_footer', $item); 
			$this->session->set_flashdata('message','Data Saved Successfully');
			redirect(base_url("manage/section_footer/edit/$id"));
		}
		$data['items'] 			= $this->db->get_where('section_footer',array('id'=>$id))->row();
		// $data['items_link'] 	= $this->db->get_where('section_footer_links',array('sfoot_id'=>$id));
		$data['items_social'] 	= $this->db->get_where('section_footer_social',array('sfoot_id'=>$id))->row();
		$data['id'] 			= $id;
		$data['local_view'] 	= 'v_section_footer';
		$this->load->view('v_manage',$data);
	}

	function upload(){
		$_FILES['userfile']['name']	= strtolower($_FILES['userfile']['name']);
		$config['upload_path']		= 'assets/section';
		$config['allowed_types']	= 'jpg|png';
		$config['max_size']			= '10000';
		$config['max_width']		= '5000';
		$config['max_height']		= '5000';
		$config['encrypt_name']		= true;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload()){
			return array(false,$this->upload->display_errors());
		}else{
			$a = $this->upload->data();
			return array(true,$a);
		}
	}

	function update_social($id,$ids){
		if (is_post()) {
			$data = $this->input->post();
			$this->db->where('id', $id);
			$this->db->update('section_footer_social', $data); 
			$this->session->set_flashdata('message','Data Saved Successfully');
			redirect(base_url("manage/section_footer/edit/$ids"));
		}
	}
}