<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
    public function index() {
        $this->load->model('mahasiswa_model', 'mhs1');
        $this->mhs1->id=1;
        $this->mhs1->nama='adrian';
        $this->mhs1->gender='L';
        $this->mhs1->ipk=3.89;

        $this->load->model('mahasiswa_model', 'mhs2');
        $this->mhs2->id=2;
        $this->mhs2->nama='yan';
        $this->mhs2->gender='L';
        $this->mhs2->ipk=3.4;

        $list_data = [$this->mhs1, $this->mhs2];

        $data['mahasiswa1']=$this->mhs1;
        $data['list_mahasiswa']=$list_data;
        $this->load->view('mahasiswa/index', $data);
       
    }
} 