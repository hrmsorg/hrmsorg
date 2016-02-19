<?php

/**
* 
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Management extends CI_Controller
{

		public function master_gaji()

	{

		$this->load->view('management/salary/add');
	
	}

}