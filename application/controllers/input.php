<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class Input extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata('user_id'))) {
            redirect(site_url(), 'refresh');
        }
        // is_logged_in();
    }
    function index()
    {
        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('user_id')])->row_array();

        $this->load->model('Input_model');
        $data['kel'] = $this->input->get('id');
        $data['tps'] = $this->Input_model->getTps($data['kel']);
        $data['kec'] = $this->Input_model->getKec($data['kel']); //get-row for single data only
        $data['head'] = $this->Input_model->getHead($data['kel']);
        $data['title'] = $this->Input_model->getTitle($data['kel']);

        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('input', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = 'Door to Door Campaign';
        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('user_id')])->row_array();

        $data = array(
            array(
                'id_tps'        => $this->input->post('id_tps'),
                'iddesa'        => $this->input->post('iddesa'),
                'idkec'         => $this->input->post('idkec'),
                'created_by'    => $this->session->userdata('user_id'),
                'tahun'         => '2024',
                'no_urut_calon' => '00',
                'jml_suara'     => $this->input->post('jml_suara0')
            ),
            array(
                'id_tps'        => $this->input->post('id_tps'),
                'iddesa'        => $this->input->post('iddesa'),
                'idkec'         => $this->input->post('idkec'),
                'created_by'    => $this->session->userdata('user_id'),
                'tahun'         => '2024',
                'no_urut_calon' => '01',
                'jml_suara'     => $this->input->post('jml_suara1')
            ),
            array(
                'id_tps'        => $this->input->post('id_tps'),
                'iddesa'        => $this->input->post('iddesa'),
                'idkec'         => $this->input->post('idkec'),
                'created_by'    => $this->session->userdata('user_id'),
                'tahun'         => '2024',
                'no_urut_calon' => '02',
                'jml_suara'     => $this->input->post('jml_suara2')
            ),
            array(
                'id_tps'        => $this->input->post('id_tps'),
                'iddesa'        => $this->input->post('iddesa'),
                'idkec'         => $this->input->post('idkec'),
                'created_by'    => $this->session->userdata('user_id'),
                'tahun'         => '2024',
                'no_urut_calon' => '03',
                'jml_suara'     => $this->input->post('jml_suara3')
            ),
            array(
                'id_tps'        => $this->input->post('id_tps'),
                'iddesa'        => $this->input->post('iddesa'),
                'idkec'         => $this->input->post('idkec'),
                'created_by'    => $this->session->userdata('user_id'),
                'tahun'         => '2024',
                'no_urut_calon' => '04',
                'jml_suara'     => $this->input->post('jml_suara4')
            ),
            array(
                'id_tps'        => $this->input->post('id_tps'),
                'iddesa'        => $this->input->post('iddesa'),
                'idkec'         => $this->input->post('idkec'),
                'created_by'    => $this->session->userdata('user_id'),
                'tahun'         => '2024',
                'no_urut_calon' => '05',
                'jml_suara'     => $this->input->post('jml_suara5')
            ),
            array(
                'id_tps'        => $this->input->post('id_tps'),
                'iddesa'        => $this->input->post('iddesa'),
                'idkec'         => $this->input->post('idkec'),
                'created_by'    => $this->session->userdata('user_id'),
                'tahun'         => '2024',
                'no_urut_calon' => '06',
                'jml_suara'     => $this->input->post('jml_suara6')
            )
        );

        $this->db->insert_batch('rekap_suara', $data);


        $id_tps       = $this->input->post('id_tps');
        $data = array(
            'jml_sah'       => $this->input->post('jml_sah'),
            'jml_rusak'     => $this->input->post('jml_rusak'),

        );

        $this->db->where('id_tps', $id_tps);
        $this->db->update('tbl_tps', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your Data has been updated! </div>');
        $this->session->unset_userdata('message');
        redirect('/', 'refresh');
    }
}
