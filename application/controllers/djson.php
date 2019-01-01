<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Djson extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	function index(){

	}

	public function delivery(){
		$province = $this->db->get('mst_province');
		foreach ($province->result() as $p) {
			$mst_province[$p->id] = $p->province;
		}
		$data['mst_province'] = $mst_province;

		$city = $this->db->get('mst_city');
		foreach ($city->result() as $c) {
			$mst_city[$c->id_province][$c->id] = $c->city;
		}
		$data['mst_city'] = $mst_city;
		
		$kurir = $this->db->get('mst_delivery');
		foreach ($kurir->result() as $k) {
			if ($k->jne >0)
				$mst_kurir[$k->id_city]['jne'] = $k->jne;
			
			if ($k->jnt >0)
				$mst_kurir[$k->id_city]['jnt'] = $k->jnt;

			if ($k->ninja >0)
				$mst_kurir[$k->id_city]['ninja'] = $k->ninja;

			if ($k->wahana >0)
				$mst_kurir[$k->id_city]['wahana'] = $k->wahana;

			if ($k->pos >0)
				$mst_kurir[$k->id_city]['pos'] = $k->pos;
		}

		$data['mst_kurir'] = $mst_kurir;

		echo json_encode($data);
	}
}