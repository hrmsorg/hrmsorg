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
				$data['id_level'] = $this->db->where_in('id')->get('level')->result_array();
				$this->general->load('management/salary/all',$data);
		}

	

		public function save_salary_add()
		{
				$data = array (
						'id_perusahaan'			=> 1,
						'id_karyawan'			=> 1,
						'id_level'			=> 1,
						'pokok'					=>$this->input->post('pokok'),
						'tunjangan'				=>$this->input->post('tunjangan'),
						'periode_kerja_awal'	=>$this->input->post('periode_kerja_awal'),
						'periode_kerja_akhir'	=>$this->input->post('periode_kerja_akhir')
					);

				$this->General->save_salary_add($data);
				redirect('salary/salary_all');
		}
		public function get_salary_add()
		{
			    $data['salary_all'] = $this->db->get('gaji')->result_array();
			    $data['id_perusahaan'] = $this->db->where_in('id')->get('perusahaan')->result_array();
			    $data['id_karyawan'] = $this->db->where_in('id')->get('karyawan')->result_array();
			    $data['id_level'] = $this->db->where_in('id')->get('level')->result_array();
			    $this->general->load('management/salary/add', $data);
		}
		public function salary_delete($id)
					{
						$this->db->where('id',$id);
						$this->db->delete('gaji');
						redirect(base_url('Salary/salary_all'));
					}
		public function salary_edit($id)
					{
						$data = array();
						$data['salary_all'] = $this->db->get('gaji')->result_array();
						$data['salary_all'] = $this->db->where_in('id',$id)->get('gaji')->row_array();
						$this->general->load('management/salary/edit', $data);
					}
		public function save_salary_update()
					{
						$id = $this->input->post('id');
						$data = array(
						// 'id' =>  $this->input->post('id'),
						'id_perusahaan'			=> 1,
						'id_karyawan'			=> 1,
						'id_level'			=> 1,
						'pokok'					=>$this->input->post('pokok'),
						'tunjangan'				=>$this->input->post('tunjangan'),
						'periode_kerja_awal'	=>$this->input->post('periode_kerja_awal'),
						'periode_kerja_akhir'	=>$this->input->post('periode_kerja_akhir')
							);
								
						$this->db->where('id', $id);
						$this->db->update('gaji', $data);
						
						redirect(base_url('Salary/salary_all'));
					}

}