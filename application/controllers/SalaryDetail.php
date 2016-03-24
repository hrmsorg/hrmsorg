<?php

/**
*
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class SalaryDetail extends CI_Controller
{

		public function __construct()
		{
        parent::__construct();
        $this->load->model('General');
    	}
    	
    	//function salary_detail
		public function salary_detail() 
		{
			$data['detail_gaji'] = $this->db->get('detail_gaji')->result_array();
			$data['id'] = $this->db->where_in('id')->get('gaji')->result_array();
			$this->general->load('management/salary_detail/all', $data);
			// //pagination
			// $this->load->library('pagination');

			// $config['base_url'] = 'http://example.com/index.php/test/page/';
			// $config['total_rows'] = 200;
			// $config['per_page'] = 20;

			// $this->pagination->initialize($config);

			// echo $this->pagination->create_links();
		}
		public function salary_detail_add()
		{
			$this->general->load('management/salary_detail/add');
		}
		
		public function save_salary_detail_add()
		{
			$data = $this->input->post();
			$data = array (
				'id_gaji'=> $this->input->post('id_gaji'),
				'jumlah'=>$this->input->post('jumlah'),
				'tgl'=>$this->input->post('tgl'),
				'ket'=>$this->input->post('ket'),
				'tipe'=>$this->input->post('tipe'),
				'jenis'=>$this->input->post('jenis'));

				$this->general->save_salary_detail_add($data);

				redirect(base_url('SalaryDetail/salary_detail'));
		}

		public function salary_detail_delete($id)
		{
			$this->db->where('id',$id);
			$this->db->delete('detail_gaji');
			
			redirect(base_url('SalaryDetail/salary_detail'));
		}
		
		public function salary_detail_edit($id)
		{
			$data = array();
			$data['detail_gaji'] = $this->db->get('detail_gaji')->result_array();
			$data['detail_gaji'] = $this->db->where_in('id',$id)->get('detail_gaji')->row_array();

			$this->general->load('management/salary_detail/edit',$data);

		}
		
		public function save_salary_detail_update()
		{
			// $data['id_gaji'] = $this->db->where_in('id')->get('gaji')->result_array();
			$id = $this->input->post('id');
			$data = array(
			// 'id' =>  $this->input->post('id'),
            'id_gaji'=> $this->input->post('id_gaji'),
			'jumlah'=>$this->input->post('jumlah'),
			'tgl'=>$this->input->post('tgl'),
			'ket'=>$this->input->post('ket'),
			'tipe'=>$this->input->post('tipe'),
			'jenis'=>$this->input->post('jenis'));
					
			$this->db->where('id', $id);
			$this->db->update('detail_gaji', $data);
			// $this->general->save_salary_detail_update($data);
			
			redirect(base_url('SalaryDetail/salary_detail'));

		}
}