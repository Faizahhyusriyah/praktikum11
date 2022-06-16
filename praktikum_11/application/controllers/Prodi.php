<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Prodi extends CI_Controller {
        public function index(){


            $this->load->model('prodi_model', 'prodi');
            $list_prodi = $this->prodi->getAll();
            $data ['list_prodi'] = $list_prodi;
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('prodi/index',$data);
		    $this->load->view('layout/footer');

        }

        public function view(){
            $_kode = $this->input->get('id');
            $this->load->model('prodi_model','prodi');
            $data['list_prodi']=$this->prodi->findById($_kode);
    
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('prodi/view',$data);
            $this->load->view('layout/footer');
            //die("NIM ".$_nim);
        }

        public function create(){
            $data['judul']= 'Form Kelola Program Studi';
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('prodi/create',$data);
            $this->load->view('layout/footer');
        }

        public function save(){
            $this->load->model('prodi_model','prodi');
    
            $_kode = $this->input->post('kode');
            $_nama = $this->input->post('nama');
            $_kaprodi = $this->input->post('kaprodi');
            $_idedit = $this->input->post('idedit');//hidden field
    
            $data_prodi[]=$_kode;// ? 1
            $data_prodi[]=$_nama;// ? 2
            $data_prodi[]=$_kaprodi;// ? 3

            if(isset($_idedit)){
                //update data lama
                $data_prodi[]=$_idedit; // ? 8
                $this->prodi->update($data_prodi);  
            }else{ // save data baru
                // panggi fungsi save di model 
                $this->prodi->save($data_prodi);   
            }
    
            redirect(base_url().'index.php/prodi/view?id='.$_kode, 'refresh');

        }

        public function edit(){
            $_kode = $this->input->get('id');
            $this->load->model("prodi_model","prodi");
            $prodiedit = $this->prodi->findById($_kode);
    
            $data['judul']= 'Form Update Program Studi';
            $data['prodiedit']= $prodiedit;
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('prodi/update',$data);
            $this->load->view('layout/footer');
        }

        public function delete(){
            $_id = $this->input->get('id');
            $this->load->model("prodi_model","prodi");
            $this->prodi->delete($_id);
            redirect(base_url().'index.php/prodi', 'refresh');
        }

}