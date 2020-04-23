<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desa extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
    $this->load->model(array('model_desa'));
    }
    
	public function index()
        {
            $data = array('content' => 'admin/formdesa',//kita buat file formjalan di dalam folder views/admin
            'itemdesa'=>$this->model_desa->getAll());
            $this->load->view('admin/formdesa', $data);
        }
}