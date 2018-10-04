<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Unit extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('Petty_cash'));
        // if($this->session->userdata('status') != "login"){
        //     echo '<script>alert("Maaf, anda harus login terlebih dahulu");window.location = "'.base_url().'";</script>';
        // }else{
        //     $userNama = $this->session->userdata('userNama');
        //     $where=array('userNama'=>$userNama);
        //     $cek=$this->Museraplikasi->cek_login($where)->num_rows(); 
        //     if($cek == 0){
        //         echo '<script>alert("User tidak ditemukan di database");window.location = "'.base_url().'";</script>';
        //     }
        // }   
	}
   
    public function index(){
        $data = array(
            'page' => 'unit/data',
            'link' => 'unit',
            'script'=>'',
            'list'=>$this->Petty_cash->list_data_all('unit'),
            'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Data Unit' => base_url() . 'unit'),
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function formtambah(){
        $data = array(
            'page' => 'unit/formtambah',
            'link' => 'unit',
            'script'=>'',
            'list'=>'',
            'idunit'=>$this->Petty_cash->idunit(),
            'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Data Unit' => base_url() . 'unit',
                'Tambah Unit' => base_url() . 'unit/formtambah',
            ),
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function formedit($idunit){
        $data = array(
            'page' => 'unit/formedit',
            'link' => 'unit',
            'script'=>'',
            'list'=>$this->Petty_cash->list_data_where('idunit',$idunit,'unit')->row(),
            'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Data Unit' => base_url() . 'unit',
                'Edit Unit' => base_url() . 'unit/formedit',
            ),
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function prosessimpan(){
        $idunit=$this->Petty_cash->idunit();
        $namaunit=$this->input->post('namaunit',true);
        $data=array(
            'idunit'=>$idunit,
            'namaunit'=>$namaunit,
        );
        $simpan=$this->Petty_cash->simpan_data($data,'unit');
        if($simpan){
            echo '<script>alert("Data Berhasil Disimpan");window.location = "'.base_url().'unit";</script>';
        }
        else{
            echo '<script>alert("Data Gagal Disimpan");window.location = "'.base_url().'unit/formtambah";</script>';
        }
    }

    public function prosesedit(){
        $idunit=$this->input->post('idunit',true);
        $namaunit=$this->input->post('namaunit',true);
        $data=array(
            'namaunit'=>$namaunit,
        );
        $edit=$this->Petty_cash->update('idunit',$idunit,'unit',$data);
        if($edit){
            echo '<script>alert("Data Berhasil Diedit");window.location = "'.base_url().'unit";</script>';
        }
        else{
            echo '<script>alert("Data Gagal Diedit");window.location = "'.base_url().'unit";</script>';
        }
    }

    public function proseshapus($idunit){
        $hapus=$this->Petty_cash->hapus('idunit',$idunit,'unit');
        if($hapus){
            echo '<script>alert("Data Berhasil Dihapus");window.location = "'.base_url().'unit";</script>';
        }
        else{
            echo '<script>alert("Data Gagal Dihapus");window.location = "'.base_url().'unit";</script>';
        }
    }
}