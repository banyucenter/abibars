<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
class ModelUser extends CI_Model  
{  
    public function insertuser($data)  
    {  
        return $this->db->insert('t_user', $data);  
    }  
    public function verifyemail($key)  
    {  
        $data = array('status' => 1);  
        $this->db->where('md5(email)', $key);  
        return $this->db->update('t_user', $data);  
    }
    
    public function check_user($email,$pass)
    {
        $sql = "SELECT status,id_user,nama_lengkap,id_jenis_user FROM t_user where email = ? and password = ?";
        $data = $this->db->query($sql, array($email,$pass));
            return ($data->result_array()) ;
    }

    public function tampil_data($id){
        $this->db->select('*');
        $this->db->from('t_user');
        $this->db->where('t_user.id_user',$id);
		$result= $this->db->get();
		return $result;
    }

}  
