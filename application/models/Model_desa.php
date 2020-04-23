<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_desa extends CI_Model {

  public function create(){
      $data = array('nama_desa'=> $this->input->post('nama_desa'),
      'keterangan'=>$this->input->post('keterangan'));
       $query = $this->db->insert('desa', $data);
       return $query;
}
public function getAll(){
    $query = $this->db->get('desa');
    return $query;
}
public function read($id){
    $this->db->where('id_desa', $id);
    $query = $this->db->get('desa');
    return $query;
}
public function delete($id){
    $this->db->where('id_desa', $id);
    $query = $this->db->delete('desa');
    return $query;
}
public function update($id){
    $data = array('nama_desa' => $this->input->post('nama_desa'),
    'keterangan'=>$this->input->post('keterangan'));
    $this->db->where('id_desa', $id);
    $query = $this->db->update('desa', $data);
    return $query;
}

}