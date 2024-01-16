<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getKelTps($idkec)
    {
        $this->db->select('id_tps,iddesa, namakel, idkec,namakec, count(tps) as tps, (select count(DISTINCT(id_tps)) from rekap_suara where tbl_tps.iddesa=rekap_suara.iddesa) as input');
        $this->db->from('tbl_tps');
        $this->db->where('idkec', $idkec);
        $this->db->group_by('namakel');
        $this->db->order_by('iddesa');

        $query = $this->db->get();
        return $query->result_array();
    }
}
