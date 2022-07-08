<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {


	public function index(){
	
	// $data['login'] =;
	$this->load->view('register');
	

	}
	
    public function otentikasi(){
        $this->load->model('user_model', 'user');
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');
        $_email = $this->input->post('email');
        

        $row = $this->user->cek($_username,$_email);
        if(isset($row)){ //jika ada user di database 
            // $this->session->set_userdata('USERNAME',$row->username);
            // $this->session->set_userdata('ROLE',$row->role);
            // $this->session->set_userdata('USER',$row);
            redirect(base_url().'index.php/register?=username/email-sudah-digunakan', 'refresh');
            

        }
        else{
            //jika tidak ada
            $this->user->auto_increment();
            $this->user->register($_username,$_password,$_email);
            redirect(base_url().'index.php/login?=success', 'refresh');
        }
	}
    
    // public function logout(){
    //     $this->session->unset_userdata('USERNAME');
    //     $this->session->unset_userdata('ROLE');
        
    //     redirect(base_url().'index.php/login', 'refresh');
    // }
}