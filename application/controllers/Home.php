<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata('user_id'))) {
            redirect(site_url(), 'refresh');
        }
        $this->load->model('Dashboard_model', 'dashboard');
    }




    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('user_id')])->row_array();

        $data['panakkukang'] = $this->dashboard->getKelTps('737109');
        $data['biringkanaya'] = $this->dashboard->getKelTps('737111');
        $data['manggala'] = $this->dashboard->getKelTps('737112');
        $data['tamalanrea'] = $this->dashboard->getKelTps('737114');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }

    
}
