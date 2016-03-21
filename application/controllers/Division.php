<?php

/**
*
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Division extends CI_Controller
{

		public function __construct()
		{
        parent::__construct();
        $this->load->model('General');
    	}
 
			public function division()
					{ 
							$data['divisi'] = $this->db->get('divisi')->result_array();
							$data['id_perusahaan'] = $this->db->where_in('id')->get('perusahaan')->result_array();
							$this->general->load('management/division/all', $data);
					}

			//tabel :divisi-> id, id_perusahaan, nama, ket,tugas_utama
		public function save_division_add()
					{
						$data =$this->input->post();
						$data = array (

								'id_perusahaan'=> 1,
								'nama'=>$this->input->post('nama'),
								'ket'=>$this->input->post('ket'),
								'tugas_utama'=>$this->input->post('tugas_utama'));

						$this->general->save_division($data);

						redirect('division/division', $data);
					}
		public function division_delete($id)
					{
						$this->db->where('id',$id);
						$this->db->delete('divisi');
						redirect(base_url('division/division/all'));
					}
		public function division_edit($id)
					{
						$data = array();
						$data['divisi'] = $this->db->get('divisi')->result_array();
						$data['divisi'] = $this->db->where_in('id',$id)->get('divisi')->row_array();
						$this->general->load('Management/division/edit', $data);
					}
		public function save_division_update()
					{
						$data['divisi'] = $this->db->get('divisi')->result_array();
						$data['id_perusahaan'] = $this->db->where_in('id')->get('perusahaan')->result_array();
						$data = $this->input->post();
						$this->db->where('id', $data['id']);
						$this->db->update('divisi',$data);
						$this->general->save_division_update($data);
						redirect(base_url('division/division/all', $data));
					}



}
