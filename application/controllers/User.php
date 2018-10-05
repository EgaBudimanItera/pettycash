<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
            'page' => 'user/data',
            'link' => 'user',
            'script'=>'',
            'list'=>$this->Petty_cash->list_data_all('user'),
            'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Data user' => base_url() . 'user'),
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function formtambah(){
        $data = array(
            'page' => 'user/formtambah',
            'link' => 'user',
            'script'=>'',
            'list'=>'',
            'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Data user' => base_url() . 'user',
                'Tambah user' => base_url() . 'user/formtambah',
            ),
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function formubahpassword(){
       $data = array(
            'page' => 'user/formubahpassword',
            'link' => 'user',
            'script'=>'',
            'list'=>'',
            'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Data user' => base_url() . 'user',
                'Ubah Password' => base_url() . 'user/formubahpassword',
            ),
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function prosessimpan(){
      $userNama=$this->input->post('userNama',true);
      $userHakakses=$this->input->post('userHakakses',true);

      $data=array(
        'userNama'=>$userNama,
        'userHakakses'=>$userHakakses,
        'userPassword'=>'123',
      );
      $simpan=$this->Petty_cash->simpan_data($data,'user');
      if($simpan){
        echo '<script>alert("Data Berhasil Disimpan");window.location = "'.base_url().'user";</script>';
      }else{
        echo '<script>alert("Data Gagal Disimpan");window.location = "'.base_url().'user";</script>';
      }
   }

   public function ubahpassword(){
      $userId=$this->input->post('userId',true);
      $data=array(
        'userPassword'=>$this->input->post('userPassword',true),
      );
      $update=$this->Petty_cash->update('userId',$userId,'user',$data);
      if($update){
        echo '<script>alert("Password Berhasil Diubah,silahkan login kembali");window.location = "'.base_url().'auth/logout";</script>';
      }else{
        echo '<script>alert("Password Gagal Diubah");window.location = "'.base_url().'user";</script>';
      }
   }

   public function proseshapus($userId){
       $hapus=$this->Petty_cash->hapus('userId',$userId,'user');
       if($hapus){
        echo '<script>alert("Data Berhasil Dihapus");window.location = "'.base_url().'user";</script>';
      }else{
        echo '<script>alert("Data Gagal Dihapus");window.location = "'.base_url().'user";</script>';
      }
   } 
}