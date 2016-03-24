<?php

/**
*
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Overtime extends CI_Controller
{

		public function __construct()
		{
        parent::__construct();
        $this->load->model('General');
    	}

    	//overtime
		public function overtime_all()
		{

				$data['overtime_all'] = $this->db->get('lembur')->result_array(); 
				$data['id_perusahaan'] = $this->db->where_in('id')->get('perusahaan')->result_array();
				$data['id_karyawan'] = $this->db->where_in('id')->get('karyawan')->result_array();
				$this->general->load('absent/overtime/all',$data);
		}
		

		public function save_overtime_add()
		{
				$data = array (
						'id_perusahaan'		=> 1,
						'id_karyawan'		=> 1,
						'tgl'				=>$this->input->post('tgl'),
						'jam_awal'			=>$this->input->post('jam_awal'),
						'jam_akhir'			=>$this->input->post('jam_akhir'),
						'durasi'			=>$this->input->post('durasi')

					);

				$this->General->save_overtime_add($data);
				redirect('Overtime/overtime_all');
		}
		public function get_overtime_add()
		{
			    $data['overtime_all'] = $this->db->get('lembur')->result_array();
			    $data['id_perusahaan'] = $this->db->where_in('id')->get('perusahaan')->result_array();
			    $data['id_karyawan'] = $this->db->where_in('id')->get('karyawan')->result_array();
			    $this->general->load('absent/overtime/add', $data);
		}
		public function overtime_delete($id)
					{
						$this->db->where('id',$id);
						$this->db->delete('lembur');
						redirect(base_url('overtime/overtime_all'));
					}
		public function overtime_edit($id)
					{
						$data = array();
						$data['overtime_all'] = $this->db->get('lembur')->result_array();
						$data['overtime_all'] = $this->db->where_in('id',$id)->get('lembur')->row_array();
						$this->general->load('absent/overtime/edit', $data);
					}
		public function save_overtime_update()
					{
						$id = $this->input->post('id');
						$data = array(
						// 'id' =>  $this->input->post('id'),
						'id_perusahaan'		=> 1,
						'id_karyawan'		=> 1,
						'tgl'				=>$this->input->post('tgl'),
						'jam_awal'			=>$this->input->post('jam_awal'),
						'jam_akhir'			=>$this->input->post('jam_akhir'),
						'durasi'			=>$this->input->post('durasi')

						);
								
						$this->db->where('id', $id);
						$this->db->update('lembur', $data);
						
						redirect(base_url('overtime/overtime_all'));
					}


}