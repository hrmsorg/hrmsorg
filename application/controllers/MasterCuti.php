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
				$this->general->load('absent/mastercuti/all');
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


}
