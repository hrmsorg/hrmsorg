<?php

/**
*
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Free extends CI_Controller
{

		public function __construct()
		{
        parent::__construct();
        $this->load->model('General');
    	}

    	//free
		public function free_all()
		{
			$data['master_libur'] = $this->db->get('master_libur')->result_array();
			$this->general->load('absent/free/all', $data);
		}
		// show form add new 
		public function free_add()
		{
			$this->general->load('absent/free/add');
		}

		public function save_free_add()
		{
			$data = $this->input->post();
			$data = array (
				'tgl'=>$this->input->post('tgl'),
				'ket'=>$this->input->post('ket'),
				'judul'=>$this->input->post('judul'));

				$this->general->save_free_add($data);

				redirect(base_url('Free/free_all',$data));
		}
}