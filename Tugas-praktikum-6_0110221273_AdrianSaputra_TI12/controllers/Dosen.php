<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {
    public function index() {
       
       $this->load->model('dosen_model', 'dsn1');
       $this->dsn1->nidn = '011';
       $this->dsn1->nama = 'adrian';
       $this->dsn1->pendidikan = 'S2';
       $this->dsn1->gender = 'L';
       $this->dsn1->bidang_ajar = 'Pemrograman';
       
       $this->load->model('dosen_model', 'dsn2');
       $this->dsn2->nidn = '012';
       $this->dsn2->nama = 'saputra';
       $this->dsn2->pendidikan = 'S1';
       $this->dsn2->gender = 'L';
       $this->dsn2->bidang_ajar = 'Matematika diskrit';
       
       $this->load->model('dosen_model', 'dsn3');
       $this->dsn3->nidn = '013';
       $this->dsn3->nama = 'Bela';
       $this->dsn3->pendidikan = 'S2';
       $this->dsn3->gender = 'P';
       $this->dsn3->bidang_ajar = 'Data Mining';
       
        $list_data = [$this->dsn1, $this->dsn2, $this->dsn3];  
        

        $data['list_data']= $list_data;
        $this->load->view('dosen/index.php', $data);
    }
}