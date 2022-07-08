<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi extends CI_Controller {
    public function index(){
        $this->load->model('prodi_model', 'prodi');

        $list_data = $this->prodi->getALl();


        $data['list_prodi']=$list_data;
        $this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('prodi/index', $data);
		$this->load->view('layout/footer');
    }
}