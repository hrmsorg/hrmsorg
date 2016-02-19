<?php

/**
* 
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller
{

		public function company_add()

	{

		$this->load->view('company/add');
	
	}

}