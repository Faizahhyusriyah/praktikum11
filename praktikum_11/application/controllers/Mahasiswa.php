<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Mahasiswa extends CI_Controller {
    public function index(){
 
        $this->load->model('mahasiswa_model', 'mahasiswa');
        $list_mhs = $this->mahasiswa->getAll();
        $data ['list_mhs'] = $list_mhs;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/index',$data);
        $this->load->view('layout/footer');
    }

    public function view(){
        $_nim = $this->input->get('id');
        $this->load->model('mahasiswa_model','mahasiswa');
        $data['list_mhs']=$this->mahasiswa->findById($_nim);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/view',$data);
        $this->load->view('layout/footer');
        //die("NIM ".$_nim);
    }

    public function create(){
        $data['judul']= 'Form Kelola Mahasiswa';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/create',$data);
		$this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model('mahasiswa_model','mahasiswa');

        $_nim = $this->input->post('nim');
        $_nama = $this->input->post('nama');
        $_gender = $this->input->post('jenis');
        $_tmp_lahir = $this->input->post('tempat');
        $_tgl_lahir = $this->input->post('tanggal');
        $_prodi = $this->input->post('kode');
        $_ipk = $this->input->post('ipk');
        $_idedit = $this->input->post('idedit');//hidden field

        $data_mhs[]=$_nim;// ? 1
        $data_mhs[]=$_nama;// ? 2
        $data_mhs[]=$_gender;// ? 3
        $data_mhs[]=$_tmp_lahir;// ? 4
        $data_mhs[]=$_tgl_lahir;// ? 5
        $data_mhs[]=$_prodi;// ? 6
        $data_mhs[]=$_ipk;// ? 7

        if(isset($_idedit)){
            //update data lama
            $data_mhs[]=$_idedit; // ? 8
            $this->mahasiswa->update($data_mhs);  
        }else{ // save data baru
            // panggi fungsi save di model 
            $this->mahasiswa->save($data_mhs);   
        }

        redirect(base_url().'index.php/mahasiswa/view?id='.$_nim, 'refresh');

    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model("mahasiswa_model","mahasiswa");
        $mhsedit = $this->mahasiswa->findById($_id);

        $data['judul']= 'Form Update Mahasiswa';
        $data['mhsedit']= $mhsedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/update',$data);
		$this->load->view('layout/footer');
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model("mahasiswa_model","mahasiswa");
        $this->mahasiswa->delete($_id);
        redirect(base_url().'index.php/mahasiswa', 'refresh');
    }
}