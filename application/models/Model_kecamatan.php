<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mode_kecamatan extends CI_Model {

  public function create(){
      $data = array('nama_kecamatan'=> $this->input->post('nama_kecamatan'),
      'keterangan'=>$this->input->post('keterangan'));
       $query = $this->db->insert('kecamatan', $data);
       return $query;
}
public function getAll(){
    $query = $this->db->get('kecamatan');
    return $query;
}
public function read($id){
    $this->db->where('id_kecamatan', $id);
    $query = $this->db->get('kecamatan');
    return $query;
}
public function delete($id){
    $this->db->where('id_kecamatan', $id);
    $query = $this->db->delete('kecamatan');
    return $query;
}
public function update($id){
    $data = array('nama_kecamatan' => $this->input->post('nama_kecamatan'),
    'keterangan'=>$this->input->post('keterangan'));
    $this->db->where('id_kecamatan', $id);
    $query = $this->db->update('kecamatan', $data);
    return $query;
}

}