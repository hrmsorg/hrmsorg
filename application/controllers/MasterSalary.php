<?php

/**
*
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class MasterSalary extends CI_Controller
{

		public function __construct()
		{
        parent::__construct();
        $this->load->model('General');
    }


		public function master_salary()
		{
				$data['master_salary'] = $this->db->get('master_gaji')->result_array();
				$data['id_perusahaan'] = $this->db->where_in('id')->get('perusahaan')->result_array();
				$data['id_divisi'] = $this->db->where_in('id')->get('divisi')->result_array();
				$data['id_jabatan'] = $this->db->where_in('id')->get('jabatan')->result_array();
				$this->general->load('management/master_salary/all',$data);
		}

		public function save_master_salary()
		{
				$data = $this->input->post();
				$data = array (

				
				'id_perusahaan'=>1,
				'id_divisi'=>1,
				'id_jabatan'=>1,
				'gaji_awal'=>$this->input->post('gaji_awal'),
				'gaji_akhir'=>$this->input->post('gaji_akhir'),
				'ket'=>$this->input->post('ket'));
				$this->general->save_master_salary($data);
				redirect('MasterSalary/master_salary');
		}


		public function master_salary_delete($id)
		{
			$this->db->where('id',$id);
			$this->db->delete('master_gaji');
			redirect(base_url('management/master_gaji/all'));
		}


		public function master_salary_edit($id)
		{
			$data = array();
			$data['master_gaji'] = $this->db->get('master_gaji')->result_array();
			$data['master_gaji'] = $this->db->where_in('id',$id)->get('master_gaji')->row_array();
			$this->general->load('management/master_salary/edit',$data);
		}


		public function master_salary_update()
		{
			$data['master_gaji'] = $this->db->get('master_gaji')->result_array();
			$data = $this->input->post();
			$this->db->where('id', $data['id']);
			$this->db->update('master_gaji',$data);
			$this->general->save_master_gaji_update($data);
			redirect(base_url('management/master_salary/all'));
		}



}
