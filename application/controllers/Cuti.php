<?php

/**
*
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuti extends CI_Controller
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
				redirect('Cuti/cuti_all');
		}

}