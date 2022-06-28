<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {
    public function index() {
       
       $this->load->model('matakuliah_model', 'mk1');
       $this->mk1->nama = 'Pemrograman Web';
       $this->mk1->sks = '3';
       $this->mk1->kode = 'MK01';
       
       $this->load->model('matakuliah_model', 'mk2');
       $this->mk2->nama = 'Basis Data';
       $this->mk2->sks = '3';
       $this->mk2->kode = 'MK02';
       
       $this->load->model('matakuliah_model', 'mk3');
       $this->mk3->nama = 'Matematika Komputer';
       $this->mk3->sks = '2';
       $this->mk3->kode = 'MK03';
      
       
        $list_data = [$this->mk1, $this->mk2, $this->mk3];  
        

        $data['list_data']= $list_data;
        $this->load->view('matakuliah/index.php', $data);
    }
}