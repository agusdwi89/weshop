<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Section extends CI_Controller {

	function __construct(){
		parent::__construct();

	}

	public function index()
	{
		if (is_post()) {
			$data = $this->input->post();
			$data['sec_order'] 	= $this->db->get('get_list_section_order')->result()[0]->sec_order+1;
			$data['section_id'] = $this->get_section_id($data['type_sec_id']);

			$this->db->insert('list_section',$data);

			// cek klo footer
			if ($data['type_sec_id'] == 14) {
				$data = array(
					'sfoot_id'	=> $data['section_id']
				);
				$this->db->insert('section_footer_social',$data);
			}
		}

		$data['local_view'] 			= 'v_section';
		$data['section_item'] 			= $this->db->get('view_list_section');
		$data['master_section_type'] 	= $this->db->get('type_section');
		$this->load->view('v_manage',$data);
	}

	private function get_section_id($id){
		$table = $this->db->get_where('type_section',array('id'=>$id))->result()[0]->db_table;
		$this->db->insert($table,array('id'=>''));
		return $this->db->insert_id();
	}

	function delete($id){
		$d 				= $this->db->get_where('list_section',array('id'=>$id))->row();
		$table 			= $this->db->get_where('type_section',array('id'=>$d->type_sec_id))->row()->db_table;
		$this->db->delete($table, array('id' => $id->section_id)); 
		$this->db->delete('list_section', array('id' => $id)); 
		redirect(base_url('manage/section'));
	}

	function update_order(){
		$data = $this->input->post();
		$data = json_decode($data['order']);
		foreach ($data as $key => $value) {
			$dd = $key+1;
			$data = array('sec_order' => $dd );
			$this->db->where('id', $value->id);
			$this->db->update('list_section', $data); 
		}
		echo 'success';
	}

	function edit($id){
		$section = $this->db->get_where('view_list_section',array('id'=>$id))->row();
		redirect(base_url()."manage/$section->db_table/edit/$section->section_id");
	}
}