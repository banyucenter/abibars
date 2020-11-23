<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian extends CI_Controller {

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
        $this->load->model('DosenModel'); 
        $this->load->model('DirekturModel'); 
        $this->load->model('MahasiswaModel');     
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
        
        $data['dosen'] = $this->DosenModel->tampil_semua()->result();
        $data['mahasiswa'] = $this->MahasiswaModel->tampil_semua()->result();
        $data['mbo'] = $this->QuisionerModel->tampil_mbo()->result();
        // $data['mbo_pengajaran'] = $this->QuisionerModel->tampil_mbo_pengajaran()->result();
        // $data['mbo_penelitian'] = $this->QuisionerModel->tampil_mbo_penelitian()->result();
        // $data['mbo_pengabdian'] = $this->QuisionerModel->tampil_mbo_pengabdian()->result();
		$this->load->view('public/component/header');
		$this->load->view('public/component/menu');
        $this->load->view('penilaian/mbo',$data);
        $this->load->view('public/component/newsletter');
		$this->load->view('public/component/footer');
    }

    public function input_mbo(){
        $result = array();
        foreach ($_POST['id_dosen'] as $key => $val) {
           $result[] = array(             
              'id_dosen' => $_POST['id_dosen'][$key],
              'id_mahasiswa' => $_POST['id_mahasiswa'][$key],
              'id_mbo' => $_POST['id_mbo'][$key],
              'nilai' => $_POST['nilai'][$key]                 
           );      
        }      
        $this->db->insert_batch('t_penilaian_mbo',$result);
        redirect(base_url('/auth/penilaian/hasil_mbo'));  
     }

    public function bars()
	{
        
        $data['dosen'] = $this->DosenModel->tampil_semua()->result();
        $data['direktur'] = $this->DirekturModel->tampil_semua()->result();
        $data['bars'] = $this->QuisionerModel->tampil_bars()->result();
        //$data['anchors'] = $this->QuisionerModel->tampil_anchor_bars($id)->result();
		$this->load->view('public/component/header');
		$this->load->view('public/component/menu');
        $this->load->view('penilaian/bars', $data);
        $this->load->view('public/component/newsletter');
		$this->load->view('public/component/footer');
    }

    public function input_bars(){
        $result = array();
        foreach ($_POST['id_dosen'] as $key => $val) {
           $result[] = array(             
              'id_dosen' => $_POST['id_dosen'][$key],
              'id_user' => $_POST['id_user'][$key],
              'id_kategori_bars' => $_POST['id_kategori_bars'][$key],
              'id_bars' => $_POST['id_bars'][$key]                 
           );      
        }      
        $this->db->insert_batch('t_penilaian_bars',$result);
        redirect(base_url('/auth/penilaian/hasil_bars'));
     }

    public function hasil_mbo()
	{
        
        $data['data'] = $this->QuisionerModel->tampil_hasil_penilaian_mbo()->result();
		$this->load->view('public/component/header');
		$this->load->view('public/component/menu');
        $this->load->view('penilaian/tampilnilaimbo',$data);
        $this->load->view('public/component/newsletter');
		$this->load->view('public/component/footer');
    }

    public function hasil_bars()
	{
        
        $data['data'] = $this->QuisionerModel->tampil_hasil_penilaian_bars()->result();
		$this->load->view('public/component/header');
		$this->load->view('public/component/menu');
        $this->load->view('penilaian/tampilnilaibars',$data);
        $this->load->view('public/component/newsletter');
		$this->load->view('public/component/footer');
    }


    // public function anchorbars($id)
	// {
        
    //     $data['data'] = $this->QuisionerModel->tampil_anchor_bars($id)->result();
	// 	$this->load->view('public/component/header');
	// 	$this->load->view('public/component/menu');
    //     $this->load->view('quisioner/bars/anchor', $data);
    //     $this->load->view('public/component/newsletter');
	// 	$this->load->view('public/component/footer');
    // }

    public function tampil($id)
	{
        
        $data['data'] = $this->ProdukModel->tampil_data($id)->result();
		$this->load->view('public/component/header');
		$this->load->view('public/component/menu');
        $this->load->view('produk/tampil',$data);
        $this->load->view('public/component/newsletter');
		$this->load->view('public/component/footer');
    }


    public function tambah()
    {
        $this->load->view('public/component/header');
		$this->load->view('public/component/menu');
        $this->load->view('produk/tambah');
        $this->load->view('public/component/newsletter');
		$this->load->view('public/component/footer');
    }

    public function insertdata()
    {
      $nama_seniman = $this->input->post('nama_seniman');
      $nama_produk   = $this->input->post('nama_produk');
      $bahan   = $this->input->post('bahan');
      $ukuran_image   = $this->input->post('ukuran_image');
      $ukuran_sheet   = $this->input->post('ukuran_sheet');
      $ukuran_frame   = $this->input->post('ukuran_frame');
      $edisi   = $this->input->post('edisi');
      $id_kategori   = $this->input->post('id_kategori');
      $minHarga = $this->input->post('minHarga');
      $maxHarga   = $this->input->post('maxHarga');
      $start_date = $this->input->post('start_date');
      $end_date   = $this->input->post('end_date');
      $kondisi   = $this->input->post('kondisi');
      $informasi_shipping   = $this->input->post('informasi_shipping');
      $metode_pembayaran   = $this->input->post('metode_pembayaran');
      $keterangan   = $this->input->post('keterangan');
      $userId = $this->session->userdata('userId');
      
      // get foto
      $config['upload_path'] = './assets/images/produk';
      $config['allowed_types'] = 'jpg|png|jpeg|gif';
      $config['max_size'] = '3048';  //3MB max
      $config['max_width'] = '4480'; // pixel
      $config['max_height'] = '4480'; // pixel
      $config['file_name'] = $_FILES['cover']['name'];

      $this->upload->initialize($config);

	    if (!empty($_FILES['cover']['name'])) {
	        if ( $this->upload->do_upload('cover') ) {
	            $foto = $this->upload->data();
	            $data = array(
                              'nama_seniman'    => $nama_seniman,
                              'nama_produk'     => $nama_produk,
                              'bahan'         => $bahan,
                              'ukuran_image'    => $ukuran_image,
                              'ukuran_sheet'    => $ukuran_sheet,
                              'ukuran_frame'    => $ukuran_frame,
                              'edisi'           => $edisi,
                              'id_kategori'     => $id_kategori,
                              'minHarga'        => $minHarga,
                              'maxHarga'        => $maxHarga,
                              'start_date'      => $start_date,
                              'end_date'        => $end_date,
                              'count_bid'       => 0,
                              'current_bid'     => 0,
                              'status_bid'      => 0,
                              'kondisi'         => $kondisi,
                              'informasi_shipping' => $informasi_shipping,
                              'metode_pembayaran' => $metode_pembayaran,
                              'keterangan'      => $keterangan,
                              'cover'           => $foto['file_name'],
                              'id_user'         => $userId,
                );
                            
				$this->ProdukModel->insert($data);
                redirect('/auth/produk/tampil/'.$userId);
	        }else {
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Gagal Melakukan Upload Cover!.</div>');  
	        }
	    }else {
            $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Ada Kesalahan Internal!.</div>');  
	    }

    }

    public function deletedata($id,$foto)
    {
      $idUser = $this->session->userdata('userId'); 
      $path = './assets/images/produk/';
      @unlink($path.$foto);

      $where = array('id_produk' => $id );
      $this->ProdukModel->delete($where);
      return redirect('/auth/produk/tampil/'.$idUser);
    }

}

