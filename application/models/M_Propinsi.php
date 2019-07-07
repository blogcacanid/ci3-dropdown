<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Propinsi extends CI_Model {
	
    var $table = 'propinsi';
    var $pkey = 'id';

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
 
    function get_list_propinsi() {
        return $this->db->get('provinsi')->result(); // Tampilkan semua data yang ada di tabel provinsi
    }

}
