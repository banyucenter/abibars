<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

    function __Construct(){  
        parent::__Construct();
        $statuslogin = $this->session->userdata('loggedIn');  
        

        if($statuslogin != TRUE){
			$url=base_url();
			redirect($url);
        }
        
        $this->load->helper(array('form', 'url'));  
        $this->load->library(array('session', 'form_validation', 'email','upload'));   
        $this->load->database();  
        $this->load->model('ModelUser');  
    }    

	public function index()
	{
        $id = $this->session->userdata('userId');  
        $jenisUser = $this->session->userdata('userLevel');  
        $data['user'] = $this->ModelUser->tampil_data($id)->result();
		
        if($jenisUser == 1){
            $this->load->view('public/component/header');
		    $this->load->view('public/component/menu');
            $this->load->view('public/profil',$data);
            $this->load->view('admin/dashboard',$data);
            $this->load->view('public/component/newsletter');
		    $this->load->view('public/component/footer');
        }else {
            $this->load->view('public/component/header');
		    $this->load->view('public/component/menu');
            $this->load->view('public/profil',$data);
            $this->load->view('public/component/newsletter');
		    $this->load->view('public/component/footer');
        }

        
    }
}