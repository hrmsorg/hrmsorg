<?php

/**
*
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class NewEmployee extends CI_Controller
{

		public function __construct()
		{
        parent::__construct();
        $this->load->model('General');
    	}

    	public function new_employee_all()
		{
			$data['calon_karyawan'] = $this->db->get('calon_karyawan')->result_array();
			// $data['id'] = $this->db->where_in('id')->get('gaji')->result_array();
			$this->general->load('management/new_employee/all', $data);
		}

		public function new_employee_add()
		{
			$this->general->load('management/new_employee/add');
		}
		public function save_new_employee()
		{	
			$data = $this->input->post();
			$data = array (

			'nama'=>$this->input->post('nama'),
			'tempat_lahir'=>$this->input->post('tempat_lahir'),
			'tgl_lahir'=>$this->input->post('tgl_lahir'),
			'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
			'alamat'=>$this->input->post('alamat'),
			'agama'=>$this->input->post('agama'),
			'no_tlp'=>$this->input->post('no_tlp'),
			'no_ktp'=>$this->input->post('no_ktp'),
			'kewarganegaraan'=>$this->input->post('kewarganegaraan'),
			'email'=>$this->input->post('email'),
			'tgl_lamaran'=>$this->input->post('tgl_lamaran'),
			'status_lamaran'=>$this->input->post('status_lamaran'),
			'berkas'=>$this->input->post('berkas'));
			//'foto'=>$this->input->post('foto'));//

			$this->general->save_new_employee($data);

			redirect('NewEmployee/new_employee_all');
								
		}

		public function new_employee_delete($id)
		{
			$this->db->where('id',$id);
			$this->db->delete('calon_karyawan');

			redirect(base_url('NewEmployee/new_employee_all'));

		}

		public function new_employee_edit($id)
		{
			$data = array();
			$data['calon_karyawan'] = $this->db->get('calon_karyawan')->result_array();
			$data['calon_karyawan'] = $this->db->where_in('id',$id)->get('calon_karyawan')->row_array();

			$this->general->load('management/new_employee/edit',$data);

		}

		public function new_employee_update()
		{

			$id = $this->input->post('id');
			$data = array(

			'nama'=>$this->input->post('nama'),
			'tempat_lahir'=>$this->input->post('tempat_lahir'),
			'tgl_lahir'=>$this->input->post('tgl_lahir'),
			'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
			'alamat'=>$this->input->post('alamat'),
			'agama'=>$this->input->post('agama'),
			'no_tlp'=>$this->input->post('no_tlp'),
			'no_ktp'=>$this->input->post('no_ktp'),
			'kewarganegaraan'=>$this->input->post('kewarganegaraan'),
			'email'=>$this->input->post('email'),
			'tgl_lamaran'=>$this->input->post('tgl_lamaran'),
			'status_lamaran'=>$this->input->post('status_lamaran'),
			'berkas'=>$this->input->post('berkas'));
			//'foto'=>$this->input->post('foto'));//

					
			$this->db->where('id', $id);
			$this->db->update('calon_karyawan', $data);
			// $this->general->save_salary_detail_update($data);
			
			redirect(base_url('NewEmployee/new_employee/all'));
		}
}