<?php
defined('BASEPATH') or exit('No direct script access allowed');

class data_set extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->model('m_dataset');
    }

    public function index()
    {
        $var['title'] = "admin-data set";
        $var['dataset'] = $this->m_dataset->get_dataset();
        $var['dataset2'] = $this->m_dataset->get_dataset();
        $this->load->view('admin/page/data_set', $var);
    }

    public function add_dataset()
    {
        $var['title'] = "admin-tambah data set";
        $this->load->view('admin/page/add_dataset', $var);
    }

    public function save_dataset()
    {
        $this->m_dataset->save_dataset();
        $this->session->set_flashdata('insert', true);
        redirect('admin/data_set');
    }

    public function update_dataset()
    {
        $this->m_dataset->update_dataset();
        $this->session->set_flashdata('update', true);
        redirect('admin/data_set');
    }

    public function delete_dataset($id)
    {
        $this->db->delete('data_set', array('id' => $id));
        $this->session->set_flashdata('delete', true);
        redirect('admin/data_set');
    }

    public function data_latih()
    {
        $var['title'] = "admin-data latih";
        $var['datalatih'] = $this->m_dataset->get_datalatih();
        $var['datalatih2'] = $this->m_dataset->get_datalatih();
        $var['prob_fight'] = $this->m_dataset->probabilitas_fight() / $this->m_dataset->total();
        $var['prob_tgr'] = $this->m_dataset->probabilitas_tgr() / $this->m_dataset->total();
        $var['prob_serhin'] = $this->m_dataset->probabilitas_serhin() / $this->m_dataset->total();
        $var['mean'] = $this->m_dataset->perhitungan();
        $this->load->view('admin/page/data_latih', $var);
    }

    public function add_datalatih()
    {
        $var['title'] = "admin-tambah data latih";
        $this->load->view('admin/page/add_datalatih', $var);
    }

    public function save_datalatih()
    {
        $this->m_dataset->save_datalatih();
        $this->session->set_flashdata('insert', true);
        redirect('admin/data_set/data_latih');
    }

    public function update_datalatih()
    {
        $this->m_dataset->update_datalatih();
        $this->session->set_flashdata('update', true);
        redirect('admin/data_set/data_latih');
    }

    public function delete_datalatih($id)
    {
        $this->db->delete('data_latih', array('id' => $id));
        $this->session->set_flashdata('delete', true);
        redirect('admin/data_set/data_latih');
    }

    public function perhitungan()
    {
        $var['title'] = 'admin-perhitungan';
        $var['datauji'] = $this->m_dataset->get_datauji();
        $this->load->view('admin/page/perhitungan', $var);
    }

    public function data_uji()
    {
        $var['title'] = 'admin-data uji';
        $var['datauji'] = $this->m_dataset->get_datauji();
        $var['datauji2'] = $this->m_dataset->get_datauji();
        $this->load->view('admin/page/data_uji', $var);
    }

    public function add_datauji()
    {
        $var['title'] = 'admin-tambah data uji';
        $this->load->view('admin/page/add_datauji', $var);
    }

    public function save_datauji()
    {
        $this->m_dataset->save_datauji();
        $this->session->set_flashdata('insert', true);
        redirect('admin/data_set/data_uji');
    }

    public function update_datauji()
    {
        $this->m_dataset->update_datauji();
        $this->session->set_flashdata('update', true);
        redirect('admin/data_set/data_uji');
    }

    public function delete_datauji($id)
    {
        $this->db->delete('data_uji', ['id' => $id]);
        $this->session->set_flashdata('delete', true);
        redirect('admin/data_set/data_uji');
    }

    public function proses_perhitungan()
    {
        
    }

    public function get_mean()
    {
        $data = $this->m_dataset->perhitungan();
        var_dump($data);
    }
}