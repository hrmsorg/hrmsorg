<?php

/**
*
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Division extends CI_Controller
{

		public function __construct()
		{
        parent::__construct();
        $this->load->model('General');
    	}
}