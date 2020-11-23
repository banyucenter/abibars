<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quisioner extends CI_Controller {

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
        $this->load->model('QuisionerModel');  
    }    

	public function index()
	{
        //$data['data'] = $this->QuisionerModel->tampil_semua()->result();
		$this->load->view('public/component/header');
		$this->load->view('public/component/menu');
        $this->load->view('quisioner/tampil');
        $this->load->view('public/component/newsletter');
		$this->load->view('public/component/footer');
    }

    public function mbo()
	{
        
        $data['data'] = $this->QuisionerModel->tampil_mbo()->result();
		$this->load->view('public/component/header');
		$this->load->view('public/component/menu');
        $this->load->view('quisioner/mbo/tampil',$data);
        $this->load->view('public/component/newsletter');
		$this->load->view('public/component/footer');
    }

    public function tambah_mbo()
    {
        $data['data'] = $this->QuisionerModel->tampil_kategori_mbo()->result();
        $this->load->view('public/component/header');
		$this->load->view('public/component/menu');
        $this->load->view('quisioner/mbo/tambah',$data);
        $this->load->view('public/component/newsletter');
		$this->load->view('public/component/footer');
    }

    public function aksi_tambah_kuisioner_mbo()
    {

      $sasaran = $this->input->post('sasaran');
      $id_kategori_mbo   = $this->input->post('id_kategori_mbo');
      
      $data = array(
        'id_kategori_mbo'   => $id_kategori_mbo,
        'sasaran'           => $sasaran
      );
      
                       
	  $this->QuisionerModel->insert('t_kuisioner_mbo',$data);
      redirect('/auth/quisioner/mbo');

    }

    public function edit_mbo($id)
    {
        $where = array('id_mbo' => $id);
        $data['kategori'] = $this->QuisionerModel->tampil_kategori_mbo()->result();
        $data['data'] = $this->QuisionerModel->tampil_edit($where, 't_kuisioner_mbo')->result();
        $this->load->view('public/component/header');
		$this->load->view('public/component/menu');
        $this->load->view('quisioner/mbo/edit', $data);
        $this->load->view('public/component/newsletter');
		$this->load->view('public/component/footer');
    }

    function update_kuisioner_mbo(){
        $id_mbo = $this->input->post('id_mbo');
        $id_kategori_mbo = $this->input->post('id_kategori_mbo');
        $sasaran   = $this->input->post('sasaran');
     
        $data = array(
            'id_kategori_mbo'      => $id_kategori_mbo,
            'sasaran'             => $sasaran
        );
     
        $where = array(
            'id_mbo' => $id_mbo
        );
     
        $this->QuisionerModel->update_data($where,$data,'t_kuisioner_mbo');
        redirect('/auth/quisioner/mbo');
    }

    function hapus_mbo($id){
		$where = array('id_mbo' => $id);
		$this->QuisionerModel->hapus_data($where,'t_kuisioner_mbo');
		redirect('/auth/quisioner/mbo');
	}

    public function tambah_kategori_bars()
    {
        $this->load->view('public/component/header');
		$this->load->view('public/component/menu');
        $this->load->view('quisioner/bars/tambahkategori');
        $this->load->view('public/component/newsletter');
		$this->load->view('public/component/footer');
    }

    public function aksi_tambah_kategori_bars()
    {

      $nama_kategori_bars = $this->input->post('nama_kategori_bars');
      
      $data = array(
        'nama_kategori_bars'   => $nama_kategori_bars
      );
      
                       
	  $this->QuisionerModel->insert('t_kategori_bars',$data);
      redirect('/auth/quisioner/bars');

    }

    public function edit_kategori_bars($id)
    {
        $where = array('id_kategori_bars' => $id);
        $data['data'] = $this->QuisionerModel->tampil_edit($where, 't_kategori_bars')->result();
        $this->load->view('public/component/header');
		$this->load->view('public/component/menu');
        $this->load->view('quisioner/bars/edit_kategori', $data);
        $this->load->view('public/component/newsletter');
		$this->load->view('public/component/footer');
    }

    function update_kategori_bars(){
        $id_kategori_bars = $this->input->post('id_kategori_bars');
        $nama_kategori_bars   = $this->input->post('nama_kategori_bars');
     
        $data = array(
            'nama_kategori_bars'      => $nama_kategori_bars
        );
     
        $where = array(
            'id_kategori_bars' => $id_kategori_bars
        );
     
        $this->QuisionerModel->update_data($where,$data,'t_kategori_bars');
        redirect('/auth/quisioner/bars');
    }

    function hapus_kategori_bars($id){
		$where = array('id_kategori_bars' => $id);
		$this->QuisionerModel->hapus_data($where,'t_kategori_bars');
		redirect('/auth/quisioner/bars');
	}

    public function tambah_anchor_bars()
    {
        $data['data'] = $this->QuisionerModel->tampil_kategori_bars()->result();
        $this->load->view('public/component/header');
		$this->load->view('public/component/menu');
        $this->load->view('quisioner/bars/tambahanchor',$data);
        $this->load->view('public/component/newsletter');
		$this->load->view('public/component/footer');
    }

    public function aksi_tambah_anchor_bars()
    {

      $anchor = $this->input->post('anchor');
      $id_kategori_bars   = $this->input->post('id_kategori_bars');
      $nilai   = $this->input->post('nilai');
      
      $data = array(
        'id_kategori_bars'   => $id_kategori_bars,
        'anchor'           => $anchor,
        'nilai'             => $nilai
      );
      
                       
	  $this->QuisionerModel->insert('t_kuisioner_bars',$data);
      redirect('/auth/quisioner/bars/'.$id_kategori_bars );

    }

    public function bars()
	{
        
        $data['data'] = $this->QuisionerModel->tampil_bars()->result();
		$this->load->view('public/component/header');
		$this->load->view('public/component/menu');
        $this->load->view('quisioner/bars/tampil', $data);
        $this->load->view('public/component/newsletter');
		$this->load->view('public/component/footer');
    }

    public function anchorbars($id)
	{
        
        $data['data'] = $this->QuisionerModel->tampil_anchor_bars($id)->result();
		$this->load->view('public/component/header');
		$this->load->view('public/component/menu');
        $this->load->view('quisioner/bars/anchor', $data);
        $this->load->view('public/component/newsletter');
		$this->load->view('public/component/footer');
    }

    public function edit_anchor($id)
    {
        $where = array('id_kuisioner_bars' => $id);
        $data['kategori'] = $this->QuisionerModel->tampil_kategori_bars()->result();
        $data['nilai'] = $this->QuisionerModel->tampil_nilai_bars()->result();
        $data['data'] = $this->QuisionerModel->tampil_edit($where, 't_kuisioner_bars')->result();
        $this->load->view('public/component/header');
		$this->load->view('public/component/menu');
        $this->load->view('quisioner/bars/editanchor', $data);
        $this->load->view('public/component/newsletter');
		$this->load->view('public/component/footer');
    }

    function hapus_anchor($id){
		$where = array('id_kuisioner_bars' => $id);
		$this->QuisionerModel->hapus_data($where,'t_kuisioner_bars');
		redirect('/auth/quisioner/bars/'.$id);
	}

    

    

    

}

