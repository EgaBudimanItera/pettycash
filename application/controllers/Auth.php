<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

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
       $this->load->view('auth/login');
    }

    public function authuser(){
        $userNama=$this->input->post('userNama',true);
        $userPassword=$this->input->post('userPassword',true);
        $where=array(
              'userNama'=>$userNama,
              'userPassword'=>$userPassword,
        );
        $cek=$this->Petty_cash->cek_login($where)->num_rows(); 
        if($cek!=0){
          $data_session = array(
              'userNama' => $userNama,
              'userHakakses'=>$this->Petty_cash->cek_login($where)->row()->userHakakses,
              'userId'=>$this->Petty_cash->cek_login($where)->row()->userId,
              'status' => "login",
          );

          $this->session->set_userdata($data_session);
          echo '<script>alert("user ditemukan!");window.location = "'.base_url().'berandaadmin";</script>';
          
        }
        else{
          echo '<script>alert("Maaf, username atau password salah!");window.location = "'.base_url().'auth";</script>';
          
        }   
    }
    
    public function logout(){
      $this->session->sess_destroy();
      echo '<script>alert("Terima Kasih!");window.location = "'.base_url().'";</script>';
    }
}