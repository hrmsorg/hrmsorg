<?php

/**
*
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller
{

		public function __construct()
		{
        parent::__construct();
        $this->load->model('General');
    	}

    	public function employee()
		{
			$this->general->load('management/employee/all');
		}

		public function save_employee()
		{
			$data = array (

			'id_perusahaan'=> 1,
			'id_divisi'=> 1,
			'id_jabatan'=> 1,
			'kode'=> 1,
			'nama'=>$this->input->post('nama'),
			'tempat_lahir'=>$this->input->post('tempat_lahir'),
			'tgl_lahir'=>$this->input->post('tgl_lahir'),
			'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
			'mulai_bekerja'=>$this->input->post('mulai_bekerja'),
			'alamat'=>$this->input->post('alamat'),
			'agama'=>$this->input->post('agama'),
			'kewarganegaraan'=>$this->input->post('kewarganegaraan'),
			'no_tlp'=>$this->input->post('no_tlp'),
			'no_ktp'=>$this->input->post('no_ktp'),
			'no_rek'=>$this->input->post('no_rek'),
			'bank'=>$this->input->post('bank'));
			//'foto'=>$this->input->post('foto'));//

			$this->general->save_employee($data);

			redirect('employee/employee/all');

		}
}