<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Jenispengeluaran extends CI_Controller {

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
            'page' => 'jenispengeluaran/data',
            'link' => 'jenispengeluaran',
            'script'=>'',
            'list'=>$this->Petty_cash->list_data_all('jenispengeluaran'),
            'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Data jenispengeluaran' => base_url() . 'jenispengeluaran'),
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function formtambah(){
        $data = array(
            'page' => 'jenispengeluaran/formtambah',
            'link' => 'jenispengeluaran',
            'script'=>'',
            'idjenis'=>$this->Petty_cash->idjenis(),
            'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Data jenispengeluaran' => base_url() . 'jenispengeluaran',
                'Tambah jenispengeluaran' => base_url() . 'jenispengeluaran/formtambah',
            ),
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function formedit($idjenis){
        $data = array(
            'page' => 'jenispengeluaran/formedit',
            'link' => 'jenispengeluaran',
            'script'=>'',
            'list'=>$this->Petty_cash->list_data_where('idjenis',$idjenis,'jenispengeluaran')->row(),
            'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Data jenispengeluaran' => base_url() . 'jenispengeluaran',
                'Edit jenispengeluaran' => base_url() . 'jenispengeluaran/formedit',
            ),
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function prosessimpan(){
        $idjenis=$this->Petty_cash->idjenis();
        $namajenis=$this->input->post('namajenis',true);
        $data=array(
            'idjenis'=>$idjenis,
            'namajenis'=>$namajenis,
        );
        $simpan=$this->Petty_cash->simpan_data($data,'jenispengeluaran');
        if($simpan){
            echo '<script>alert("Data Berhasil Disimpan");window.location = "'.base_url().'jenispengeluaran";</script>';
        }
        else{
            echo '<script>alert("Data Gagal Disimpan");window.location = "'.base_url().'jenispengeluaran/formtambah";</script>';
        }
    }

    public function prosesedit(){
        $idjenis=$this->input->post('idjenis',true);
        $namajenis=$this->input->post('namajenis',true);
        $data=array(
            'namajenis'=>$namajenis,
        );
        $edit=$this->Petty_cash->update('idjenis',$idjenis,'jenispengeluaran',$data);
        if($edit){
            echo '<script>alert("Data Berhasil Diedit");window.location = "'.base_url().'jenispengeluaran";</script>';
        }
        else{
            echo '<script>alert("Data Gagal Diedit");window.location = "'.base_url().'jenispengeluaran";</script>';
        }
    }

    public function proseshapus($idjenis){
        $hapus=$this->Petty_cash->hapus('idjenis',$idjenis,'jenispengeluaran');
        if($hapus){
            echo '<script>alert("Data Berhasil Dihapus");window.location = "'.base_url().'jenispengeluaran";</script>';
        }
        else{
            echo '<script>alert("Data Gagal Dihapus");window.location = "'.base_url().'jenispengeluaran";</script>';
        }
    }
}