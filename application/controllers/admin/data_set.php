<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_set extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->model('M_dataset', 'm_dataset');
        if ($this->session->userdata('status') != "2") {
			echo "<script>
                alert('Anda harus login terlebih dahulu');
                window.location.href = '" . base_url('auth') . "';
            </script>"; //Url Logi
		}
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

    public function perhitungan2()
    {
        $var['title'] = 'admin-perhitungan';
        $var['perhitungan'] = $this->m_dataset->perhitungan();
        $this->load->view('admin/page/perhitungan2', $var);
    }

    public function hasil_prediksi()
    {
        $var['title'] = 'admin-hasil_prediksi';
        $var['hasil'] = $this->m_dataset->perhitungan();
        $this->load->view('admin/page/hasil_prediksi', $var);
    }

    public function konvert_dataset($id)
    {
        $var['nilai'] = $this->db->get_where('data_set', ['id' => $id])->row();
		$var['title'] = 'Konversi nilai data set';
        $this->load->view('admin/page/konvert_dataset', $var);
    }

    public function konversi()
    {
        $var['title'] = 'admin-list konversi dataset';
        $var['konvert'] = $this->m_dataset->get_konversi();
        $this->load->view('admin/page/list_konvert', $var);
    }

    public function save_konversi()
    {
        $this->m_dataset->save_konversi();
        $this->session->set_flashdata('insert', true);
        redirect('admin/data_set/konversi');
    }

    public function delete_konversi($id)
    {
        $this->db->delete('konversi_dataset', ['id' => $id]);
        $this->session->set_flashdata('delete', true);
        redirect('admin/data_set/konversi');
    }

    public function perhitungan_nb()
    {
        $var['title'] = 'admin-perhitungan nb';
        $var['datauji'] = $this->m_dataset->get_datauji();
        $this->load->view('admin/page/list_perhitungan', $var);
    }

    public function konvert_nb($id)
    {
        $var['nilai'] = $this->db->get_where('data_uji', ['id' => $id])->row();
		$var['title'] = 'Konversi nilai data set';
        $this->load->view('admin/page/konversi_nb', $var);
    }

    public function data_uji()
    {
        $var['title'] = 'admin-data uji';
        $var['datauji'] = $this->m_dataset->get_datauji();
        $var['datauji2'] = $this->m_dataset->get_datauji();
        // $var['perhitungan'] = $this->m_dataset->perhitungan();
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

    public function perhitungan_naivebayes()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'speed' => $this->input->post('speed'),
            'power' => $this->input->post('power'),
            'stamina' => $this->input->post('stamina'),
            'agility' => $this->input->post('agility'),
            'kedisiplinan' => $this->input->post('kedisiplinan'),
            'teknik' => $this->input->post('teknik')
        );

        //data speed
        $speed_fight = $this->m_dataset->perhitungan_nb('speed', $data["speed"], 'Fight')->hasil_bagi;
        $speed_tgr = $this->m_dataset->perhitungan_nb('speed', $data["speed"], 'TGR')->hasil_bagi;
        $speed_serhin = $this->m_dataset->perhitungan_nb('speed', $data["speed"], 'Serang Hindar')->hasil_bagi;

        //data power
        $power_fight = $this->m_dataset->perhitungan_nb('power', $data["power"], 'Fight')->hasil_bagi;
        $power_tgr = $this->m_dataset->perhitungan_nb('power', $data["power"], 'TGR')->hasil_bagi;
        $power_serhin = $this->m_dataset->perhitungan_nb('power', $data["power"], 'Serang Hindar')->hasil_bagi;

        //data stamina
        $stamina_fight = $this->m_dataset->perhitungan_nb('stamina', $data["stamina"], 'Fight')->hasil_bagi;
        $stamina_tgr = $this->m_dataset->perhitungan_nb('stamina', $data["stamina"], 'TGR')->hasil_bagi;
        $stamina_serhin = $this->m_dataset->perhitungan_nb('stamina', $data["stamina"], 'Serang Hindar')->hasil_bagi;

        //data agility
        $agility_fight = $this->m_dataset->perhitungan_nb('agility', $data["agility"], 'Fight')->hasil_bagi;
        $agility_tgr = $this->m_dataset->perhitungan_nb('agility', $data["agility"], 'TGR')->hasil_bagi;
        $agility_serhin = $this->m_dataset->perhitungan_nb('agility', $data["agility"], 'Serang Hindar')->hasil_bagi;

        //data kedisiplinan
        $kedisiplinan_fight = $this->m_dataset->perhitungan_nb('kedisiplinan', $data["kedisiplinan"], 'Fight')->hasil_bagi;
        $kedisiplinan_tgr = $this->m_dataset->perhitungan_nb('kedisiplinan', $data["kedisiplinan"], 'TGR')->hasil_bagi;
        $kedisiplinan_serhin = $this->m_dataset->perhitungan_nb('kedisiplinan', $data["kedisiplinan"], 'Serang Hindar')->hasil_bagi;

        //data teknik
        $teknik_fight = $this->m_dataset->perhitungan_nb('teknik', $data["teknik"], 'Fight')->hasil_bagi;
        $teknik_tgr = $this->m_dataset->perhitungan_nb('teknik', $data["teknik"], 'TGR')->hasil_bagi;
        $teknik_serhin = $this->m_dataset->perhitungan_nb('teknik', $data["teknik"], 'Serang Hindar')->hasil_bagi;

        //pengelompokan
        $fight = $speed_fight * $power_fight * $stamina_fight * $agility_fight * $kedisiplinan_fight * $teknik_fight;
        $tgr = $speed_tgr * $power_tgr * $stamina_tgr * $agility_tgr * $kedisiplinan_tgr * $teknik_tgr;
        $serang_hindar = $speed_serhin * $power_serhin * $stamina_serhin * $agility_serhin * $kedisiplinan_serhin * $teknik_serhin;

        //probabilitas
        $probabilitas_fight =  $this->db->query("SELECT (SELECT COUNT(id) as total FROM data_set  WHERE kategori='Fight') / COUNT(id) as hasil FROM data_set")->row();
        $probabilitas_tgr =  $this->db->query("SELECT (SELECT COUNT(id) as total FROM data_set  WHERE kategori='TGR') / COUNT(id) as hasil FROM data_set")->row();
        $probabilitas_serhin =  $this->db->query("SELECT (SELECT COUNT(id) as total FROM data_set  WHERE kategori='Serang Hindar') / COUNT(id) as hasil FROM data_set")->row();

        //hitung hasil
        $hasil_fight = $fight * $probabilitas_fight->hasil;
        $hasil_tgr = $tgr * $probabilitas_tgr->hasil;
        $hasil_serhin = $serang_hindar * $probabilitas_serhin->hasil;

        $prediksi = [$hasil_fight, $hasil_tgr, $hasil_serhin];
        $hasil_prediksi = max($prediksi);
        if ($hasil_prediksi == $hasil_fight) {
            $keputusan = 'Fight';
        } elseif ($hasil_prediksi == $hasil_tgr) {
            $keputusan = 'tgr';
        } elseif ($hasil_prediksi == $hasil_serhin) {
            $keputusan = 'Serang Hindar';
        }

        // $data_fight = [$speed_fight, $power_fight, $stamina_fight, $agility_fight, $kedisiplinan_fight, $teknik_fight];
        // var_dump($data_fight);

        $var['title'] = 'admin-Hasil Naive Bayes';
        $var['nama'] = $data["nama"];
        $var['fight'] = $fight;
        $var['tgr'] = $tgr;
        $var['serhin'] = $serang_hindar;
        $var['prob_fight'] = $probabilitas_fight->hasil;
        $var['prob_tgr'] = $probabilitas_tgr->hasil;
        $var['prob_serhin'] = $probabilitas_serhin->hasil;
        $var['hasil_fight'] = $hasil_fight;
        $var['hasil_tgr'] = $hasil_tgr;
        $var['hasil_serhin'] = $hasil_serhin;
        $var['keputusan'] = $keputusan;
        $this->load->view('admin/page/hasil_nb', $var);
    }

    public function get_mean()
    {
        $data = $this->m_dataset->perhitungan2();
        var_dump($data);
    }
}