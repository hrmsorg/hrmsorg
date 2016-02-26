<?php
/**
 *
 */
class general extends CI_Model
{

  function __construct()
  {
    // if($this->uri->segment(1)!="login"
		// 	and $this->uri->segment(2)!="generate_tanggal"
		// 	and $this->uri->segment(2)!="cron_cek_deposit"){
		// 	if($this->session->userdata('id')==0 or $this->session->userdata('id')==""){
		// 		$this->session->set_userdata('revert_data',0);
		// 		$this->session->set_userdata('sekarang',0);
		// 		$this->session->set_userdata('revert',0);
		// 		$this->session->set_userdata('saldo',0);
		// 		$this->session->set_userdata('pending',0);
		// 		$this->session->set_userdata('saldosekarang',0);
		// 		redirect(base_url("login"));
		// 	}
		// }
  }

  public function load($data=array())
  {
    $this->load->view('dashboard/header');
    $this->load->view('dashboard/menu');
    $this->load->view($data);
    $this->load->view('dashboard/footer');
    // $this->general->logdata($page,$data);
  }

  public function save_company($data)
  {
  	$this->db->insert('perusahaan', $data);

  }
//ABSENT
  public function save_absent($data)
  {
  	$this->db->insert('absensi', $data);
  }

//master cuti
  public function save_master_cuti($data)
  {
    $this->db->insert('master_cuti', $data);
  }

//cuti
  public function save_cuti_add($data)
  {
    $this->db->insert('cuti', $data);
  }
  //overtime
    public function save_overtime_add($data)
    {
      $this->db->insert('lembur', $data);
    }

//MANAGEMENT
  public function save_master_gaji($data)
  {
    $this->db->insert('master_gaji', $data);
  }

  //division
  public function save_division($data)
    {
      $this->db->insert('divisi', $data);
    }


}

 ?>
