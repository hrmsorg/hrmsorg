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

//cuti
		public function cuti_all()
		{
				
				$data['cuti_all'] = $this->db->get('cuti')->result_array(); 
				$data['id_perusahaan'] = $this->db->where_in('id')->get('perusahaan')->result_array();
				$data['id_karyawan'] = $this->db->where_in('id')->get('karyawan')->result_array();
				$this->general->load('absent/cuti/all',$data);
		}

		public function cuti_add()
		{
				$this->general->load('absent/cuti/add');
		}

		public function save_cuti_add()
		{
				$data = array (
						'id_perusahaan'		=> 2,
						'id_karyawan'		=> 2,
						'tgl_awal'			=>$this->input->post('tgl_awal'),
						'tgl_akhir'			=>$this->input->post('tgl_akhir'),
						'jam_awal'			=>$this->input->post('jam_awal'),
						'jam_akhir'			=>$this->input->post('jam_akhir'),
						'ket'				=>$this->input->post('ket'),
						'approved'			=>$this->input->post('approved')

					);

				$this->General->save_cuti_add($data);
				redirect('Absent/cuti_add');
		}

//overtime
		public function overtime_all()
		{

				$data['overtime_all'] = $this->db->get('lembur')->result_array(); 
				$data['id_perusahaan'] = $this->db->where_in('id')->get('perusahaan')->result_array();
				$data['id_karyawan'] = $this->db->where_in('id')->get('karyawan')->result_array();
				$this->general->load('absent/overtime/all',$data);
		}
		public function overtime_add()
		{
				$this->general->load('absent/overtime/add');
		}

		public function save_overtime_add()
		{
				$data = array (
						'id_perusahaan'		=> 1,
						'id_karyawan'		=> 1,
						'tgl'				=>$this->input->post('tgl'),
						'jam_awal'			=>$this->input->post('jam_awal'),
						'jam_akhir'			=>$this->input->post('jam_akhir'),
						'durasi'				=>$this->input->post('durasi')

					);

				$this->General->save_overtime_add($data);
				redirect('Absent/overtime_add');
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

//free
		public function free_all()
		{
				$this->general->load('absent/free/all');
		}

		public function free_add()
		{
				$this->general->load('absent/free/add');
		}

}
