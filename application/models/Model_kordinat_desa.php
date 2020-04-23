<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_koordinat_desa extends CI_Model{
 
    public function create($desa,$latitude,$longitude){
        $data = array('id_kordinat_desa' => $desa,
        'latitude'=>$latitude,
        'longitude'=>$longitude);
        $query = $this->db->insert('kordinat_desa', $data);
        return $query;
    }
    public function getAll(){
        $this->db->select('*');//kita akan mengambil semua data
        $this->db->from('kordinat_desa');
        $this->db->join('tbl_jalan', 'tbl_jalan.id_jalan = tbl_kordinatjalan.jalan_id');//kita join tbl jalan dengan foreign key jalan_id
        $query = $this->db->get();
        return $query;
    }
    public function read($id){
        $this->db->select('*');//kita akan mengambil semua data
        $this->db->from('kordinat_desa');
        $this->db->join('desa', 'desa.id_desa = kordinat_desa.id_desa');//kita join tbl jalan dengan foreign key jalan_id
        $this->db->where('id_kordinat_desa', $id);
        $query = $this->db->get();
        return $query;
    }
    public function update($jalan,$latitude,$longitude,$id){
        $data = array('id_desa' => $jalan,
        'latitude'=>$latitude,
        'longitude'=>$longitude);
        $this->db->where('id_kordinat_desa', $id);
        $query = $this->db->update('desa',$data);
        return $query;
    }
    public function delete($id){
        $this->db->where('id_kordinat_desa', $id);
        $query = $this->db->delete('desa');
        return $query;
    }
 
}