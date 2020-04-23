public function delete($id){
    $this->db->where('id_kecamatan', $id);
    $query = $this->db->delete('kecamatan');
    return $query;
}
