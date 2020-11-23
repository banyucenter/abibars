<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

    public function index()
	{
		$this->load->view('public/component/header');
		$this->load->view('public/component/menu');
        $this->load->view('public/component/newsletter');
		$this->load->view('public/component/footer');
    }

}