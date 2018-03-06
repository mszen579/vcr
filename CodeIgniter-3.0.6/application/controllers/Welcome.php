<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('view1');
	}
	public function __constract()
	{
		parent::__constract();
		$this->load->helper('url');

	}
}