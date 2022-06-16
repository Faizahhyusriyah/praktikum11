<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Matkul extends CI_Controller {
    public function index(){
 
        $this->load->model('Matkul_model','mk1');
        $this->mk1->id=1;
        $this->mk1->nama='Jaringan Komputer';
        $this->mk1->sks= '3';
        $this->mk1->kode= 'MK595';
        $this->load->model('Matkul_model','mk2');
        $this->mk2->id=2;
        $this->mk2->nama='Pendidikan Kewarganegaraan';
        $this->mk2->sks= '2';
        $this->mk2->kode= 'MK846';
        $this->load->model('Matkul_model','mk3');
        $this->mk3->id=3;
        $this->mk3->nama='Basis Data';
        $this->mk3->sks= '4';
        $this->mk3->kode= 'MK537';
        $list_mk = [$this->mk1, $this->mk2, $this->mk3 ];
        $data['list_mk']=$list_mk;
        
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('Matakuliah/index',$data);
		$this->load->view('layout/footer');
 }


    public function create(){
        $data['judul']= 'Form Kelola Mata Kuliah';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('Matakuliah/create',$data);
        $this->load->view('layout/footer');
}

    public function save(){
        $this->load->model('matkul_model','mk1');
        $this->mk1->matkul = $this->input->post('matkul');
        $this->mk1->sks = $this->input->post('sks');
        $this->mk1->kode = $this->input->post('kode');

        $data['mk1']= $this->mk1;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('matakuliah/view',$data);
        $this->load->view('layout/footer');
}
}
