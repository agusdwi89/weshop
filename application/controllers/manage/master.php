<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master extends CI_Controller {

	public function index()
	{
		$data['local_view'] = 'v_dashboard';
		$this->load->view('v_manage',$data);
	}

	function shipping(){
		$data['ship']			=	$this->db->get('mst_delivery');
		$data['map_city'] 		= $this->map_city();
		$data['map_province'] 	= $this->map_province();
		$data['local_view'] 	= 'master/v_shipping';
		$this->load->view('v_manage',$data);
	}

	function shipping_import(){
		if (is_post()) {
			$this->upload();
		}else{
			$data['local_view'] 	= 'master/v_shipping_import';
			$this->load->view('v_manage',$data);	
		}
	}

	function shipping_csv(){
		$ship			=	$this->db->get('mst_delivery');
		$map_city		= $this->map_city();
		$map_province	= $this->map_province();
		$dd[] 			= array("No","Province","City","id_city","jne","jnt","ninja","wahana","pos");

		$i=0;foreach ($ship->result() as $v) {$i++;
			$dd[] = array($i,$map_province[$map_city[$v->id_city]['province']],$map_city[$v->id_city]['city'],$v->id_city,$v->jne,$v->jnt,$v->ninja,$v->wahana,$v->pos);
		}
		$this->download($dd);
	}

	function map_city(){
		$c = $this->db->get('mst_city');
		$cc = [];
		foreach ($c->result() as $k) {
			$cc[$k->id]['city']	 	= $k->city;
			$cc[$k->id]['province'] = $k->id_province;
		}
		// debug_array($cc);
		return $cc;
	}

	function map_province(){
		$c = $this->db->get('mst_province');
		$cc = [];
		foreach ($c->result() as $k) {
			$cc[$k->id]	 	= $k->province;
		}
		return $cc;
	}

	private function download($data){
		$date = date_create();
		$d = date_timestamp_get($date);
		$list = $data;
		$fp = fopen("assets/csv/$d.csv", 'w');
		foreach ($list as $fields) {
			fputcsv($fp, $fields);
		}
		fclose($fp);

		$file_name = "$d.csv";
		$file_url = base_url()."assets/csv/$d.csv";
		header('Content-Type: application/octet-stream');
		header("Content-Transfer-Encoding: Binary"); 
		header("Content-disposition: attachment; filename=\"".$file_name."\""); 
		readfile($file_url);
		exit;
	}

	function upload(){
		$_FILES['userfile']['name']	= strtolower($_FILES['userfile']['name']);
		$config['upload_path']		= 'assets/csv';
		$config['allowed_types']	= '*';
		$config['max_size']			= '100000';
		$config['encrypt_name']		= true;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload()){
			$this->session->set_flashdata('message',$this->upload->display_errors());
			redirect(base_url('manage/master/shipping_import'));
		}else{
			$a = $this->upload->data();
			$csv = $this->readCSV("assets/csv/".$a['file_name']);
			$this->writeToSQL($csv);
			$this->session->set_flashdata('message',"Data imported successfully");
			redirect(base_url('manage/master/shipping'));
		}
	}

	function readCSV($csvFile){
		$file_handle = fopen($csvFile, 'r');
		while (!feof($file_handle) ) {
			$line_of_text[] = fgetcsv($file_handle, 1024);
		}
		fclose($file_handle);
		return $line_of_text;
	}

	function writeToSQL($ar){
		unset($ar[0]);
		unset($ar[count($ar)]);

		foreach ($ar as $d) {
			$data []=array(
				"id_city" => $d[3],
				"jne" => $d[4],
				"jnt" => $d[5],
				"ninja" => $d[6],
				"wahana" => $d[7],
				"pos" => $d[8]
				);
		}
		$this->db->truncate('mst_delivery');
		$this->db->insert_batch('mst_delivery', $data); 
	}

}