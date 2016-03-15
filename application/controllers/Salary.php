<?php

/**
*
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Salary extends CI_Controller
{

		public function __construct()
		{
        parent::__construct();
        $this->load->model('General');
    	}
    	//salary
		public function salary_all()
		{
				
				$data['salary_all'] = $this->db->get('gaji')->result_array(); 
				$data['id_perusahaan'] = $this->db->where_in('id')->get('perusahaan')->result_array();
				$data['id_karyawan'] = $this->db->where_in('id')->get('karyawan')->result_array();
				$data['id_jabatan'] = $this->db->where_in('id')->get('jabatan')->result_array();
				$this->general->load('management/salary/all',$data);
		}

	

		public function save_salary_add()
		{
				$data = array (
						'id_perusahaan'			=> 1,
						'id_karyawan'			=> 1,
						'id_jabatan'			=> 1,
						'pokok'					=>$this->input->post('pokok'),
						'tunjangan'				=>$this->input->post('tunjangan'),
						'periode_kerja_awal'	=>$this->input->post('periode_kerja_awal'),
						'periode_kerja_akhir'	=>$this->input->post('periode_kerja_akhir')
					);

				$this->General->save_salary_add($data);
				redirect('salary/salary_all');
		}
}