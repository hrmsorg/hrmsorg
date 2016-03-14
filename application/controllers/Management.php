<?php

/**
*
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Management extends CI_Controller
{

//function master_salary
						public function master_gaji()
					{
						$this->general->load('management/master_salary/all');
					}

						public function save_master_gaji()
					{
						$data = array (

								'gaji_awal'=>$this->input->post('gaji_awal'),
								'gaji_akhir'=>$this->input->post('gaji_akhir'),
								'ket'=>$this->input->post('ket'));

						$this->general->save_master_gaji($data);
						redirect('Management/master_gaji');
					}

//function division

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

								redirect('Management/division', $data);
							}
				public function division_delete($id)
							{
								$this->db->where('id',$id);
								$this->db->delete('divisi');
								redirect(base_url('management/division/all'));
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
								redirect(base_url('Management/division/all', $data));
							}




//function level
					public function level()
								{
										$this->general->load('management/level/all');
								}
//function employee

					public function employee()
					{
							$this->general->load('management/employee/all');
					}

					public function save_employee()
					{
						$data = array (

							'id_perusahaan'=> 1,
							'id_divisi'=> 1,
							'id_jabatan'=> 1,
							'kode'=> 1,
							'nama'=>$this->input->post('nama'),
							'tempat_lahir'=>$this->input->post('tempat_lahir'),
							'tgl_lahir'=>$this->input->post('tgl_lahir'),
							'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
							'mulai_bekerja'=>$this->input->post('mulai_bekerja'),
							'alamat'=>$this->input->post('alamat'),
							'agama'=>$this->input->post('agama'),
							'kewarganegaraan'=>$this->input->post('kewarganegaraan'),
							'no_tlp'=>$this->input->post('no_tlp'),
							'no_ktp'=>$this->input->post('no_ktp'),
							'no_rek'=>$this->input->post('no_rek'),
							'bank'=>$this->input->post('bank'));
							//'foto'=>$this->input->post('foto'));//

							$this->general->save_employee($data);

							redirect('Management/employee');

					}
					public function new_employee()
					{
						$this->general->load('management/new_employee/add');
					}

					public function save_new_employee()
					{
						$data = array (

							'id'=> 1,
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

							redirect('Management/new_employee/add');
								
					}

			//function salary_detail
					public function salary_detail()
					{
						$data['detail_gaji'] = $this->db->get('detail_gaji')->result_array();
						$data['id_gaji'] = $this->db->where_in('id')->get('gaji')->result_array();
						$this->general->load('management/salary_detail/all', $data);
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

							redirect('Management/salary_detail/all',$data);
					}
					public function salary_detail_delete($id)
					{
						$this->db->where('id',$id);
						$this->db->delete('detail_gaji');
						redirect(base_url('management/salary_detail/all'));
					}
					public function salary_detail_edit($id)
					{
						$data = array();
						$data['detail_gaji'] = $this->db->get('detail_gaji')->result_array();
						$data['detail_gaji'] = $this->db->where_in('id',$id)->get('detail_gaji')->row_array();
						$this->general->load('Management/salary_detail/edit',$data);
					}
					public function save_salary_detail_update()
					{
						$data['detail_gaji'] = $this->db->get('detail_gaji')->result_array();
						$data['id_gaji'] = $this->db->where_in('id')->get('gaji')->result_array();
						$data = $this->input->post();
						$this->db->where('id', $data['id']);
						$this->db->update('detail_gaji',$data);
						$this->general->save_salary_detail_update($data);
						redirect(base_url('Management/salary_detail/all',$data));
					}
}

	