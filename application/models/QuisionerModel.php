<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class QuisionerModel extends CI_Model  
{ 

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
        $this->db->where('id_jenis_user',3);      
        $this->db->order_by('id_user', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    function tampil_bars(){
        $this->db->select('id_kategori_bars, nama_kategori_bars');
        $this->db->from('t_kategori_bars');   
        $query = $this->db->get();
        return $query;
    }

    function tampil_anchor_bars($id){
        $this->db->select('id_kategori_bars, id_kuisioner_bars, nama_kategori_bars, anchor, nilai');
        $this->db->from('v_bars');
        $this->db->where('v_bars.id_kategori_bars',$id);
		$result= $this->db->get();
		return $result;
    }

    function tampil_mbo(){
        $this->db->select('*');
        $this->db->from('v_mbo');
        $query = $this->db->get();
        return $query;
    }

    function tampil_kategori_mbo(){
        $this->db->select('*');
        $this->db->from('t_kategori_mbo');
        $query = $this->db->get();
        return $query;
    }

    function tampil_kategori_bars(){
        $this->db->select('*');
        $this->db->from('t_kategori_bars');
        $query = $this->db->get();
        return $query;
    }

    function tampil_nilai_bars(){
        $this->db->select('nilai');
        $this->db->from('t_kuisioner_bars');
        $this->db->where('id_kategori_bars',1);
        $query = $this->db->get();
        return $query;
    }

    function tampil_hasil_penilaian_mbo(){
        $this->db->select('*');
        $this->db->from('v_hasil_mbo');
        $this->db->order_by('total_nilai_mbo', DESC);
        $query = $this->db->get();
        return $query;
    }

    function tampil_hasil_penilaian_bars(){
        $this->db->select('*');
        $this->db->from('v_hasil_bars');
        $this->db->order_by('total', DESC);
        $query = $this->db->get();
        return $query;
    }

    public function insert($tabel,$data)
    {
        $this->db->insert($tabel,$data);
        return TRUE;
    }

    function tampil_edit($where,$table){		
        return $this->db->get_where($table,$where);
    }
    
    function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

    function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

}