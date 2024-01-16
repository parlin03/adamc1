<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Input_model extends CI_Model
{
    // public function __construct()
    // {
    //     $this->load->database();
    // }

    public function getTps($iddesa)
    {

        // $this->db->from('');
        // $this->db->where('',);
        // $this->db->order_by('iddesa');

        $query = 'SELECT id_tps, tps FROM tbl_tps WHERE iddesa = ' . $iddesa . ' AND id_tps NOT IN (SELECT id_tps FROM rekap_suara WHERE iddesa = ' . $iddesa . ' ORDER BY id_tps)';
        return $this->db->query($query)->result_array();
    }

    public function getTitle($iddesa)
    {

        // $this->db->from('');
        // $this->db->where('',);
        // $this->db->order_by('iddesa');

        $query = 'SELECT namakec FROM kel WHERE iddesa = ' . $iddesa;
        return $this->db->query($query)->row()->namakec;
    }
    public function getHead($iddesa)
    {

        // $this->db->from('');
        // $this->db->where('',);
        // $this->db->order_by('iddesa');

        $query = 'SELECT namakel FROM kel WHERE iddesa = ' . $iddesa;
        return $this->db->query($query)->row()->namakel;
    }

    public function getKec($iddesa)
    {

        // $this->db->from('');
        // $this->db->where('',);
        // $this->db->order_by('iddesa');

        $query = 'SELECT idkec FROM kel WHERE iddesa = ' . $iddesa;
        return $this->db->query($query)->row();
    }
}
