<?php

/**
*
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class MasterCuti extends CI_Controller
{

		public function __construct()
		{
        parent::__construct();
        $this->load->model('General');
    }


		public function master_cuti()
		{
				$data['master_cuti'] = $this->db->get('master_cuti')->result_array();
				$this->general->load('absent/mastercuti/all',$data);
		}

		public function save_master_cuti()
		{
				$data = array (

						'id'=>$this->input->post('id'),
						'jenis'=>$this->input->post('jenis'),
						'ket'=>$this->input->post('ket'));

				$this->General->save_master_cuti($data);
				redirect('MasterCuti/master_cuti');
		}
		public function master_cuti_delete($id)
					{
						$this->db->where('id',$id);
						$this->db->delete('master_cuti');
						redirect(base_url('absent/mastercuti/all'));
					}
		public function master_cuti_edit($id)
					{
						$data = array();
						$data['master_cuti'] = $this->db->get('master_cuti')->result_array();
						$data['master_cuti'] = $this->db->where_in('id',$id)->get('master_cuti')->row_array();
						$this->general->load('absent/mastercuti/edit', $data);
					}
		public function save_master_cuti_update()
					{
						$data['master_cuti'] = $this->db->get('master_cuti')->result_array();
						$data = $this->input->post();
						$this->db->where('id', $data['id']);
						$this->db->update('master_cuti',$data);
						$this->general->save_master_cuti_update($data);
						redirect(base_url('absent/mastercuti/all', $data));
					}


}
