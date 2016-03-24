<?php

/**
*
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Level extends CI_Controller
{

		public function __construct()
		{
        parent::__construct();
        $this->load->model('General');
				$this->load->library('pagination');
    	}

			public function index()
			{
				//------------------------------------------------------------------------------------
				$getData = $this->db->get('level');
				$a = $getData->num_rows();
				$config['base_url'] = site_url().'/level/index'; //set the base url for pagination
				$config['total_rows'] = $a; //total rows
				$config['per_page'] = '6'; //the number of per page for pagination
				$config['uri_segment'] = 3; //see from base_url. 3 for this case
				$config['full_tag_open'] = '<p class=pagination>';
				$config['full_tag_close'] = '</p>';
				$this->pagination->initialize($config); //initialize pagination
				//------------------------------------------------------------------------------------

				$data['judul'] = 'Photo Album';

				$data['level'] = $this->general->get_level($config['per_page'],$this->uri->segment(3));

				$this->general->load('management/level/all', $data);
			}

			public function tambah()
			{
				$data['error'] = '';

				$data['judul'] = 'Level';

				$this->general->load('management/level/add', $data);
			}

			public function proses_tambah()
			{

				// 'title' => $this->input->post('judul'),
	  		// 'photo_url' => $nama_foto,
	  		// 'created' => $tanggal,
	      // 'id_perusahaan'=>1,
	      // 'ket'=> $this->input->post('ket_level'),
	      // 'tugas_utama'=>$this->input->post('tugas_level')
				$this->load->library('form_validation');

				$nama_asli = $_FILES['userfile']['name'];

				$judul = $this->input->post('judul',TRUE);
				$ket_level = $this->input->post('ket_level',TRUE);
				$tugas_level = $this->input->post('tugas_level',TRUE);

				// Konfigurasi Upload Gambar

				$config['file_name'] = $judul.'_'.'_'.$nama_asli;
				$config['upload_path'] = './application/views/management/level/photo';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']	= '1024';
				$config['max_width']  = '1600';
				$config['max_height']  = '1200';

				// End Konfigurasi Upload Gambar

				// Memuat Library Upload File
				$this->load->library('upload', $config);

				$this->form_validation->set_message('required', '%s is required.');
				$this->form_validation->set_message('min_length', '%s Minimal %s Karakter.');
				$this->form_validation->set_message('max_length', '%s Maksimal %s Karakter.');
				$this->form_validation->set_message('is_unique', '%s Telah Terdaftar');
				$this->form_validation->set_message('matches', '%s Tidak Cocok dengan %s.');
				$this->form_validation->set_message('numeric', '%s Harus diisi Angka.');

				$this->form_validation->set_rules('judul', 'Title', 'trim|required|is_unique[level.title]');

				if (($this->form_validation->run() === FALSE) || (! $this->upload->do_upload()))
				{
					// Jika Konfigurasi tidak cocok :
					$data = array('error' => $this->upload->display_errors('<span class="error">','</span>'));

					$data['judul'] = 'Photo Album';

					$this->general->load('management/level/add', $data);

				}
				else{

					$data = array('upload_data' => $this->upload->data());

					$tanggal = date('Y-m-d');

					$get_name = $this->upload->data();
					$nama_foto = $get_name['file_name'];

					$this->general->tambah_level($nama_foto,$tanggal);

					redirect('level','refresh');

				}

			}

			public function proses_hapus($id_level)
			{

				$level = $this->general->link_level($id_level);

				if ($level->num_rows() > 0)
				{

					$row = $level->row();

					$file_photo = $row->photo_url;

					$path_file = './application/views/management/level/photo/';
					unlink($path_file.$file_photo);

				}

				$this->general->hapus_level($id_level);

				redirect('level','refresh');

			}
			public function proses_edit($id_level)
			{

				$level = $this->general->link_level($id_level);

				if ($level->num_rows() > 0)
				{

					$row = $level->row();

					$file_photo = $row->photo_url;

					$path_file = './application/views/management/level/photo/';
					unlink($path_file.$file_photo);

				}

				$this->general->hapus_level($id_level);

				redirect('level','refresh');

			}
			// public function save_division_update()
			// 			{
			// 				$data['divisi'] = $this->db->get('divisi')->result_array();
			// 				$data['id_perusahaan'] = $this->db->where_in('id')->get('perusahaan')->result_array();
			// 				$data = $this->input->post();
			// 				$this->db->where('id', $data['id']);
			// 				$this->db->update('divisi',$data);
			// 				$this->general->save_division_update($data);
			// 				redirect(base_url('division/division/all', $data));
			// 			}

}
