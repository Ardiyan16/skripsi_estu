<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->model('m_admin');
        if ($this->session->userdata('status') != "2") {
			echo "<script>
                alert('Anda harus login terlebih dahulu');
                window.location.href = '" . base_url('auth') . "';
            </script>"; //Url Logi
		}
    }

    public function index()
    {
        $var['title'] = "admin-dashboard";
        $this->load->view('admin/page/dashboard', $var);
    }

    public function konfirmasi()
    {
        $var['title'] = 'admin-konfirmasi user';
        $var['user'] = $this->m_admin->konfirmasi();
        $this->load->view('admin/page/konfirmasi', $var);
    }

    public function proses_konfirmasi($id)
    {
        $this->m_admin->proses_konfirmasi($id);
        $this->session->set_flashdata('terkonfir', true);
        redirect('admin/admin/konfirmasi');
    }

    public function data_user()
    {
        $var['title'] = 'admin-data user';
        $var['user'] = $this->m_admin->data_user();
        $this->load->view('admin/page/data_user', $var);
    }

    public function v_data_nilai()
    {
        $var['title'] = 'admin-data nilai';
        $var['nilai'] = $this->m_admin->get_nilai();
        $var['nilai2'] = $this->m_admin->get_nilai();
        $this->load->view('admin/page/data_nilai', $var);
    }

    public function v_add_nilai()
    {
        $var['title'] = 'admin-tambah nilai';
        $var['user'] = $this->m_admin->data_user();
        $this->load->view('admin/page/add_nilai', $var);
    }

    public function user_id($id)
    {
        $var = $this->m_admin->user_id($id);
        echo json_encode($var);
    }

    public function save_nilai()
    {
        $this->m_admin->save_nilai();
        $this->session->set_flashdata('insert', true);
        redirect('admin/admin/v_data_nilai');
    }

    public function update_nilai()
    {
        $this->m_admin->update_nilai();
        $this->session->set_flashdata('update', true);
        redirect('admin/admin/v_data_nilai');
    }

    public function delete_nilai($id)
    {
        $this->m_admin->delete_nilai($id);
        $this->session->set_flashdata('delete', true);
        redirect('admin/admin/v_data_nilai');
    }

    public function v_nilai_hitung()
    {
        $var['title'] = 'admin-data nilai hitung';
        $var['nilai'] = $this->m_admin->get_nilai();
        $this->load->view('admin/perhitungan/nilai_hitung', $var);
    }
}