<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __Construct(){  
        parent::__Construct();  
        $this->load->helper(array('form', 'url'));  
        $this->load->library(array('session', 'form_validation', 'email'));   
        $this->load->database();  
        $this->load->model('ModelUser');  
    }    

	public function index()
	{
		$this->load->view('welcome_message');
    }
    
    public function register($id)
	{
		$this->load->view('public/component/header');
		$this->load->view('public/component/menu');
		//$this->load->view('public/component/slider');
        //$this->load->view('public/component/banner-carousel');
        if($id=='penjual'){
            $this->load->view('public/register_jual');
        }else if($id=='pembeli') {
            $this->load->view('public/register_beli');
        }
		
		//$this->load->view('public/component/benefit');
		$this->load->view('public/component/newsletter');
		$this->load->view('public/component/footer');
    }

    public function registrasi_penjual()  
    {  
        //validate input value with form validation class of codeigniter  
        $this->form_validation->set_rules('first_name', 'First Name', 'required');  
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');  
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[t_user.email]');  
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[15]');  
        $this->form_validation->set_rules('repassword', 'Password Confirmation', 'required|matches[password]');
        $this->form_validation->set_rules('phone', 'Phone', 'required');  
        $this->form_validation->set_rules('kode_pos', 'Kode Pos', 'required');  
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');  
        
        //$this->form_validation->set_message('is_unique', 'This %s is already exits');  
        if ($this->form_validation->run() == FALSE)  
        {  
            $this->load->view('public/component/header');
		    $this->load->view('public/component/menu');
            $this->load->view('public/register_jual');
            $this->load->view('public/component/newsletter');
		    $this->load->view('public/component/footer');
            //echo validation_errors();
        }
        else
        {  
            $fname = $_POST['first_name'];  
            $lname = $_POST['last_name'];  
            $email = $_POST['email'];  
            $password = $_POST['password'];  
            $passhash = hash('md5', $password);  
            $saltid   = md5($email);  
            $phone = $_POST['phone'];  
            $kode_pos = $_POST['kode_pos']; 
            $alamat = $_POST['alamat']; 
            $nama_bank = $_POST['nama_bank'];  
            $no_rekening = $_POST['no_rekening'];   
            $id_jenis_user   = 2;  
            $created_at = date("Y-m-d H:i:s");
            $data = array(
                'first_name' => $fname,  
                'last_name' => $lname,  
                'email' => $email,  
                'password' => $passhash,
                'phone' => $phone,
                'kode_pos' => $kode_pos,
                'alamat' => $alamat,
                'nama_bank' => $nama_bank,
                'no_rekening' => $no_rekening,  
                'id_jenis_user' => $id_jenis_user,
                'created_at' => $created_at,
                'status' => 0
            
            );  

            if($this->ModelUser->insertuser($data))  
            {  
                if($this->sendemail($email, $saltid))  
                {  
                    // successfully sent mail to user email  
                    $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Email verifikasi telah terkirim pada email anda!.</div>');  
                    $this->load->view('public/component/header');
                    $this->load->view('public/component/menu');
                    $this->load->view('public/register_jual');
                    $this->load->view('public/component/newsletter');
                    $this->load->view('public/component/footer');
                }  
                else{  
                    $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Ada kesalahan dalam pengiriman email! ...</div>');  
                    $this->load->view('public/component/header');
                    $this->load->view('public/component/menu');
                    $this->load->view('public/register_jual');
                    $this->load->view('public/component/newsletter');
                    $this->load->view('public/component/footer');
                }  
            }  
            else  
            {  
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Ada kesalahan jaringan!. Please try again ...</div>');  
                $this->load->view('public/component/header');
                $this->load->view('public/component/menu');
                $this->load->view('public/register_jual');
                $this->load->view('public/component/newsletter');
                $this->load->view('public/component/footer');
            }  
        }  
   } 
   
   public function registrasi_pembeli()  
    {  
        //validate input value with form validation class of codeigniter  
        $this->form_validation->set_rules('first_name', 'First Name', 'required');  
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');  
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[t_user.email]');  
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[15]');  
        $this->form_validation->set_rules('repassword', 'Password Confirmation', 'required|matches[password]');
        $this->form_validation->set_rules('phone', 'Phone', 'required');  
        $this->form_validation->set_rules('kode_pos', 'Kode Pos', 'required');  
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');  
        
        //$this->form_validation->set_message('is_unique', 'This %s is already exits');  
        if ($this->form_validation->run() == FALSE)  
        {  
            $this->load->view('public/component/header');
		    $this->load->view('public/component/menu');
            $this->load->view('public/register_beli');
            $this->load->view('public/component/newsletter');
		    $this->load->view('public/component/footer');
            //echo validation_errors();
        }
        else
        {  
            $fname = $_POST['first_name'];  
            $lname = $_POST['last_name'];  
            $email = $_POST['email'];  
            $password = $_POST['password'];  
            $passhash = hash('md5', $password);  
            $saltid   = md5($email);  
            $phone = $_POST['phone'];  
            $kode_pos = $_POST['kode_pos']; 
            $alamat = $_POST['alamat']; 
            $nama_bank = $_POST['nama_bank'];  
            $no_rekening = $_POST['no_rekening'];   
            $id_jenis_user   = 3;  
            $created_at = date("Y-m-d H:i:s");
            $data = array(
                'first_name' => $fname,  
                'last_name' => $lname,  
                'email' => $email,  
                'password' => $passhash,
                'phone' => $phone,
                'kode_pos' => $kode_pos,
                'alamat' => $alamat,
                'nama_bank' => $nama_bank,
                'no_rekening' => $no_rekening,  
                'id_jenis_user' => $id_jenis_user,
                'created_at' => $created_at,
                'status' => 0
            
            );  

            if($this->ModelUser->insertuser($data))  
            {  
                if($this->sendemail($email, $saltid))  
                {  
                    // successfully sent mail to user email  
                    $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Email verifikasi telah terkirim pada email anda!.</div>');  
                    $this->load->view('public/component/header');
                    $this->load->view('public/component/menu');
                    $this->load->view('public/register_beli');
                    $this->load->view('public/component/newsletter');
                    $this->load->view('public/component/footer');
                }  
                else{  
                    $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Ada kesalahan dalam pengiriman email! ...</div>');  
                    $this->load->view('public/component/header');
                    $this->load->view('public/component/menu');
                    $this->load->view('public/register_beli');
                    $this->load->view('public/component/newsletter');
                    $this->load->view('public/component/footer');
                }  
            }  
            else  
            {  
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Ada kesalahan jaringan!. Please try again ...</div>');  
                $this->load->view('public/component/header');
                $this->load->view('public/component/menu');
                $this->load->view('public/register_beli');
                $this->load->view('public/component/newsletter');
                $this->load->view('public/component/footer');
            }  
        }  
   } 

   function sendemail($email,$saltid){  
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
        $url = base_url()."user/confirmation/".$saltid;  
        $this->email->from('lelangempati@gmail.com', 'Lelang Empati');  
        $this->email->to($email);   
        $this->email->subject('Silahkan Verifikasi Email Address Anda');  
        $message = "<html><head><head></head><body><p>Hi,</p><p>Thanks for registration with Lelang Empati.</p><br><p>Please click below link to verify your email.</p>".$url."<br/><p>Sincerely,</p><p>Lelang Empati Team</p></body></html>";  
        $this->email->message($message);  
        return $this->email->send();  
    }  

    public function confirmation($key)  
    {  
      if($this->ModelUser->verifyemail($key))  
      {  
        $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Your Email Address is successfully verified!</div>');  
        redirect(base_url().'user/login');
      }  
      else  
      {  
        $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Your Email Address Verification Failed. Please try again later...</div>');  
        redirect(base_url());  
      }  
    }
    
    
    public function login()
    {
        $this->load->view('public/component/header');
		$this->load->view('public/component/menu');
        $this->load->view('public/login');
        $this->load->view('public/component/newsletter');
		$this->load->view('public/component/footer');
    }



    public function check_login()
    {
        $email = $_POST['email'];
        $pass = hash('md5', $_POST['password']);

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[15]');
        $this->form_validation->set_rules('repassword', 'Password Confirmation', 'required|matches[password]');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('public/component/header');
            $this->load->view('public/component/menu');
            $this->load->view('public/login');
            $this->load->view('public/component/newsletter');
            $this->load->view('public/component/footer');
        }
        else
        {
            $res = $this->ModelUser->check_user($email , $pass);
            if(!empty($res))
            {
                if($res[0]['status'] == '1')
                {
                    $data['user'] = $res[0]['nama_lengkap'];
                    $this->setSession($res[0]['id_user'],$res[0]['nama_lengkap'],$res[0]['id_jenis_user']);
                    //$this->load->view('profile', $data);
                    redirect(base_url());
                }
                else
                {
                    $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Verify your email address first to login...</div>');
                    redirect(base_url().'auth/user/login');
                }
            }
            else
            {
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">email/password not found</div>');
                redirect(base_url().'auth/user/login');
            }
        }
    }

    function setSession($userId,$userName,$userLevel) {
    
        $userSession = array('userId'=>$userId,
                             'userName'=>$userName,
                             'userLevel' => $userLevel,
                             'loggedIn'=>TRUE );
        $this->session->set_userdata($userSession);
    }
    
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url().'auth/user/login', 'refresh');
    }
  
   

}
