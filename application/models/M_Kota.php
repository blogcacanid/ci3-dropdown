<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Kota extends CI_Model {
	
    var $table = 'kota';
    var $pkey = 'id';

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
 
    function get_list_kota($id_provinsi){
        $this->db->where('id_provinsi', $id_provinsi);
        $result = $this->db->get($this->table)->result(); // Tampilkan semua data kota berdasarkan id provinsi
        return $result; 
    }


}
