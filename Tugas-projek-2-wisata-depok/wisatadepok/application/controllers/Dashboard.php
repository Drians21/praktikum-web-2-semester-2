<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


    public function index(){
	
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('layout/content');
		$this->load->view('layout/footer');
	}
   
	public function form(){
	
		$data['judul']= "Form Kelola Mahasiswa";
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('layout/form', $data);
		$this->load->view('layout/footer');
	}

	public function form_save(){

	$this->load->model('form_model', 'mhs1');
	$this->mhs1->nama = $this->input->post('nama');
	$this->mhs1->gender = $this->input->post('jk');
	$this->mhs1->ipk = $this->input->post('ipk');

	$data['mhs1']=$this->mhs1;
	$this->load->view('layout/header');
	$this->load->view('layout/sidebar');
	$this->load->view('layout/form_save', $data);
	$this->load->view('layout/footer');

	}
}
