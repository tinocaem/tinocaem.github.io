<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('html');
		
	}

	public function index(){
		$this->load->view('v_belajar');
	}

	public function tino(){
		echo "ini method tino pada controller belajar";
	}

	public function tampil(){
		$this->load->view('v_belajar');
	}

	public function kirim_data(){
		$data['nama_sekolah']="SMKN 1 Kras";
		$this->load->view('v_belajar',$data);
	}

	public function banyak_data(){
		$data_aray=array(
			'dusun'=>"Setonorejo",
			'desa'=>"Demangan",
			'kecamatan'=>"Kras"
		);
		$this->load->view('v_belajar',$data_aray);
	}

}

?>