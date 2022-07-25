<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
    }
    public function index()
    {
        $this->load->view('admin/auth/login');
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim', ['required' => 'username tidak boleh kosong']);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', ['required' => 'password tidak boleh kosong']);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/auth/login');
        } else {
            $this->proses_login();
        }
    }

    private function proses_login()
    {
        $username = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);
        $password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);

        $admin = $this->db->get_where('admin', ['username' => $username])->row_array();
        $cekpass = $this->db->get_where('users', array('password' => $password));

        if ($username == $admin['username']) {
            if ($password == $admin['password']) {
                $data = [
                    'id' => $admin['id'],
                    'username' => $admin['username'],
                    'status' => $admin['status'],
                ];
                $this->session->set_userdata($data);
                if ($admin['status'] == '2') {
                    redirect('admin/admin');
                } else {
                    $this->session->unset_userdata('id');
                    $this->session->unset_userdata('username');
                    $this->session->unset_userdata('status');
                    $this->session->set_flashdata('belumkonfirmasi', true);
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('passwordsalah', true);
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('usernamesalah', true);
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('status');

        $this->session->set_flashdata('logout', true);
        redirect('auth');
    }
}
