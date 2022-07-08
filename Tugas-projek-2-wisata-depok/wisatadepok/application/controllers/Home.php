<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index(){

        $this->load->model('komentar_model', 'komentar');
	
	    $data['komentar'] = $this->komentar->getAll();

        $this->load->view('home/index', $data);
      
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
	
		$_tanggal = $this->input->post('tgl');
		$_isi= $this->input->post('isi');
		
		$_wisata_id= $this->input->post('wisata_id');
		$_nilai_rating_id= $this->input->post('nilai_rating_id');
	

	
		$data_komentar[] = $_tanggal;//? 1
		$data_komentar[] = $_isi;//? 2
	
		$data_komentar[] = $_wisata_id;//? 3
		$data_komentar[] = $_nilai_rating_id;//? 4

		
			//panggil fungsi daan insert data baru
			$this->komentar->save2($data_komentar);

		

		//print
		// redirect(base_url().'index.php/komentar/view?tanggal='. $_tanggal, 'refresh'); //membelokan ke halaman lain misalnya ke fungsi view dibawah
		redirect(base_url().'index.php/home/', 'refresh'); //membelokan ke halaman lain 
		
	}



}