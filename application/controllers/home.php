<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$all_list = [];
		$list = $this->db->get('view_list_section');

		foreach ($list->result() as $key) {
			$ls = $this->db->get_where($key->db_table,array('id' => $key->section_id));
			
			if ($ls->num_rows == 1) {
				$all_list[] = array(
					'layout'	=> $key->db_table,
					'data'		=> $ls->result()[0]
				);
			}
		}

		$data['list_section']	=	$all_list;
		$this->load->view('v_home',$data);
	}

	function delivery(){
		$data['form'] = $this->input->post();
		$this->load->view('fe/i_popup_payment',$data);
	}

	function confirmation(){
		$data = array();
		$this->load->view('fe/i_confirm',$data);
	}
}