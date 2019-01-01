<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Section_header extends CI_Controller {

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
					redirect(base_url("manage/section_header/edit/$id"));
				}else{
					$item['image'] = $upload[1]['file_name'];
				}	
			}
			$this->db->where('id', $id);
			$this->db->update('section_header', $item); 
			$this->session->set_flashdata('message','Data Saved Successfully');
			redirect(base_url("manage/section_header/edit/$id"));
		}
		$data['items'] 		= $this->db->get_where('section_header',array('id'=>$id))->row();
		$data['local_view'] = 'v_section_header';
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

}