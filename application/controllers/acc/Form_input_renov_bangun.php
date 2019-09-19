<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Form_input_renov_bangun extends CI_Controller {
    
    public $table = "tr23_renov_bangun_pending";

    public function __construct(){
        parent::__construct();
        $this->load->model('form_input_pengeluaran_m');
    }

    public function index()
    {
        $data['kd_akun'] = $this->input->get('kd_akun');
        $data['transaksi'] = $this->form_input_pengeluaran_m->getSatuJenisAkun($data['kd_akun'], $this->table);
        $this->load->view('acc/form_input_renov_bangun_v', $data);
    }

    public function proses(){
        //membuat id
        //buat format tanggal
        $kd_temp = date("Ymd").$this->input->post('kd_akun');       
        //kueri ambil jumlah row yang sama
        $cari = $this->db->query("SELECT * FROM $this->table WHERE idtr LIKE '$kd_temp%%%'");
        //ambil jumlah row
        $hasil = $cari->num_rows();
        //generate id
        $hasil2 = $hasil + 1;
        //tambah prefix '0' ke increment
        // masukkan increment ke id_barang
        $idtr = $kd_temp . str_pad($hasil2, 3, '0', STR_PAD_LEFT);

        $data = array(
            'idtr' => $idtr,
            'kd_akun' => $this->input->post('kd_akun'),
            'tanggal' => $this->input->post('tanggal'),
            'nominal' => $this->input->post('nominal'),
            'keterangan' => $this->input->post('keterangan')
        );

        $this->form_input_pengeluaran_m->save($data, $this->table);

        $ke_halaman = 'acc/form_input_renov_bangun?kd_akun='.$data['kd_akun'];

        redirect($ke_halaman, 'refresh');
    }
    
}

/* End of file  form_input_renov_bangun.php */