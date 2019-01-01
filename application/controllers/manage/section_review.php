<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Section_review extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	function edit($id){
		if (is_post()) {
			$item = $this->input->post();
			$this->db->where('id', $id);
			$this->db->update('section_review', $item); 

			$this->session->set_flashdata('message','Data Saved Successfully');
			redirect(base_url("manage/section_review/edit/$id"));
		}

		$data['id'] 		= $id;
		$data['master'] 	= $this->db->get_where('section_review',array('id'=>$id))->row();
		$data['items'] 		= $this->db->get_where('section_review_items',array('srev_id'=>$id));
		$data['items2'] 	= $this->db->get_where('section_review_customers',array('srev_id'=>$id));
		$data['local_view'] = 'v_section_review';
		$this->load->view('v_manage',$data);
	}

	function upload(){
		$dataInfo = array();
		$files = $_FILES;
		$cpt = count($_FILES['userfile']['name']);
		for($i=0; $i<$cpt; $i++)
		{           
			$_FILES['userfile']['name']= strtolower($files['userfile']['name'][$i]);
			$_FILES['userfile']['type']= $files['userfile']['type'][$i];
			$_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
			$_FILES['userfile']['error']= $files['userfile']['error'][$i];
			$_FILES['userfile']['size']= $files['userfile']['size'][$i];    

			$config['upload_path']		= 'assets/section';
			$config['allowed_types']	= 'jpg|png';
			$config['max_size']			= '10000';
			$config['max_width']		= '5000';
			$config['max_height']		= '5000';
			$config['encrypt_name']		= true;
			$this->load->library('upload', $config);
			$this->upload->do_upload();
			$dataInfo[] = $this->upload->data();
		}
		return $dataInfo;
	}

	function add_item(){
		$d = $this->upload();
		$data = $this->input->post();
		$data['image'] = $d[0]['file_name'];
		$this->db->insert('section_review_items',$data);
		$id = $data['srev_id'];
		$this->session->set_flashdata('message','Data saved successfully');
		redirect(base_url("manage/section_review/edit/$id"));
	}

	function delete_item($id,$ids){
		$this->db->delete('section_review_items', array('id' => $id)); 
		$this->session->set_flashdata('message', 'Delete successfully');
		redirect(base_url("manage/section_review/edit/$ids"));
	}	

	function add_customer(){
		$d = $this->upload();
		$data = $this->input->post();
		$data['image'] = $d[0]['file_name'];
		$this->db->insert('section_review_customers',$data);
		$id = $data['srev_id'];
		$this->session->set_flashdata('message','Data saved successfully');
		redirect(base_url("manage/section_review/edit/$id"));
	}

	function delete_customer($id,$ids){
		$this->db->delete('section_review_customers', array('id' => $id)); 
		$this->session->set_flashdata('message', 'Delete successfully');
		redirect(base_url("manage/section_review/edit/$ids"));
	}
}