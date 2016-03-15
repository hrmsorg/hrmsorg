<?php

/**
*
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Free extends CI_Controller
{

		public function __construct()
		{
        parent::__construct();
        $this->load->model('General');
    	}

    	//free
		public function free_all()
		{
			$this->general->load('absent/free/all');
		}

		public function free_add()
		{
			$this->general->load('absent/free/add');
		}
}