<?php 

/**
* 
*/
class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		
		if($this->session->userdata('status')!="login"){
			redirect(base_url("login"));
		}
		$this->load->library('pdf');
        $this->load->model('m_data');
        $this->load->helper('url');
	}

	function index(){
        $data['user'] = $this->m_data->tampil_data()->result();
        $this->load->view('v_admin', $data);
			
	}
    function edit($id){
        $where = array('id' => $id);
        $data['user'] = $this->m_data->edit_data($where,'user')->result();
        $this->load->view('v_cetak',$data);
    }

 }