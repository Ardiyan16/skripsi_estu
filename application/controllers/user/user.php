<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function index()
    {
        $var['title'] = 'profile';
        $id = $this->session->userdata('id');
        $var['profile'] = $this->db->get_where('users', ['id' => $id])->row_array();
        $this->load->view('user/page/profile', $var);
    }
}