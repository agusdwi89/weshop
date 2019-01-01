<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Section_team extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	function edit($id){
		if (is_post()) {
			$item = $this->input->post();
			$this->db->where('id', $id);
			$this->db->update('section_team', $item); 

			$this->session->set_flashdata('message','Data Saved Successfully');
			redirect(base_url("manage/section_team/edit/$id"));
		}

		$data['id'] 		= $id;
		$data['master'] 	= $this->db->get_where('section_team',array('id'=>$id))->row();
		$data['items'] 		= $this->db->get_where('section_team_items',array('steam_id'=>$id));
		$data['local_view'] = 'v_section_team';
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
		$data['photo'] = $d[0]['file_name'];
		$this->db->insert('section_team_items',$data);
		$id = $data['steam_id'];
		$this->session->set_flashdata('message','Data saved successfully');
		redirect(base_url("manage/section_team/edit/$id"));
	}

	function delete_item($id,$ids){
		$this->db->delete('section_team_items', array('id' => $id)); 
		$this->session->set_flashdata('message', 'Delete successfully');
		redirect(base_url("manage/section_team/edit/$ids"));
	}
}