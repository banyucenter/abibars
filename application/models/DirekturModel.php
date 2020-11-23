<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class DirekturModel extends CI_Model  
{ 

    

    function tampil_semua(){
        $this->db->select('t_user.id_user,t_user.no_identitas,t_user.nama_lengkap');
        $this->db->from('t_user');   
        $this->db->where('id_jenis_user',2);      
        $this->db->order_by('id_user', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    
    public function insert($tabel,$data)
    {
        $this->db->insert($tabel,$data);
        return TRUE;
    }

    
    function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

    function tampil_edit($where,$table){		
        return $this->db->get_where($table,$where);
    }

    public function update($data,$kondisi)
    {
        $this->db->update('t_produk',$data,$kondisi);
        return TRUE;
    }

}