<?php
/**
 *
 */
class hrms extends ci_model
{

  function test()
  {
    $query=$this->db->get('pg_hrms');
  }
  public function load($page,$data=array())
	{
		$this->load->view('Utility/Header');
		$this->load->view('Utility/Menu');
		$this->load->view($page,$data);
		$this->load->view('Utility/Footer');
		$this->hrms->logdata($page,$data);
	}


}


 ?>
