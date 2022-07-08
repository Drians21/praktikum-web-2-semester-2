<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {


	public function index(){

	$this->load->model('mahasiswa_model', 'mahasiswa');
	
	$data['list_mahasiswa'] = $this->mahasiswa->getAll();

	$this->load->view('layout/header');
	$this->load->view('layout/sidebar');
	$this->load->view('mahasiswa/index', $data);
	$this->load->view('layout/footer');

	}
	
	public function view(){
	$_nim = $this->input->get('nim');
	$this->load->model('mahasiswa_model', 'mhs');
	
	$data['mhs'] = $this->mhs->findById($_nim);
	
	$this->load->view('layout/header');
	$this->load->view('layout/sidebar');
	$this->load->view('mahasiswa/view', $data);
	$this->load->view('layout/footer');
	
	}
}
