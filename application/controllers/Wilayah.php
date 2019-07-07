<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Wilayah extends CI_Controller {
	
    public function __construct(){
        parent::__construct();

        $this->load->model(array(
              'M_Propinsi'  =>  'propinsi',
              'M_Kota'      =>  'kota',
              ));
    }

    public function index(){
        $data['provinsi'] = $this->propinsi->get_list_propinsi();
        $this->load->view('view_wilayah', $data);
    }

    public function list_kota(){
        // Ambil data ID Provinsi yang dikirim via ajax post
        $id_provinsi = $this->input->post('id_provinsi');
        $kota = $this->kota->get_list_kota($id_provinsi);

        // Buat variabel untuk menampung tag-tag option nya
        // Set defaultnya dengan tag option Pilih
        $lists = "<option value=''>--Please-Select---</option>";
        foreach($kota as $data){
            $lists .= "<option value='".$data->id."'>".$data->nama."</option>"; // Tambahkan tag option ke variabel $lists
        }
        $callback = array('list_kota'=>$lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota
        echo json_encode($callback); // konversi varibael $callback menjadi JSON
    }
    
}
