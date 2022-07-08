<?php

class Tempatwisata extends CI_Controller{
    public function index()
    {
        $this->load->model('tempat_wisata_model', 'tempat_wisata');
        
        
        
        $data['tempat_wisata'] =$this->tempat_wisata->getAll();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('tempat_wisata/index',$data);
        $this->load->view('template/footer');
    }
    public function view(){
        $_id =$this->input->get('id');
        $this->load->model('tempat_wisata_model', 'tempat_wisata');
        
        $data['tempat_wisata'] =$this->tempat_wisata->findById($_id);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('tempat_wisata/view',$data);
        $this->load->view('template/footer');
    }

    public function form(){
        $data['judul']='Form Tempat Wisata';
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('tempat_wisata/form',$data);
        $this->load->view('template/footer');
    }

    public function form_save(){
        $this->load->model("tempat_wisata_model","tempat_wisata");

        $_id = $this->input->post('id');
        $_nama = $this->input->post('nama');
        $_alamat = $this->input->post('alamat');
        $_latlong = $this->input->post('latlong');
        $_jenis_id = $this->input->post('jenis_id');
        $_skor_rating = $this->input->post('skor_rating');
        $_harga_tiket = $this->input->post('harga_tiket');
        $_foto1 = $this->input->post('foto1');
        $_foto2 = $this->input->post('foto2');
        $_foto3 = $this->input->post('foto3');
        $_kecamatan_id = $this->input->post('kecamatan_id');
        $_website = $this->input->post('website');
        $_fasilitas = $this->input->post('fasilitas');
        $_idedit = $this->input->post('idedit');


        $data_tmp_wisata[]=$_id;// ? 1
        $data_tmp_wisata[]=$_nama;// ? 2
        $data_tmp_wisata[]=$_alamat;// ? 3       
        $data_tmp_wisata[]=$_latlong;// ? 4
        $data_tmp_wisata[]=$_jenis_id;// ? 5
        $data_tmp_wisata[]=$_skor_rating;// ? 6
        $data_tmp_wisata[]=$_harga_tiket;// ? 7
        $data_tmp_wisata[]=$_foto1;// ? 8
        $data_tmp_wisata[]=$_foto2;// ? 9
        $data_tmp_wisata[]=$_foto3;// ? 10
        $data_tmp_wisata[]=$_kecamatan_id;// ? 11
        $data_tmp_wisata[]=$_website;// ? 12
        $data_tmp_wisata[]=$_fasilitas;// ? 13

        if(isset($_idedit)){
            $data_tmp_wisata[]=$_idedit;// ? 3
            $this->tempat_wisata->update($data_tmp_wisata);

        }
        else{

        //panggil fungsi save di model
        $this->tempat_wisata->save($data_tmp_wisata);
        }

        $data['tempat_wisata']=$this->tempat_wisata->findById($_id);
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('tempat_wisata/form_save', $data);
		$this->load->view('template/footer');
    }

    public function edit(){
		$_id = $this->input->get('id');
		$this->load->model('tempat_wisata_model', 'tempat_wisata');
		$tempat_wisata_edit = $this->tempat_wisata->findById($_id);
		
		$data['judul']= "Form Update Wisata";
		$data['tempat_wisata']= $tempat_wisata_edit;
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('tempat_wisata/update', $data);
		$this->load->view('template/footer');
    }
    
    public function delete(){
		$_id = $this->input->get('id');
		$this->load->model('tempat_wisata_model', 'tempat_wisata');
		$this->tempat_wisata->delete($_id);
        
        redirect(base_url().'index.php/tempatwisata', 'refresh');
        
    }
    
    public function upload(){
		$config['upload_path'] ='./uploads/foto1/';
		$config['allowed_types'] ='jpg|png';
		$config['max_size'] ='500';
		$config['max_width'] ='1024';
		$config['max_height'] ='768';
        
        $_id = $this->input->post('id');
        $array = explode('.', $_FILES['foto1']['name']);
        $extension = end($array);

        $new_name = $_id.'.'.$extension;
        $config['file_name'] = $new_name;
        
        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('foto1')){
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_form', $error);
        }
        else{
            $this->load->model('tempat_wisata_model', 'tempat_wisata');
            $array_data[]=$new_name; //?1
            $array_data[]=$_id;//?2
            $this->tempat_wisata->update_foto($array_data);



            $data = array('upload_data' => $this->upload->data());
            // $this->load->view('upload_success', $data);
        }
        redirect(base_url().'index.php/tempatwisata/view?id='.$_id, 'refresh');

    }
    public function upload2(){
		$config['upload_path'] ='./uploads/foto2/';
		$config['allowed_types'] ='jpg|png';
		$config['max_size'] ='500';
		$config['max_width'] ='1024';
		$config['max_height'] ='768';
        
        $_id = $this->input->post('id');
        $array = explode('.', $_FILES['foto2']['name']);
        $extension = end($array);

        $new_name2 = $_id.'.'.$extension;
        $config['file_name'] = $new_name2;
        
        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('foto2')){
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_form', $error);
        }
        else{
            $this->load->model('tempat_wisata_model', 'tempat_wisata');
            $array_data2[]=$new_name2; //?1
            $array_data2[]=$_id;//?2
            $this->tempat_wisata->update_foto($array_data2);



            $data = array('upload_data' => $this->upload->data());
            // $this->load->view('upload_success', $data);
        }
        redirect(base_url().'index.php/tempatwisata/view?id='.$_id, 'refresh');

    }
    
    

}




