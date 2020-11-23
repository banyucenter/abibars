<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

    function __Construct(){  
        parent::__Construct();
        $statuslogin = $this->session->userdata('loggedIn');  
        $jenisUser = $this->session->userdata('id_jenis_user');  
        
        if($statuslogin != TRUE && $jenisUser==1){
			$url=base_url();
			redirect($url);
        }
        
        $this->load->helper(array('form', 'url'));  
        $this->load->library(array('session', 'form_validation', 'email','upload'));   
        $this->load->database();  
        $this->load->model('ModelUser');  
        $this->load->model('ProdukModel');  
        $this->load->model('ModelBid');  
    }    

	function index()
	{

    }

    function penjual()
	{
        $data['penjual'] = $this->ModelUser->tampil_data_penjual()->result();
		$this->load->view('public/component/header');
		$this->load->view('public/component/menu');
        $this->load->view('admin/tampil_penjual',$data);
        $this->load->view('public/component/newsletter');
		$this->load->view('public/component/footer');
    }

    function pembeli()
	{
        $data['pembeli'] = $this->ModelUser->tampil_data_pembeli()->result();
		$this->load->view('public/component/header');
		$this->load->view('public/component/menu');
        $this->load->view('admin/tampil_pembeli',$data);
        $this->load->view('public/component/newsletter');
		$this->load->view('public/component/footer');
    }

    function produk()
	{
        $data['produk'] = $this->ProdukModel->tampil_semua()->result();
		$this->load->view('public/component/header');
		$this->load->view('public/component/menu');
        $this->load->view('admin/tampil_produk',$data);
        $this->load->view('public/component/newsletter');
		$this->load->view('public/component/footer');
    }

    function detail($idproduk)
	{
        $where = array('id_produk' => $idproduk);
        
        $data['detail'] = $this->ProdukModel->getDetail($where,'t_produk')->result();
        $data['countbid'] = $this->ProdukModel->getCount($idproduk)->result();
		$this->load->view('public/component/header');
		$this->load->view('public/component/menu');
        $this->load->view('admin/detail',$data);
        $this->load->view('public/component/newsletter');
		$this->load->view('public/component/footer');
    }

    function pelelang($idproduk)
	{
        $data['pembeli'] = $this->ModelBid->getLelang($idproduk)->result();
		$this->load->view('public/component/header');
		$this->load->view('public/component/menu');
        $this->load->view('admin/pelelang',$data);
        $this->load->view('public/component/newsletter');
		$this->load->view('public/component/footer');
    }




}