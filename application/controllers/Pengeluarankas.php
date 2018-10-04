<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengeluarankas extends CI_Controller {

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
        $query="SELECT *,sum(jkeluar) as total FROM kas join unit on kas.idunit=unit.idunit join jenispengeluaran on kas.idjenis=jenispengeluaran.idjenis group by nopengeluaran";
        $data = array(
            'page' => 'pengeluaran/data',
            'link' => 'pengeluaran',
            'script'=>'',
            'list'=>$this->Petty_cash->kueri($query)->result(),
            'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Data Pengeluaran Kas' => base_url() . 'pengeluarankas'),
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function formtambah(){
        $query="SELECT * FROM kas where status='1' and statusisi='0' order by idkas desc limit 1";
        $data = array(
            'page' => 'pengeluaran/formtambah',
            'link' => 'pengeluaran',
            'script'=>'script/pengeluaran',
            'nopengeluaran'=>$this->Petty_cash->nopengeluaran(),
            'sisakas'=>$this->Petty_cash->kueri($query)->row(),
            'idunit'=>$this->Petty_cash->list_data_all('unit'),
            'idjenis'=>$this->Petty_cash->list_data_all('jenispengeluaran'),
            'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Data Pengeluaran Kas' => base_url() . 'pengeluarankas',
                'Tambah Pengeluaran Kas' => base_url() . 'pengeluarankas/formtambah',
            ),
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function detail($nopengeluaran){
      $query="SELECT *,sum(jkeluar) as total FROM kas join unit on kas.idunit=unit.idunit where nopengeluaran='$nopengeluaran'";
      $dinas=array(
        'nopengeluaran'=>$nopengeluaran,
        'idjenis'=>'J001',
      );
      $rt=array(
        'nopengeluaran'=>$nopengeluaran,
        'idjenis'=>'J002',
      );
      $atk=array(
        'nopengeluaran'=>$nopengeluaran,
        'idjenis'=>'J003',
      );
      $beabank=array(
        'nopengeluaran'=>$nopengeluaran,
        'idjenis'=>'J004',
      );
      $biayapos=array(
        'nopengeluaran'=>$nopengeluaran,
        'idjenis'=>'J005',
      );
      $sampah=array(
        'nopengeluaran'=>$nopengeluaran,
        'idjenis'=>'J006',
      );
      $airbersih=array(
        'nopengeluaran'=>$nopengeluaran,
        'idjenis'=>'J007',
      );
      $jagamalam=array(
        'nopengeluaran'=>$nopengeluaran,
        'idjenis'=>'J008',
      );
      $koran=array(
        'nopengeluaran'=>$nopengeluaran,
        'idjenis'=>'J009',
      );
      $parkir=array(
        'nopengeluaran'=>$nopengeluaran,
        'idjenis'=>'J010',
      );
      $data=array(
        'page' => 'pengeluaran/detailpengeluaran',
        'link' => 'pengeluaran',
        'script'=>'script/pengeluaran',
        'listatas'=>$this->Petty_cash->kueri($query)->row(),
        'listdetail'=>$this->Petty_cash->list_data_where('nopengeluaran',$nopengeluaran,'kas')->result(),
        'dinas'=>$this->Petty_cash->ambil_new($dinas,'kas')->num_rows(),
        'rt'=>$this->Petty_cash->ambil_new($rt,'kas')->num_rows(),
        'atk'=>$this->Petty_cash->ambil_new($atk,'kas')->num_rows(),
        'beabank'=>$this->Petty_cash->ambil_new($beabank,'kas')->num_rows(),
        'biayapos'=>$this->Petty_cash->ambil_new($biayapos,'kas')->num_rows(),
        'airbersih'=>$this->Petty_cash->ambil_new($airbersih,'kas')->num_rows(),
        'sampah'=>$this->Petty_cash->ambil_new($sampah,'kas')->num_rows(),
        'jagamalam'=>$this->Petty_cash->ambil_new($jagamalam,'kas')->num_rows(),
        'koran'=>$this->Petty_cash->ambil_new($koran,'kas')->num_rows(),
        'parkir'=>$this->Petty_cash->ambil_new($parkir,'kas')->num_rows(),
        'terbilang'=>$this->Petty_cash->terbilang($this->Petty_cash->kueri($query)->row()->total),
        'breadcrumb' => array(
            'Beranda' => base_url() . 'berandaadmin',
            'Data Pengeluaran Kas' => base_url() . 'pengeluarankas',
            'Detail Pengeluaran Kas' => base_url() . 'pengeluarankas/detail/'.$nopengeluaran,
        ),
      );
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar');
      $this->load->view('template/content');
      $this->load->view('template/footer');
    }

    public function printvoucher($nopengeluaran){
      $query="SELECT *,sum(jkeluar) as total FROM kas join unit on kas.idunit=unit.idunit where nopengeluaran='$nopengeluaran'";
      $dinas=array(
        'nopengeluaran'=>$nopengeluaran,
        'idjenis'=>'J001',
      );
      $rt=array(
        'nopengeluaran'=>$nopengeluaran,
        'idjenis'=>'J002',
      );
      $atk=array(
        'nopengeluaran'=>$nopengeluaran,
        'idjenis'=>'J003',
      );
      $beabank=array(
        'nopengeluaran'=>$nopengeluaran,
        'idjenis'=>'J004',
      );
      $biayapos=array(
        'nopengeluaran'=>$nopengeluaran,
        'idjenis'=>'J005',
      );
      $sampah=array(
        'nopengeluaran'=>$nopengeluaran,
        'idjenis'=>'J006',
      );
      $airbersih=array(
        'nopengeluaran'=>$nopengeluaran,
        'idjenis'=>'J007',
      );
      $jagamalam=array(
        'nopengeluaran'=>$nopengeluaran,
        'idjenis'=>'J008',
      );
      $koran=array(
        'nopengeluaran'=>$nopengeluaran,
        'idjenis'=>'J009',
      );
      $parkir=array(
        'nopengeluaran'=>$nopengeluaran,
        'idjenis'=>'J010',
      );
      $data=array(
        'listatas'=>$this->Petty_cash->kueri($query)->row(),
        'listdetail'=>$this->Petty_cash->list_data_where('nopengeluaran',$nopengeluaran,'kas')->result(),
        'dinas'=>$this->Petty_cash->ambil_new($dinas,'kas')->num_rows(),
        'rt'=>$this->Petty_cash->ambil_new($rt,'kas')->num_rows(),
        'atk'=>$this->Petty_cash->ambil_new($atk,'kas')->num_rows(),
        'beabank'=>$this->Petty_cash->ambil_new($beabank,'kas')->num_rows(),
        'biayapos'=>$this->Petty_cash->ambil_new($biayapos,'kas')->num_rows(),
        'airbersih'=>$this->Petty_cash->ambil_new($airbersih,'kas')->num_rows(),
        'sampah'=>$this->Petty_cash->ambil_new($sampah,'kas')->num_rows(),
        'jagamalam'=>$this->Petty_cash->ambil_new($jagamalam,'kas')->num_rows(),
        'koran'=>$this->Petty_cash->ambil_new($koran,'kas')->num_rows(),
        'parkir'=>$this->Petty_cash->ambil_new($parkir,'kas')->num_rows(),
        'terbilang'=>$this->Petty_cash->terbilang($this->Petty_cash->kueri($query)->row()->total),
        'breadcrumb' => array(
            'Beranda' => base_url() . 'berandaadmin',
            'Data Pengeluaran Kas' => base_url() . 'pengeluarankas',
            'Detail Pengeluaran Kas' => base_url() . 'pengeluarankas/detail/'.$nopengeluaran,
        ),
      );
      $this->load->view('pengeluaran/voucher',$data);
      
    }

    public function upload($nopengeluaran){
      $data=array(
        'page' => 'pengeluaran/upload',
        'link' => 'pengeluaran',
        'script'=>'script/pengeluaran',
        'nopengeluaran'=>$nopengeluaran,
        'breadcrumb' => array(
            'Beranda' => base_url() . 'berandaadmin',
            'Data Pengeluaran Kas' => base_url() . 'pengeluarankas',
            'Upload Nota' => base_url() . 'pengeluarankas/upload/'.$nopengeluaran,
        ),  
      );
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar');
      $this->load->view('template/content');
      $this->load->view('template/footer');
    }

    public function prosesupload(){
      $nopengeluaran=$this->input->post('nopengeluaran',true);
      $jumlah=$this->Petty_cash->list_data_where('nopengeluaran',$nopengeluaran,'filenota')->num_rows()+1;
      
      //foto1
      $config ['upload_path'] = './assets/file_upload/';
      $config ['allowed_types'] = 'jpg|png|jpeg';
      $config ['max_size'] = '3000000';
      $config ['file_name'] = 'NOTA_'.$nopengeluaran.'_'.$jumlah.'.jpg';
      $this->load->library('upload', $config);  //File Uploading library
      $this->upload->do_upload('namafile');  // input name which have to upload 
      $foto1=$this->upload->data();   //variable which store the path
      
      $data=array(
        'nopengeluaran'=>$nopengeluaran,
        'ket'=>$this->input->post('ket',true),
        'namafile'=>$foto1['file_name'],
      );
     
      $simpan=$this->Petty_cash->simpan_data($data,'filenota');
      if($simpan){
        echo '<script>alert("Sukses Simpan !!Data Nota Pengeluaran Kas Kecil ");window.location = "'.base_url().'pengeluarankas";</script>'; 
      }else{
        echo '<script>alert("Gagal Simpan !!Data Nota Pengeluaran Kas Kecil ");window.location = "'.base_url().'pengeluarankas";</script>'; 
      }
    }

    public function formdetailtemp(){
        $createdby=$this->session->userdata('userNama');
        $query="SELECT * FROM pengeluarantemp JOIN jenispengeluaran on pengeluarantemp.idjenis=jenispengeluaran.idjenis";
        $querykas="SELECT * FROM kas where status='1' and statusisi='0' order by idkas desc limit 1";
        $data = array(
            'listpengeluaran' =>$this->Petty_cash->kueri($query)->result(),
            'script'=>'script/pengeluaran',
            'sisakas'=>$this->Petty_cash->kueri($querykas)->row(),
        );
        $this->load->view('pengeluaran/formdetail',$data);
    }

    public function formedit(){
        $data = array(
            'page' => 'pengeluaran/formedit',
            'link' => 'pengeluaran',
            'script'=>'',
            'list'=>'',
            'breadcrumb' => array(
                'Beranda' => base_url() . 'berandaadmin',
                'Data Pengeluaran Kas' => base_url() . 'pengeluarankas',
                'Edit Pengeluaran Kas' => base_url() . 'pengeluarankas/formedit',
            ),
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function tambahpengeluarantemp(){
       $idjenis=$this->input->post('idjenis',true);
       $keterangan=$this->input->post('keterangan',true);
       $jkeluar=$this->input->post('jkeluar',true);
       $user=$this->session->userdata('userNama');
       $user="e";
       $data=array(
        'idjenis'=>$idjenis,
        'keterangan'=>$keterangan,
        'jumlah'=>$jkeluar,
        'user'=>$user
       );
       $simpan=$this->Petty_cash->simpan_data($data,'pengeluarantemp');
        if($simpan){
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil ditambah !</div>'
            );
            echo json_encode(array('status'=>'success'));
        }else{
           $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal ditambah !</div>'
            );
           echo json_encode(array('status'=>'fail'));
        }
    }

    public function proseshapustemp($idtemp){
        $hapustemp=$this->Petty_cash->hapus('idtemp',$idtemp,'pengeluarantemp');
        if($hapustemp){
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil dihapus !</div>'
            );
            echo json_encode(array('status'=>'success'));
         }else{
           $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal dihapus !</div>'
            );
           echo json_encode(array('status'=>'fail'));
         }
    }

    public function prosessimpan(){
      $user=$this->session->userdata('userNama');
      $user="e";
      $nopengeluaran=$this->Petty_cash->nopengeluaran();
      $nopengisian=$this->input->post('nopengisian',true);
      $idunit=$this->input->post('idunit',true);
      $tanggal=date_format(date_create($this->input->post('tglkeluar',true)),"Y-m-d");
      $status='2';
      $statusisi='1';
      $verifikasiby=$this->input->post('verifikasiby',true);  
      
      $dimintaoleh=$this->input->post('dimintaoleh',true);
      $sisa=$this->input->post('sisa',true);  
      $query="SELECT coalesce(sum(jumlah),0) as total FROM pengeluarantemp WHERE user='$user'";
      $totalpengeluaran=$this->Petty_cash->kueri($query)->row()->total;
      $sisa=$sisa-$totalpengeluaran;
      
      if($totalpengeluaran=='0'){
         echo '<script>alert("Gagal Simpan !!Data Pengeluaran Kas Kecil Kosong");window.location = "'.base_url().'pengeluarankas";</script>';
      }
      else{
        if($sisa<0){
           echo '<script>alert("Gagal Simpan !!Data Pengeluaran Kas Kecil Melebihi Saldo Kas");window.location = "'.base_url().'pengeluarankas";</script>';   
        }
        else{
            $pengeluarantemp=$this->Petty_cash->list_data_where('user',$user,'pengeluarantemp')->result();
            $i=0;
            foreach ($pengeluarantemp as $row) {
                $ins[$i]['idunit']        = $idunit;
                $ins[$i]['idjenis']       = $row->idjenis;
                $ins[$i]['keterangan']    = $row->keterangan;
                $ins[$i]['nopengisian']   = $nopengisian;
                $ins[$i]['nopengeluaran'] = $nopengeluaran;
                $ins[$i]['tanggal']       = $tanggal;
                $ins[$i]['jkeluar']       = $row->jumlah;
                $ins[$i]['status']        = $status;
                $ins[$i]['statusisi']     = $statusisi;
                $ins[$i]['verifikasiby']  = $verifikasiby;
                $ins[$i]['dimintaoleh']   = $dimintaoleh;
                $i++;  
            } 
            $dataupdate=array(
                'sisa'=>$sisa,
            );
            $queryupdate="UPDATE kas set sisa='$sisa' where nopengisian='$nopengisian' and status='1' and statusisi='0'";
            $update=$this->Petty_cash->kueri($queryupdate);
            $simpanpengeluaran=$this->Petty_cash->insertbatch('kas',$ins);
            $hapustemp=$this->Petty_cash->hapus('user',$user,'pengeluarantemp');

            if($update && $simpanpengeluaran && $hapustemp){
                 echo '<script>alert("Berhasil Simpan !!Data Pengeluaran Kas Kecil Sukses Disimpan");window.location = "'.base_url().'pengeluarankas";</script>';   
            }   
            else{
                 echo '<script>alert("Gagal Simpan !!");window.location = "'.base_url().'pengeluarankas";</script>';      
            }
        }
        
      }
    }


}