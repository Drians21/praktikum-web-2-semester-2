<?php

class Jeniswisata extends CI_Controller{
    public function index()
    {
        $this->load->model('jenis_wisata_model', 'jenis_wisata');
        
        
        
        $data['jenis_wisata'] =$this->jenis_wisata->getAll();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('jenis_wisata/index',$data);
        $this->load->view('template/footer');
    }
    public function view(){
        $_id =$this->input->get('id');
        $this->load->model('jenis_wisata_model', 'jenis_wisata');
        
        $data['jenis_wisata'] =$this->jenis_wisata->findById($_id);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('jenis_wisata/view',$data);
        $this->load->view('template/footer');
    }

    public function form(){
        $data['judul']='Form Kelola Wisata';
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('jenis_wisata/form',$data);
        $this->load->view('template/footer');
    }
    
    public function form_save(){
        $this->load->model("jenis_wisata_model","jenis_wisata");

        $_id = $this->input->post('id');
        $_nama = $this->input->post('nama');
        $_idedit = $this->input->post('idedit');


        $data_jns_wisata[]=$_id;// ? 1
        $data_jns_wisata[]=$_nama;// ? 2

        if(isset($_idedit)){
            $data_jns_wisata[]=$_idedit;// ? 3
            $this->jenis_wisata->update($data_jns_wisata);

        }
        else{

        //panggil fungsi save di model
        $this->jenis_wisata->save($data_jns_wisata);
        }

        $data['jenis_wisata']=$this->jenis_wisata->findById($_id);
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('jenis_wisata/form_save', $data);
		$this->load->view('template/footer');
        }

        public function edit(){
            $_id = $this->input->get('id');
            $this->load->model('jenis_wisata_model', 'jenis_wisata');
            $jenis_wisata_edit = $this->jenis_wisata->findById($_id);
            
            $data['judul']= "Form Update Jenis Wisata";
            $data['jenis_wisata']= $jenis_wisata_edit;
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('jenis_wisata/update', $data);
            $this->load->view('template/footer');
        }

        public function delete(){
            $_id = $this->input->get('id');
            $this->load->model('jenis_wisata_model', 'jenis_wisata');
            $this->jenis_wisata->delete($_id);
    
            redirect(base_url().'index.php/jeniswisata', 'refresh');        
    
        }
}


?>