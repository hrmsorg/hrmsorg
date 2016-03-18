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

  public function load($page,$data=array())
  {
    $this->load->view('dashboard/header');
    $this->load->view('dashboard/menu');
    $this->load->view($page, $data);
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
//Salary
    public function save_salary_add($data)
    {
      $this->db->insert('gaji', $data);
    }



//MANAGEMENT
  public function save_master_salary($data)
  {
    $this->db->insert('master_gaji', $data);
  }

   


  //division
  

    public function save_division_update($data)
      {
        $this->db->update('divisi', $data);

      }
    public function get_division($id)
      {
        $this->db->where('id',$id);
        $xa = $this->db->get('divisi');
        $xa = $xa->row_array();
        return $xa;
      }
    //employee
  public function save_employee($data)
    {
      $this->db->insert('karyawan', $data);
    }


  public function save_new_employee($data)
    {
      $this->db->insert('calon_karyawan', $data);
    }

    //salary_detail
  public function save_salary_detail_add($data)

    {
      $this->db->insert('detail_gaji', $data);

    }
  public function save_salary_detail_update($id)
    {
      $this->db->update('detail_gaji', $id);
      $this->db->where('id_gaji')->get('detail_gaji');
      // $this->db->select('*');
      // $this->db->from('detail_gaji');
      // $this->db->where('id_gaji',$id );
      // $query = $this->db->get();
      // return $result = $query->row_array();
    }
   
  public function get_detail_gaji($id)
    {
      $this->db->where('id',$id);
      $xa = $this->db->get('detail_gaji');
      $xa = $xa->row_array();
      return $xa;
    }



  //division
  public function save_division($data)
    {
      $this->db->insert('divisi', $data);
    }

  //free
  public function save_free_add($data)
    {
      $this->db->insert('master_libur', $data); 
    }


}
 ?>
