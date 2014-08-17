<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Partials extends CI_Controller {
	
	public function index($partial='error')
	{
		$this->load->view("partials/".$partial);
	}
}
