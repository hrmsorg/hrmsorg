<?php

/**
*
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Absent extends CI_Controller
{

		public function __construct()
		{
        parent::__construct();
        $this->load->model('General');
    }



//master cuti
		public function master_cuti()
		{
				$this->general->load('absent/mastercuti/all');
		}

		public function save_master_cuti()
		{
				$data = array (

						'id'=>$this->input->post('id'),
						'jenis'=>$this->input->post('jenis'),
						'ket'=>$this->input->post('ket'));

				$this->General->save_master_cuti($data);
				redirect('Absent/master_cuti');
		}

//absent
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
