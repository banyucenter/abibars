<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_Controller 
{
	function __Construct(){  
		parent::__Construct();
		$this->load->library('pagination');
 
        
        $this->load->helper(array('form', 'url'));  
		$this->load->library(array('session'));   
		$this->load->library('email');
		
        $this->load->database();  
		$this->load->model('ProdukModel');  
		$this->load->model('ModelBid');  
	}    
	

    public function index()
	{
		$data['produkowl'] = $this->ProdukModel->tampil_data_owl()->result();
		$data['slider'] = $this->ProdukModel->tampil_slide()->result();
		$data['filter'] = $this->ProdukModel->tampil_filter()->result();
		$data['active'] = $this->ProdukModel->tampil_active()->result();
		$this->load->view('public/component/header');
		$this->load->view('public/component/menu');
		$this->load->view('public/component/slider',$data);
		$this->load->view('public/component/banner-carousel',$data);
		$this->load->view('public/home',$data);
		$this->load->view('public/component/benefit');
		$this->load->view('public/component/newsletter');
		$this->load->view('public/component/footer');
	}

	public function semuakarya()
	{
		$jumlah_data = $this->ProdukModel->jumlah_data();

		$config['base_url'] = base_url().'home/semuakarya/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;
		$from = $this->uri->segment(3);
		$choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
     	 $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 	
		$data['semua'] = $this->ProdukModel->data($config['per_page'],$from);
		
		$this->load->view('public/component/header-group');
		$this->load->view('public/component/menu');
		//$this->load->view('public/component/slider');
		//$this->load->view('public/component/banner-carousel',$data);
		$this->load->view('public/semua',$data);
		//$this->load->view('public/component/benefit');
		//$this->load->view('public/component/newsletter');
		$this->load->view('public/component/footer-group');
	}

	public function yayasan(){
		$jumlah_data = $this->ProdukModel->jumlah_data_yayasan();

		$config['base_url'] = base_url().'home/yayasan/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 2;
		$from = $this->uri->segment(3);
		$choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
     	 $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 	
		$data['semua'] = $this->ProdukModel->data_yayasan($config['per_page'],$from);
		
		$this->load->view('public/component/header-group');
		$this->load->view('public/component/menu');
		//$this->load->view('public/component/slider');
		//$this->load->view('public/component/banner-carousel',$data);
		$this->load->view('public/yayasan',$data);
		//$this->load->view('public/component/benefit');
		//$this->load->view('public/component/newsletter');
		$this->load->view('public/component/footer-group');
	}

	public function volunteer(){
		$jumlah_data = $this->ProdukModel->jumlah_data_volunteer();

		$config['base_url'] = base_url().'home/yayasan/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 2;
		$from = $this->uri->segment(3);
		$choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
     	 $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 	
		$data['semua'] = $this->ProdukModel->data_volunteer($config['per_page'],$from);
		
		$this->load->view('public/component/header-group');
		$this->load->view('public/component/menu');
		//$this->load->view('public/component/slider');
		//$this->load->view('public/component/banner-carousel',$data);
		$this->load->view('public/volunteer',$data);
		//$this->load->view('public/component/benefit');
		//$this->load->view('public/component/newsletter');
		$this->load->view('public/component/footer-group');
	}


	public function detail($id)
	{
		$where = array('id_produk' => $id);
		$idproduk = $id;
		
		$data['detail'] = $this->ProdukModel->getDetail($where,'t_produk')->result();
		$data['countbid'] = $this->ProdukModel->getCount($idproduk)->result();
		$data['galeri'] = $this->ProdukModel->tampil_galeri($idproduk)->result();;

		$this->load->view('public/component/header-single');
		$this->load->view('public/component/menu');
		//$this->load->view('public/component/slider');
		//$this->load->view('public/component/banner-carousel',$data);
		$this->load->view('public/detailproduk',$data);
		//$this->load->view('public/component/benefit');
		$this->load->view('public/component/newsletter');
		$this->load->view('public/component/footer');
	}

	public function aksi_bid()
	{
		$id_produk = $_POST['id_produk'];  
		$jumlahBid = $_POST['jumlahBid'];  
		$userId = $this->session->userdata('userId');
		
		$created_at = date("Y-m-d H:i:s");

		$data = array(
			'waktu_bid' => $created_at,
			'id_produk' => $id_produk,    
			'jumlahBid' => $jumlahBid,
			'id_user' => $userId,
		); 
		
		if($this->ModelBid->insertbid($data))  
            {  
				
				$email = $this->session->userdata('emailUser');
                if($this->sendemail($email))  
                {  
                    // successfully sent mail to user email  
                    //$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Terimakasih telah mengikuti lelang ini!.</div>');  
                    redirect('lelang');
                }  
                else{  
                    redirect('lelang');
                }  
            }  
            else  
            {  
                redirect('lelang');
        } 

	}

	function sendemail($email){  
        // configure the email setting  
        $config['protocol'] = 'smtp';  
        $config['smtp_host'] = 'ssl://smtp.gmail.com'; //smtp host name  
        $config['smtp_port'] = '465'; //smtp port number  
        $config['smtp_user'] = 'lelangempati@gmail.com';  
        $config['smtp_pass'] = '4zureJKT2020*#*#*#'; //$from_email password  
        $config['mailtype'] = 'html';  
        $config['charset'] = 'iso-8859-1';  
        $config['wordwrap'] = TRUE;  
        $config['newline'] = "\r\n"; //use double quotes  
        $this->email->initialize($config);  
        $this->email->from('lelangempati@gmail.com', 'Lelang Empati');  
        $this->email->to($email);   
        $this->email->subject('Terimakasih telah mengikuti lelang');  
        $message = "<html><head><head></head><body><p>Hi,</p><p>Terimakasih atas partisipasi anda dalam lelang ini.</p><br><p>Pemenang lelang akan kami kabari via email ini.</p> <br/><p>Terimakasih,</p><p>Lelang Empati Team</p></body></html>";  
        $this->email->message($message);  
        return $this->email->send();  
    }  


    
}
