<?php

/**
*
*/
defined('BASEPATH') OR exit('No direct script access allowed');

	class Company extends CI_Controller

	{
		public function __construct() {
        parent::__construct();
        $this->load->model('General');
    }

			public function company_add()

		{
			$this->general->load('company/add');
		}

		// 	public function save_company_add()
		// {
		//
		// 		$config['upload_path'] = 'uploads/';
		// 		$config['allowed_types'] = 'gif|jpg|png';
		// 		$config['max_size']	= '1000';
		// 		$config['max_width']  = '1024';
		// 		$config['max_height']  = '768';
		//
		// 		$this->load->library('upload', $config);
		//
		// 		$this->upload->do_upload(
		// 			$data = array(
		// 				'logo' => $this->upload->data(),
		// 				'nama'=>$this->input->post('nama'),
		// 				'alamat'=>$this->input->post('alamat'),
		// 				'kode_pos'=>$this->input->post('kode_pos'),
		// 				'npwp'=>$this->input->post('npwp'),
		// 				'email'=>$this->input->post('email'),
		// 				'ket'=>$this->input->post('ket'),
		// 				'no_telp'=>$this->input->post('no_telp')
		// 				));
		//
		// 		}
		// 		$this->General->save_company('perusahaan', $data);
		// 	 	redirect('Company/company_add');
		//
		//
		// 		}
		//
		// }
		//
		// 		$config = array(
		// 			'allowed_types' => 'jpg|jpeg|gif|png|bmp',
		// 			'upload_path' => './assets/images',
		// 			'file_name' => url_title($this->input->post('logo'))
		// 			);
		// 		$this->load->library('upload', $config);
		// 		$this->upload->initialize($config);
		//
		// 		if (!$this->upload->do_upload('logo')) {
		// 			echo $this->upload->display_errors();
		// 		}
		// 		else
		// 		{
		// 			$data = array(
		// 				'logo' => $this->upload->file_name,
		// 				'nama'=>$this->input->post('nama'),
		// 				'alamat'=>$this->input->post('alamat'),
		// 				'kode_pos'=>$this->input->post('kode_pos'),
		// 				'npwp'=>$this->input->post('npwp'),
		// 				'email'=>$this->input->post('email'),
		// 				'ket'=>$this->input->post('ket'),
		// 				'no_telp'=>$this->input->post('no_telp')
		// 				);
		//
		// 		}
		// 		$this->General->save_company('perusahaan', $data);
		// 		redirect('Company/company_add');
		// 	}
		}
