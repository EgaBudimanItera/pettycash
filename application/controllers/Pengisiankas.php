<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengisiankas extends CI_Controller {

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
            'page' => 'pengisian/data',
            'link' => 'pengisian',
            'script'=>'',
            'a'=>$this->Petty_cash->list_data_where('status','1','kas')->num_rows(),
            'list'=>$this->Petty_cash->list_data_where('statusisi','0','kas')->result(),
            'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Data pengisian' => base_url() . 'pengisiankas'),

        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function formtambah(){
        $data = array(
            'page' => 'pengisian/formtambah',
            'link' => 'pengisian',
            'script'=>'script/pengisian',
            'list'=>'',
            'nopengisian'=>$this->Petty_cash->nopengisian(),
            'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Data pengisian' => base_url() . 'pengisiankas',
                'Tambah pengisian' => base_url() . 'pengisiankas/formtambah',
            ),
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function formedit($idkas){
        $data = array(
            'page' => 'pengisian/formedit',
            'link' => 'pengisian',
            'script'=>'script/pengisian',
            'list'=>$this->Petty_cash->list_data_where('idkas',$idkas,'kas')->row(),
            'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Data pengisian' => base_url() . 'pengisiankas',
                'Edit pengisian' => base_url() . 'pengisiankas/formedit',
            ),
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function prosessimpan(){
        $nopengisian=$this->Petty_cash->nopengisian();
        $tanggal=date_format(date_create($this->input->post('tanggal',true)),"Y-m-d");
        $jmasuk=$this->input->post('jmasuk',true);
        $status='1';
        $statusisi='0';
        $verifikasiby=$this->input->post('verifikasiby',true);
        //cek upload gambar
        //file1
        $filename1="";
        $filename2="";
        $config ['upload_path'] = './assets/file_upload/';
        $config ['allowed_types'] = 'jpg|png|jpeg';
        $config ['max_size'] = '3000000';
        $this->load->library('upload', $config);
        if($this->upload->do_upload('file1'))
        {
            $data = array('upload_data' => $this->upload->data());
            $filename1 = $data['upload_data']['file_name'];
        }
        else
        {
            $error = array('error File 1' => $this->upload->display_errors());
            $this->session->set_flashdata('msg', print_r($error, true));
            redirect('pengisiankas/formtambah');
            exit();
        }
        if (isset($_FILES['file2']) AND $_FILES['file2']['tmp_name'] != "") {
            if($this->upload->do_upload('file2'))
            {
                $data = array('upload_data' => $this->upload->data());
                $filename2 = $data['upload_data']['file_name'];
            }
            else
            {
                $error = array('error File 2' => $this->upload->display_errors());
                $this->session->set_flashdata('msg', print_r($error, true));
                redirect('pengisiankas/formtambah');
                exit();
            }
        }
        // $config ['file_name'] = 'file1'.$nopengisian.'1.jpg';
        // $this->load->library('upload', $config);  //File Uploading library
        // $this->upload->do_upload('file1');  // input name which have to upload 
        // $file1=$this->upload->data();   //variable which store the path
        // if(empty($file1)){
        //     $filename1='noimage.jpg';
        // }else{
        //     $filename1=$file1['file_name']; 
        // }
        // //file2

        // $config2 ['upload_path'] = './assets/file_upload/';
        // $config2 ['allowed_types'] = 'jpg|png|jpeg';
        // $config2 ['max_size'] = '3000000';
        // $config2 ['file_name'] = 'file2'.$nopengisian.'2.jpg';
        // $this->load->library('upload', $config2);  //File Uploading library
        // $this->upload->do_upload('file2');  // input name which have to upload 
        // $file2=$this->upload->data();   //variable which store the path
        // if(empty($file2)){
        //     $filename2='noimage.jpg';
        // }else{
        //     $filename2=$file2['file_name'];   
        // }
        // var_dump('filename1 :'.$filename1.'    filename2:'.$filename2);
        // exit();
        $jumlahdata=$this->Petty_cash->list_data_where('status','1','kas')->num_rows();
        if($jumlahdata>=1){
            $data=array(
                'status'=>'0'
            );
            $update=$this->Petty_cash->update('statusisi','0','kas',$data);
        };
        $datakas=array(
            'nopengisian'=>$nopengisian,
            'tanggal'=>$tanggal,
            'jmasuk'=>$jmasuk,
            'sisa'=>$jmasuk,
            'status'=>$status,
            'statusisi'=>$statusisi,
            'file1'=>$filename1,
            'file2'=>$filename2,
            'verifikasiby'=>$verifikasiby
        );
        
        $simpankas=$this->Petty_cash->simpan_data($datakas,'kas');
        if($simpankas){
            echo '<script>alert("Data Berhasil Disimpan");window.location = "'.base_url().'pengisiankas";</script>';
        }else{
             echo '<script>alert("Data Gagal Disimpan");window.location = "'.base_url().'pengisiankas/formtambah";</script>';
        }
    }

    public function prosesedit(){
        $file1=$this->input->post('file1',true);
        $file2=$this->input->post('file2',true);
        $file1isi=$this->input->post('file1isi',true);
        $file2isi=$this->input->post('file2isi',true);
        $idkas=$this->input->post('idkas',true);
        $filename1="";
        $filename2="";
        $config ['upload_path'] = './assets/file_upload/';
        $config ['allowed_types'] = 'jpg|png|jpeg';
        $config ['max_size'] = '3000000';
        $this->load->library('upload', $config);
        if($file1=="NULL"){
            $filename1=$file1isi;    
        }
        else
        {
            if($this->upload->do_upload('file1'))
            {
                $data = array('upload_data' => $this->upload->data());
                $filename1 = $data['upload_data']['file_name'];
            }
            else
            {
                $error = array('error File 1' => $this->upload->display_errors());
                $this->session->set_flashdata('msg', print_r($error, true));
                redirect('pengisiankas/formedit/'.$idkas);
                exit();
            } 
           
        }
        if($file2=="NULL")
        {
           $filename2=$file2isi;
        }
        else
        {
            if (isset($_FILES['file2']) AND $_FILES['file2']['tmp_name'] != "") {
                if($this->upload->do_upload('file2'))
                {
                    $data = array('upload_data' => $this->upload->data());
                    $filename2 = $data['upload_data']['file_name'];
                }
                else
                {
                    $error = array('error File 2' => $this->upload->display_errors());
                    $this->session->set_flashdata('msg', print_r($error, true));
                    redirect('pengisiankas/formedit/'.$idkas);
                    exit();
                }
            }
        }
        $data=array(
            'file1'=>$filename1,
            'file2'=>$filename2,
        );
        
        $edit=$this->Petty_cash->update('idkas',$idkas,'kas',$data);
        if($edit)
        {
            echo '<script>alert("Data Berhasil Disimpan");window.location = "'.base_url().'pengisiankas";</script>';
        }
        else
        {
            echo '<script>alert("Data Gagal Disimpan");window.location = "'.base_url().'pengisiankas/formtambah";</script>';
        }
    }

    public function prosesopen($idkas){
        $data=array(
            'status'=>'0'
        );
        $update=$this->Petty_cash->update('statusisi','0','kas',$data);

        $data=array(
            'status'=>'1'
        );
        $update=$this->Petty_cash->update('idkas',$idkas,'kas',$data);
        if($update)
        {
            echo '<script>alert("Data Berhasil Diubah");window.location = "'.base_url().'pengisiankas";</script>';
        }
        else
        {
            echo '<script>alert("Data Gagal Diubah");window.location = "'.base_url().'pengisiankas/formtambah";</script>';
        }
    }

    public function proseshapus($idkas){
       $hapus=$this->Petty_cash->hapus('idkas',$idkas,'kas');
        if($hapus)
        {
            echo '<script>alert("Data Berhasil Dihapus");window.location = "'.base_url().'pengisiankas";</script>';
        }
        else
        {
            echo '<script>alert("Data Gagal Dihapus");window.location = "'.base_url().'pengisiankas/formtambah";</script>';
        } 
    }
}