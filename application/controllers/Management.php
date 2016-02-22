<?php

/**
*
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Management extends CI_Controller
{

//function master_gaji
		public function master_gaji()
	{
		$this->load->view('management/salary/add');
	}

//function division
	public function division()
	{
			$this->load->view('management/division/all');
	}

//function level
	public function level()
	{
			$this->load->view('management/level/all');
	}
}
