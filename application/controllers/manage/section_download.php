<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Section_download extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	function edit($id){
		if (is_post()) {
			$item = $this->input->post();
			$f = $_FILES;
			$d = $this->upload();
			if ($f['userfile']['size'][0] > 0) {
				$item['image'] = $d[0]['file_name'];
			}
			if ($f['userfile']['size'][1] > 0) {
				$item['image_bg'] = $d[1]['file_name'];
			}

			$this->db->where('id', $id);
			$this->db->update('section_download', $item); 
			$this->session->set_flashdata('message','Data Saved Successfully');
			redirect(base_url("manage/section_download/edit/$id"));
		}
		$data['items'] 		= $this->db->get_where('section_download',array('id'=>$id))->row();
		$data['local_view'] = 'v_section_download';
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

}