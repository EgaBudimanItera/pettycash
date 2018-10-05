<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berandaadmin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('Petty_cash'));
		// if($this->session->userdata('status') != "login"){
  //           echo '<script>alert("Maaf, anda harus login terlebih dahulu");window.location = "'.base_url().'";</script>';
  //       }else{
  //           $userNama = $this->session->userdata('userNama');
  //           $where=array('userNama'=>$userNama);
  //           $cek=$this->Museraplikasi->cek_login($where)->num_rows(); 
  //           if($cek == 0){
  //               echo '<script>alert("User tidak ditemukan di database");window.location = "'.base_url().'";</script>';
  //           }
  //       }   
	}

	public function index()
	{
		$query="SELECT * FROM kas WHERE status='1' and statusisi='0'";
		$sisa=$this->Petty_cash->kueri($query)->row()->sisa;
		$nopengisian=$this->Petty_cash->kueri($query)->row()->nopengisian;
		$lastisi=$this->Petty_cash->kueri($query)->row()->tanggal;
		$query2="SELECT sum(jkeluar) as total FROM kas where nopengisian='$nopengisian'";
		$totalpengeluaran=$this->Petty_cash->kueri($query2)->row()->total;
		$query3=$this->db->query("SELECT namajenis,(SELECT sum(jkeluar) FROM kas WHERE kas.idjenis=jenispengeluaran.idjenis and nopengisian='$nopengisian') as total from jenispengeluaran");
		$data=array(
		  'page'=>'contoh',
		  'link'=>'beranda',
		  'sisakas'=>$sisa,
		  'lastisi'=>$lastisi,
		  'totalpengeluaran'=>$totalpengeluaran,
		  'row'=>$query3,
		  'script' => 'script_beranda',
		);
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		$this->load->view('template/content');
		$this->load->view('template/footer');
	}
}
