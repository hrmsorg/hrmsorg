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
    	}
		
		public function level()
		{
			$this->general->load('management/level/all');
		}
}
