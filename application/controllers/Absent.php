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

<<<<<<< HEAD
	public function master_cuti()

	{

	$this->general->load('absent/mastercuti/all');

	}


<<< HEAD
=======
>>>>>>> 6b9fb4c373801532eb40c55417edacdad0a4e8bd
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
				'jam_datang'=>$this->input->post('jam_datang'),
				'jam_pulang'=>$this->input->post('jam_pulang'),
				'ket'=>$this->input->post('ket'));

		$this->General->save_absent($data);
		redirect('Abset/absent_add');
	}

}
