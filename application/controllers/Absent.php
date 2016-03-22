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

//absent

    	public function get_absent_all()
    	{
    			$data['get_absent_all'] = $this->db->get('absensi')->result_array(); 
				$data['id_perusahaan'] = $this->db->where_in('id')->get('perusahaan')->result_array();
				$data['id_karyawan'] = $this->db->where_in('id')->get('karyawan')->result_array();
    			$this->general->load('absent/absensi/all',$data);
    	}

		public function get_absent_add()
		{
				$this->general->load('absent/absensi/add');
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
