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

	$this->general->load('absent/cuti/add');

	}
	public function master_cuti()

	{

	$this->general->load('absent/mastercuti/all');

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
				'tgl'		=>$this->input->post('tgl'),
				'jam_datang'=>$this->input->post('jam_datang'),
				'jam_pulang'=>$this->input->post('jam_pulang'),
				'ket'=>$this->input->post('ket'));

		$this->General->save_absent($data);
		redirect('Absent/absent_add');
	}

}
