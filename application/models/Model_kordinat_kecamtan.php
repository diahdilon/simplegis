<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_koordinat_kecamatan extends CI_Model{
 
    public function create($desa,$latitude,$longitude){
        $data = array('id_kordinat_kecamatan' => $desa,
        'latitude'=>$latitude,
        'longitude'=>$longitude);
        $query = $this->db->insert('kordinat_kecamtan', $data);
        return $query;
    }
    public function getAll(){
        $this->db->select('*');//kita akan mengambil semua data
        $this->db->from('kordinat_kecamtan');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan = kordinat_kecamatan.id_kecamatan');//kita join tbl jalan dengan foreign key jalan_id
        $query = $this->db->get();
        return $query;
    }
    public function read($id){
        $this->db->select('*');//kita akan mengambil semua data
        $this->db->from('kordinat_kecamatan');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan = koordinat_kecamatan.id_kecamatan');//kita join tbl jalan dengan foreign key jalan_id
        $this->db->where('id_koordinat_desa', $id);
        $query = $this->db->get();
        return $query;
    }
    public function update($jalan,$latitude,$longitude,$id){
        $data = array('id_kecamatan' => $jalan,
        'latitude'=>$latitude,
        'longitude'=>$longitude);
        $this->db->where('id_kordinat_kecamatan', $id);
        $query = $this->db->update('kecamatan',$data);
        return $query;
    }
    public function delete($id){
        $this->db->where('id_kordinat_kecamatan', $id);
        $query = $this->db->delete('kecamatan');
        return $query;
    }
 
}