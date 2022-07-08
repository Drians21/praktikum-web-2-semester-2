<?php

class Kecamatan extends CI_Controller{
    public function index()
    {
        $this->load->model('kecamatan_model', 'kecamatan');
        
        
        
        $data['kecamatan'] =$this->kecamatan->getAll();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('kecamatan/index',$data);
        $this->load->view('template/footer');
    }
    public function view(){
        $_id =$this->input->get('id');
        $this->load->model('kecamatan_model', 'kecamatan');
        
        $data['kecamatan'] =$this->kecamatan->findById($_id);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('kecamatan/view',$data);
        $this->load->view('template/footer');
    }

    public function form(){
        $data['judul']='Form Kecamatan';
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('kecamatan/form',$data);
        $this->load->view('template/footer');
    }

    public function form_save(){
        $this->load->model("kecamatan_model","kecamatan");

        $_id = $this->input->post('id');
        $_nama = $this->input->post('nama');
        $_idedit = $this->input->post('idedit');


        $data_kct[]=$_id;// ? 1
        $data_kct[]=$_nama;// ? 2

        if(isset($_idedit)){
            $data_kct[]=$_idedit;// ? 3
            $this->kecamatan->update($data_kct);

        }
        else{

        //panggil fungsi save di model
        $this->kecamatan->save($data_kct);
        }

        $data['kecamatan']=$this->kecamatan->findById($_id);
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('kecamatan/form_save', $data);
		$this->load->view('template/footer');
    }

    public function edit(){
		$_id = $this->input->get('id');
		$this->load->model('kecamatan_model', 'kecamatan');
		$kecamatan_edit = $this->kecamatan->findById($_id);
		
		$data['judul']= "Form Update Kecamatan";
		$data['kecamatan']= $kecamatan_edit;
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('kecamatan/update', $data);
		$this->load->view('template/footer');
    }
    
    public function delete(){
		$_id = $this->input->get('id');
		$this->load->model('kecamatan_model', 'kecamatan');
		$this->kecamatan->delete($_id);

        redirect(base_url().'index.php/kecamatan', 'refresh');

        
        

    }

}




