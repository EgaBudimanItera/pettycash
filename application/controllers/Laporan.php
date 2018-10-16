<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

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
            'page' => 'laporan/data',
            'link' => 'laporan',
            'script'=>'',
            'list'=>$this->Petty_cash->list_data_where('statusisi','0','kas')->result(),
            'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Laporan Petty Cash' => base_url() . 'laporan'),
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function iktisar($nopengisian){
        $query="SELECT tanggal,keterangan,nopengeluaran,keterangan,nopengisian,sum(case when idjenis = 'J001' THEN jkeluar else 0 END) J001,sum(case when idjenis = 'J002' THEN jkeluar else 0 END) J002,sum(case when idjenis = 'J003' THEN jkeluar else 0 END) J003,sum(case when idjenis = 'J004' THEN jkeluar else 0 END) J004,sum(case when idjenis = 'J005' THEN jkeluar else 0 END) J005,sum(case when idjenis = 'J006' THEN jkeluar else 0 END) J006,sum(case when idjenis = 'J007' THEN jkeluar else 0 END) J007,sum(case when idjenis = 'J008' THEN jkeluar else 0 END) J008,sum(case when idjenis = 'J009' THEN jkeluar else 0 END) J009,sum(case when idjenis = 'J010' THEN jkeluar else 0 END) J010 FROM kas WHERE statusisi='1' AND nopengisian='$nopengisian' GROUP BY tanggal,nopengeluaran,keterangan ORDER BY idkas asc";
        $data=array(
           'list'=>$this->Petty_cash->kueri($query)->result(),
        );
        $this->load->view('laporan/iktisar',$data);
    }    

    public function rekap(){
        $daritanggal=date_format(date_create($this->input->post('daritanggal',true)),"Y-m-d");
        $hinggatanggal=date_format(date_create($this->input->post('hinggatanggal',true)),"Y-m-d");

        $query="SELECT * FROM kas where tanggal between '$daritanggal' and '$hinggatanggal' and statusisi='1' and statushapus='1'";
        $data=array(
            'list'=>$this->Petty_cash->kueri($query)->result(),
        );
        $this->load->view('laporan/rekap',$data);
    }

    public function mpp($nopengisian){
        $query="SELECT * FROM kas where nopengisian='$nopengisian'";
        $data=array(
            'list'=>$this->Petty_cash->kueri($query)->row(),
            
        );
        $this->load->view('laporan/mpp',$data);
    }
}