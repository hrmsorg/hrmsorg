<?php

/**
* 
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Absent extends CI_Controller
{

		public function __construct() {
        parent::__construct();
        $this->load->model('General');
    }

		public function cuti()

	{

		$this->load->view('absent/cuti');
	
	}

		public function absent_add()
	{
		$this->general->load('absent/absensi');
	}

		public function save_absent_add()
	{
		$data = array (
				'id_perusahaan'=> 1,
				'id_karyawan'=> 1,
				'tgl'=>$this->input->post('tgl'),
				'start'=>$this->input->post('jam_datang'),
				'finish'=>$this->input->post('jam_pulang'));

		$this->General->save_absent($data);
		redirect('');
	}

}