<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class MahasiswaModel extends CI_Model  
{ 

    function tampil_data($id){
        $this->db->select('t_produk.id_produk,t_produk.nama_produk,t_produk.nama_seniman,t_produk.minHarga,t_produk.maxHarga,t_produk.keterangan,t_produk.cover,t_kategori.nama_kategori');
        $this->db->from('t_produk');
        $this->db->join('t_kategori','t_kategori.id_kategori=t_produk.id_kategori');
        $this->db->where('t_produk.id_user',$id);
		$result= $this->db->get();
		return $result;
    }
    
    function tampil_galeri($id){
        $this->db->select('*');
        $this->db->from('t_galeri_produk');
        $this->db->where('t_galeri_produk.id_produk',$id);
		$result= $this->db->get();
		return $result;
	}

    function getDetail($where,$table){		
        return $this->db->get_where($table,$where);
    }

    function getCount($where){
        $this->db->select('count(id_bids) as count');
        $this->db->from('t_bids');    
        $this->db->where('id_produk',$where);      
        $query = $this->db->get();
        return $query;
    }

    function tampil_semua(){
        $this->db->select('t_user.id_user,t_user.no_identitas,t_user.nama_lengkap');
        $this->db->from('t_user');   
        $this->db->where('id_jenis_user',4);      
        $this->db->order_by('id_user', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    
    
    
    
    public function get_by_id($where)
    {
        $this->db->from('t_produk');
        $this->db->where($where);
        $query = $this->db->get();
        return $query->row();
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