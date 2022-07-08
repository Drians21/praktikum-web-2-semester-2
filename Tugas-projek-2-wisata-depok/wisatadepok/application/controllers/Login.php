<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index(){
	
	// $data['login'] =;
	$this->load->view('login');
	

	}
	
    public function otentikasi(){
        $this->load->model('user_model', 'user');
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');

        $row = $this->user->cek_status2($_username,$_password);
        $row2 = $this->user->cek_status1($_username,$_password);
        if(isset($row)){ //jika user ada di database 
            $this->user->last_login($_username);
            $this->session->set_userdata('USERNAME',$row->username);
            $this->session->set_userdata('ROLE',$row->role);
            // $this->session->set_userdata('USER',$row);
            redirect(base_url().'index.php/user', 'refresh');
        }
        else if(isset($row2)){
            redirect(base_url().'index.php/login?status=menggu-pendaftaran-dikonfirmasi', 'refresh');
        }
        else{
            //jika tidak
            redirect(base_url().'index.php/login?status=fail', 'refresh');
        }
	}
    
    public function logout(){
        $this->session->unset_userdata('USERNAME');
        $this->session->unset_userdata('ROLE');
        
        redirect(base_url().'index.php/home', 'refresh');
    }
}