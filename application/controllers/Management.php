<?php

/**
*
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Management extends CI_Controller
{

//function master_gaji
		public function master_gaji()
	{
		$this->general->load('management/master_salary/all');
	}

		public function save_master_gaji()
	{
		$data = array (


				'gaji_awal'=>$this->input->post('gaji_awal'),
				'gaji_akhir'=>$this->input->post('gaji_akhir'),
				'ket'=>$this->input->post('ket'));

		$this->general->save_master_gaji($data);
		redirect('Management/master_gaji');
	}

//function division

					public function division()
							{
									$this->general->load('management/division/all');
							}

					//tabel :divisi-> id, id_perusahaan, nama, ket,tugas_utama
				public function save_division_add()
							{
								$data = array (

										'id_perusahaan'=> 1,
										'nama'=>$this->input->post('nama'),
										'ket'=>$this->input->post('ket'),
										'tugas_utama'=>$this->input->post('tugas_utama'));

								$this->general->save_division($data);

								redirect('Management/division');
							}

				

//function level
	public function level()
	{
			$this->load->view('management/level/all');
	}
//function employee
	public function employee()
	{
			$this->general->load('management/employee/all');
	}
}
