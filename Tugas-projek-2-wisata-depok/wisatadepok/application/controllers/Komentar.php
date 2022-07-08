<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends CI_Controller {


	public function index(){

	$this->load->model('komentar_model', 'komentar');
	
	$data['list_komentar'] = $this->komentar->getAll();

	$this->load->view('template/header');
	$this->load->view('template/sidebar');
	$this->load->view('komentar/index', $data);
	$this->load->view('template/footer');

	}
	
	
	public function form(){
		
	
	$data['judul']= "Form Kelola Komentar";
	$this->load->view('template/header');
	$this->load->view('template/sidebar');
	$this->load->view('komentar/form', $data);
	$this->load->view('template/footer');

	}

	public function form_save(){

		// $this->load->model('form_model', 'komentar');
		// $this->komentar->id = $this->input->post('id');
		// $this->komentar->tanggal = $this->input->post('tgl');
		// $this->komentar->isi = $this->input->post('isi');
		// $this->komentar->users_id = $this->input->post('user');
		// $this->komentar->wisata_id = $this->input->post('wisata');
		// $this->komentar->nilai_rating_id = $this->input->post('rating');
		
		$this->load->model('komentar_model', 'komentar');
		$_id = $this->input->post('id');
		$_tanggal = $this->input->post('tgl');
		$_isi= $this->input->post('isi');
		$_users_id= $this->input->post('user');
		$_wisata_id= $this->input->post('wisata');
		$_nilai_rating_id= $this->input->post('rating');
		$_idedit= $this->input->post('idedit'); //hidden field

		$data_komentar[] = $_id;//? 1
		$data_komentar[] = $_tanggal;//? 2
		$data_komentar[] = $_isi;//? 3
		$data_komentar[] = $_users_id;//? 4
		$data_komentar[] = $_wisata_id;//? 5
		$data_komentar[] = $_nilai_rating_id;//? 6


		if(isset($_idedit)){
			//update data lama
			$data_komentar[] = $_idedit; // ? 8
			$this->komentar->update($data_komentar);

		}
		else{
			//panggil fungsi daan insert data baru
			$this->komentar->save($data_komentar);

		}

		//print
		// redirect(base_url().'index.php/komentar/view?tanggal='. $_tanggal, 'refresh'); //membelokan ke halaman lain misalnya ke fungsi view dibawah
		
		$data['komentar']=$this->komentar->findSave($_id);
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('komentar/form_save', $data);
		$this->load->view('template/footer');
	}

	public function view(){
		$_id = $this->input->get('id');
		$this->load->model('komentar_model', 'komentar');
		
		$data['komentar'] = $this->komentar->findById($_id);
		
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('komentar/view', $data);
		$this->load->view('template/footer');
		
		}

		public function edit(){
		$_id = $this->input->get('id');
		$this->load->model('komentar_model', 'komentar');
		$komentar_edit = $this->komentar->findById2($_id);
		
		$data['judul']= "Form Update Komentar";
		$data['komentar']= $komentar_edit;
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('komentar/update', $data);
		$this->load->view('template/footer');
		
		}

		public function delete(){
		$_id = $this->input->get('id');
		$this->load->model('komentar_model', 'komentar');

		$this->komentar->delete($_id);
		redirect(base_url().'index.php/komentar', 'refresh'); //membelokan ke halaman lain misalnya ke fungsi view dibawah


		}
		
		
		


	// public function view(){
	// $_nim = $this->input->get('nim');
	// $this->load->model('mahasiswa_model', 'mhs');
	
	// $data['mhs'] = $this->mhs->findById($_nim);
	
	// $this->load->view('layout/header');
	// $this->load->view('layout/sidebar');
	// $this->load->view('mahasiswa/view', $data);
	// $this->load->view('layout/footer');
	
	// }
	
}
