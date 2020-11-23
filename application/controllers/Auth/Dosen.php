<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

    function __Construct(){  
        parent::__Construct();
        $statuslogin = $this->session->userdata('loggedIn');  
        $jenisUser = $this->session->userdata('id_jenis_user');  
        
        if($statuslogin != TRUE && $jenisUser!=1){
			$url=base_url();
			redirect($url);
        }
        
        $this->load->helper(array('form', 'url'));  
        $this->load->library(array('session', 'form_validation', 'email','upload'));   
        $this->load->database();  
        $this->load->model('DosenModel');  
    }    

	public function index()
	{
        $data['data'] = $this->DosenModel->tampil_semua()->result();
		$this->load->view('public/component/header');
		$this->load->view('public/component/menu');
        $this->load->view('dosen/tampil', $data);
        $this->load->view('public/component/newsletter');
		$this->load->view('public/component/footer');
    }


    public function tambah()
    {
        $this->load->view('public/component/header');
		$this->load->view('public/component/menu');
        $this->load->view('dosen/tambah');
        $this->load->view('public/component/newsletter');
		$this->load->view('public/component/footer');
    }

    public function aksi_tambah()
    {

      $no_identitas = $this->input->post('no_identitas');
      $email   = $this->input->post('email');
      $nama_lengkap   = $this->input->post('nama_lengkap');
      $password   = $this->input->post('password');
      $phone   = $this->input->post('phone');
      $kode_pos   = $this->input->post('kode_pos');
      $alamat   = $this->input->post('alamat');
      $id_jenis_user   = 3;
      $status = 1;

      $data = array(
        'no_identitas'      => $no_identitas,
        'email'             => $email,
        'nama_lengkap'      => $nama_lengkap,
        'password'          => md5($password),
        'phone'             => $phone,
        'kode_pos'          => $kode_pos,
        'alamat'            => $alamat,
        'id_jenis_user'     => $id_jenis_user,
        'status'            => $status
      );
      
                       
	  $this->DosenModel->insert('t_user',$data);
      redirect('/auth/dosen');

    }

    public function edit($id)
    {
        $where = array('id_user' => $id);
        $data['data'] = $this->DosenModel->tampil_edit($where, 't_user')->result();
        $this->load->view('public/component/header');
		$this->load->view('public/component/menu');
        $this->load->view('dosen/edit',$data);
        $this->load->view('public/component/newsletter');
		$this->load->view('public/component/footer');
    }

    function update(){
        $id = $this->input->post('id_user');
        $no_identitas = $this->input->post('no_identitas');
        $email   = $this->input->post('email');
        $nama_lengkap   = $this->input->post('nama_lengkap');
        $password   = $this->input->post('password');
        $phone   = $this->input->post('phone');
        $kode_pos   = $this->input->post('kode_pos');
        $alamat   = $this->input->post('alamat');
        $id_jenis_user   = 3;
        $status = 1;
     
        $data = array(
            'no_identitas'      => $no_identitas,
            'email'             => $email,
            'nama_lengkap'      => $nama_lengkap,
            'password'          => md5($password),
            'phone'             => $phone,
            'kode_pos'          => $kode_pos,
            'alamat'            => $alamat,
            'id_jenis_user'     => $id_jenis_user,
            'status'            => $status
        );
     
        $where = array(
            'id_user' => $id
        );
     
        $this->DosenModel->update_data($where,$data,'t_user');
        redirect('/auth/dosen');
    }

	function hapus($id){
		$where = array('id_user' => $id);
		$this->DosenModel->hapus_data($where,'t_user');
		redirect('/auth/dosen');
	}

}

