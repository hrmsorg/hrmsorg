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
		public function get_cuti_add()
		{
			    $data['cuti_all'] = $this->db->get('cuti')->result_array();
			    $data['id_perusahaan'] = $this->db->where_in('id')->get('perusahaan')->result_array();
			    $data['id_karyawan'] = $this->db->where_in('id')->get('karyawan')->result_array();
			    $this->general->load('absent/cuti/add', $data);
		}
		public function cuti_delete($id)
					{
						$this->db->where('id',$id);
						$this->db->delete('cuti');
						redirect(base_url('Cuti/cuti_all'));
					}
		public function cuti_edit($id)
					{
						$data = array();
						$data['cuti_all'] = $this->db->get('cuti')->result_array();
						$data['cuti_all'] = $this->db->where_in('id',$id)->get('cuti')->row_array();
						$this->general->load('absent/cuti/edit', $data);
					}
		public function save_cuti_update()
					{
						$id = $this->input->post('id');
						$data = array(
						// 'id' =>  $this->input->post('id'),
						'id_perusahaan'		=> 2,
						'id_karyawan'		=> 2,
			            'tgl_awal'			=>$this->input->post('tgl_awal'),
						'tgl_akhir'			=>$this->input->post('tgl_akhir'),
						'jam_awal'			=>$this->input->post('jam_awal'),
						'jam_akhir'			=>$this->input->post('jam_akhir'),
						'ket'				=>$this->input->post('ket'),
						'approved'			=>$this->input->post('approved')

						);
								
						$this->db->where('id', $id);
						$this->db->update('cuti', $data);
						
						redirect(base_url('Cuti/cuti_all'));
					}

}