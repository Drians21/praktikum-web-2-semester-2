<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


	public function index(){

	$this->load->model('user_model', 'user');
	
	$data['list_user'] = $this->user->getAll();

	$this->load->view('template/header');
	$this->load->view('template/sidebar');
	$this->load->view('user/index', $data);
	$this->load->view('template/footer');

	}
	
	
	public function form(){
		
	
	$data['judul']= "Form Kelola User";
	$this->load->view('template/header');
	$this->load->view('template/sidebar');
	$this->load->view('user/form', $data);
	$this->load->view('template/footer');

	}

	public function form_save(){

		
		$this->load->model('user_model', 'user');
		$_id = $this->input->post('id');
		$_username = $this->input->post('username');
		$_password= $this->input->post('password');
		$_email= $this->input->post('email');
		$_created_at= $this->input->post('created_at');
		$_last_login= $this->input->post('last_login');
		$_status= $this->input->post('status');
		$_role= $this->input->post('role');
		$_idedit= $this->input->post('idedit');

		$data_user[] = $_id;//? 1
		$data_user[] = $_username;//? 2
		$data_user[] = $_password;//? 3
		$data_user[] = $_email;//? 4
		$data_user[] = $_created_at;//? 5
		$data_user[] = $_last_login;//? 6
		$data_user[] = $_status;//? 7
		$data_user[] = $_role;//? 8

		if(isset($_idedit)){
			$data_user[] = $_idedit;
			$this->user->update($data_user);
		}
		else {

		//panggil fungsi
		$this->user->save($data_user);
		}	

		//print
		// redirect(base_url().'index.php/komentar/view?tanggal='. $_tanggal, 'refresh'); //membelokan ke halaman lain misalnya ke fungsi view dibawah
		
		$data['user']=$this->user->findById($_id);
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('user/form_save', $data);
		$this->load->view('template/footer');
	}

	public function view(){
		$_id = $this->input->get('id');
		$this->load->model('user_model', 'user');
		
		$data['user'] = $this->user->findById($_id);
		
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('user/view', $data);
		$this->load->view('template/footer');
		
	}
	public function edit(){
		$_id = $this->input->get('id');
		$this->load->model('user_model', 'user');
		$user_edit = $this->user->findById($_id);
		
		// $data['judul']= "Form Update User";
		$data['user']= $user_edit;
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('user/update', $data);
		$this->load->view('template/footer');
		
	}

	public function delete(){
		$_id = $this->input->get('id');
		$this->load->model('user_model', 'user');
		$this->user->delete($_id);

		redirect(base_url().'index.php/user', 'refresh'); //membelokan ke halaman lain misalnya ke fungsi view dibawah

		
		}
	
}
