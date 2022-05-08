<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class m_dataset extends CI_Model
{
    private $dataset = 'data_set';
    private $datalatih = 'data_latih';
    private $datauji = 'data_uji';

    public function get_dataset()
    {
        return $this->db->get($this->dataset)->result();
    }

    public function get_datalatih()
    {
        return $this->db->get($this->datalatih)->result();
    }

    public function get_datauji()
    {
        return $this->db->get($this->datauji)->result();
    }

    public function save_dataset()
    {
        $post = $this->input->post();
        $this->nama = $post['nama'];
        $this->speed = $post['speed'];
        $this->power = $post['power'];
        $this->stamina = $post['stamina'];
        $this->agility = $post['agility'];
        $this->kedisiplinan = $post['kedisiplinan'];
        $this->teknik = $post['teknik'];
        $this->kategori = $post['kategori'];
        $this->db->insert($this->dataset, $this);
    }

    public function update_dataset()
    {
        $post = $this->input->post();
        $this->id = $post['id'];
        $this->nama = $post['nama'];
        $this->speed = $post['speed'];
        $this->power = $post['power'];
        $this->stamina = $post['stamina'];
        $this->agility = $post['agility'];
        $this->kedisiplinan = $post['kedisiplinan'];
        $this->teknik = $post['teknik'];
        $this->kategori = $post['kategori'];
        $this->db->update($this->dataset, $this, ['id' => $post['id']]);
    }

    public function save_datalatih()
    {
        $post = $this->input->post();
        $this->nama = $post['nama'];
        $this->speed = $post['speed'];
        $this->power = $post['power'];
        $this->stamina = $post['stamina'];
        $this->agility = $post['agility'];
        $this->kedisiplinan = $post['kedisiplinan'];
        $this->teknik = $post['teknik'];
        $this->kategori = $post['kategori'];
        $this->db->insert($this->datalatih, $this);
    }

    public function update_datalatih()
    {
        $post = $this->input->post();
        $this->id = $post['id'];
        $this->nama = $post['nama'];
        $this->speed = $post['speed'];
        $this->power = $post['power'];
        $this->stamina = $post['stamina'];
        $this->agility = $post['agility'];
        $this->kedisiplinan = $post['kedisiplinan'];
        $this->teknik = $post['teknik'];
        $this->kategori = $post['kategori'];
        $this->db->update($this->datalatih, $this, ['id' => $post['id']]);
    }

    public function save_datauji()
    {
        $post = $this->input->post();
        $this->nama = $post['nama'];
        $this->speed = $post['speed'];
        $this->power = $post['power'];
        $this->stamina = $post['stamina'];
        $this->agility = $post['agility'];
        $this->kedisiplinan = $post['kedisiplinan'];
        $this->teknik = $post['teknik'];
        $this->kategori = $post['kategori'];
        $this->db->insert($this->datauji, $this);
    }

    public function update_datauji()
    {
        $post = $this->input->post();
        $this->id = $post['id'];
        $this->nama = $post['nama'];
        $this->speed = $post['speed'];
        $this->power = $post['power'];
        $this->stamina = $post['stamina'];
        $this->agility = $post['agility'];
        $this->kedisiplinan = $post['kedisiplinan'];
        $this->teknik = $post['teknik'];
        $this->kategori = $post['kategori'];
        $this->db->update($this->datauji, $this, ['id' => $post['id']]);
    }

    public function total()
    {
        return $this->db->count_all_results('data_latih');
    }

    public function probabilitas_fight()
    {
        $this->db->where('kategori', 'Fight');
        return $this->db->count_all_results('data_latih');
    }

    public function probabilitas_tgr()
    {
        $this->db->where('kategori', 'TGR');
        return $this->db->count_all_results('data_latih');
    }

    public function probabilitas_serhin()
    {
        $this->db->where('kategori', 'Serang Hindar');
        return $this->db->count_all_results('data_latih');
    }

    public function perhitungan()
    {

        $jumlahh =  $this->db->count_all_results('data_latih');

        $this->db->where('kategori', 'Fight');
        $prob_fight = $this->db->count_all_results('data_latih');

        $this->db->where('kategori', 'TGR');
        $prob_tgr = $this->db->count_all_results('data_latih');

        $this->db->where('kategori', 'Serang Hindar');
        $prob_serhin = $this->db->count_all_results('data_latih');

        $this->db->where('kategori', 'Fight');
        $jml_fight = $this->db->count_all_results('data_latih');

        $this->db->where('kategori', 'TGR');
        $jml_tgr = $this->db->count_all_results('data_latih');

        $this->db->where('kategori', 'Serang Hindar');
        $jml_serhin = $this->db->count_all_results('data_latih');

        $this->db->select('SUM(speed) as speed_fight');
        $this->db->where('kategori', 'Fight');
        $speed_fight = $this->db->get('data_latih')->result();

        $this->db->select('SUM(power) as power_fight');
        $this->db->where('kategori', 'Fight');
        $power_fight = $this->db->get('data_latih')->result();

        $this->db->select('SUM(stamina) as stamina_fight');
        $this->db->where('kategori', 'Fight');
        $stamina_fight = $this->db->get('data_latih')->result();

        $this->db->select('SUM(agility) as agility_fight');
        $this->db->where('kategori', 'Fight');
        $agility_fight = $this->db->get('data_latih')->result();

        $this->db->select('SUM(kedisiplinan) as kedisiplinan_fight');
        $this->db->where('kategori', 'Fight');
        $kedisiplinan_fight = $this->db->get('data_latih')->result();

        $this->db->select('SUM(teknik) as teknik_fight');
        $this->db->where('kategori', 'Fight');
        $teknik_fight = $this->db->get('data_latih')->result();

        //tgr
        $this->db->select('SUM(speed) as speed_tgr');
        $this->db->where('kategori', 'TGR');
        $speed_tgr = $this->db->get('data_latih')->result();

        $this->db->select('SUM(power) as power_tgr');
        $this->db->where('kategori', 'TGR');
        $power_tgr = $this->db->get('data_latih')->result();

        $this->db->select('SUM(stamina) as stamina_tgr');
        $this->db->where('kategori', 'TGR');
        $stamina_tgr = $this->db->get('data_latih')->result();

        $this->db->select('SUM(agility) as agility_tgr');
        $this->db->where('kategori', 'TGR');
        $agility_tgr = $this->db->get('data_latih')->result();

        $this->db->select('SUM(kedisiplinan) as kedisiplinan_tgr');
        $this->db->where('kategori', 'TGR');
        $kedisiplinan_tgr = $this->db->get('data_latih')->result();

        $this->db->select('SUM(teknik) as teknik_tgr');
        $this->db->where('kategori', 'TGR');
        $teknik_tgr = $this->db->get('data_latih')->result();

        //serhin
        $this->db->select('SUM(speed) as speed_serhin');
        $this->db->where('kategori', 'Serang Hindar');
        $speed_serhin = $this->db->get('data_latih')->result();

        $this->db->select('SUM(power) as power_serhin');
        $this->db->where('kategori', 'Serang Hindar');
        $power_serhin = $this->db->get('data_latih')->result();

        $this->db->select('SUM(stamina) as stamina_serhin');
        $this->db->where('kategori', 'Serang Hindar');
        $stamina_serhin = $this->db->get('data_latih')->result();

        $this->db->select('SUM(agility) as agility_serhin');
        $this->db->where('kategori', 'Serang Hindar');
        $agility_serhin = $this->db->get('data_latih')->result();

        $this->db->select('SUM(kedisiplinan) as kedisiplinan_serhin');
        $this->db->where('kategori', 'Serang Hindar');
        $kedisiplinan_serhin = $this->db->get('data_latih')->result();

        $this->db->select('SUM(teknik) as teknik_serhin');
        $this->db->where('kategori', 'Serang Hindar');
        $teknik_serhin = $this->db->get('data_latih')->result();

        //query fight
        $this->db->select('speed');
        $this->db->where('kategori', 'Fight');
        $rsf = $this->db->get('data_latih')->result();

        $this->db->select('power');
        $this->db->where('kategori', 'Fight');
        $rpf = $this->db->get('data_latih')->result();

        $this->db->select('stamina');
        $this->db->where('kategori', 'Fight');
        $rstf = $this->db->get('data_latih')->result();

        $this->db->select('agility');
        $this->db->where('kategori', 'Fight');
        $raf = $this->db->get('data_latih')->result();

        $this->db->select('kedisiplinan');
        $this->db->where('kategori', 'Fight');
        $rkf = $this->db->get('data_latih')->result();

        $this->db->select('teknik');
        $this->db->where('kategori', 'Fight');
        $rtf = $this->db->get('data_latih')->result();

        //query tgr
        $this->db->select('speed');
        $this->db->where('kategori', 'TGR');
        $rst = $this->db->get('data_latih')->result();

        $this->db->select('power');
        $this->db->where('kategori', 'TGR');
        $rpt = $this->db->get('data_latih')->result();

        $this->db->select('stamina');
        $this->db->where('kategori', 'TGR');
        $rstt = $this->db->get('data_latih')->result();

        $this->db->select('agility');
        $this->db->where('kategori', 'TGR');
        $rat = $this->db->get('data_latih')->result();

        $this->db->select('kedisiplinan');
        $this->db->where('kategori', 'TGR');
        $rkt = $this->db->get('data_latih')->result();

        $this->db->select('teknik');
        $this->db->where('kategori', 'TGR');
        $rtt = $this->db->get('data_latih')->result();

        //query serhin
        $this->db->select('speed');
        $this->db->where('kategori', 'Serang Hindar');
        $rssh = $this->db->get('data_latih')->result();

        $this->db->select('power');
        $this->db->where('kategori', 'Serang Hindar');
        $rpsh = $this->db->get('data_latih')->result();

        $this->db->select('stamina');
        $this->db->where('kategori', 'Serang Hindar');
        $rstsh = $this->db->get('data_latih')->result();

        $this->db->select('agility');
        $this->db->where('kategori', 'Serang Hindar');
        $rash = $this->db->get('data_latih')->result();

        $this->db->select('kedisiplinan');
        $this->db->where('kategori', 'Serang Hindar');
        $rksh = $this->db->get('data_latih')->result();

        $this->db->select('teknik');
        $this->db->where('kategori', 'Serang Hindar');
        $rtsh = $this->db->get('data_latih')->result();

        //perhitungan

        //prob
        $probabilitas_fight = $prob_fight / $jumlahh;
        $probabilitas_tgr = $prob_tgr / $jumlahh;
        $probabilitas_serhin = $prob_serhin / $jumlahh;

        //mean fight
        $mean_speed_fight = $speed_fight[0]->speed_fight / $jml_fight;
        $mean_power_fight = $power_fight[0]->power_fight / $jml_fight;
        $mean_stamina_fight = $stamina_fight[0]->stamina_fight / $jml_fight;
        $mean_agility_fight = $agility_fight[0]->agility_fight / $jml_fight;
        $mean_kedisiplinan_fight = $kedisiplinan_fight[0]->kedisiplinan_fight / $jml_fight;
        $mean_teknik_fight = $teknik_fight[0]->teknik_fight / $jml_fight;

        //mean tgr
        $mean_speed_tgr = $speed_tgr[0]->speed_tgr / $jml_tgr;
        $mean_power_tgr = $power_tgr[0]->power_tgr / $jml_tgr;
        $mean_stamina_tgr = $stamina_tgr[0]->stamina_tgr / $jml_tgr;
        $mean_agility_tgr = $agility_tgr[0]->agility_tgr / $jml_tgr;
        $mean_kedisiplinan_tgr = $kedisiplinan_tgr[0]->kedisiplinan_tgr / $jml_tgr;
        $mean_teknik_tgr = $teknik_tgr[0]->teknik_tgr / $jml_tgr;

        //mean serhin
        $mean_speed_serhin = $speed_serhin[0]->speed_serhin / $jml_serhin;
        $mean_power_serhin = $power_serhin[0]->power_serhin / $jml_serhin;
        $mean_stamina_serhin = $stamina_serhin[0]->stamina_serhin / $jml_serhin;
        $mean_agility_serhin = $agility_serhin[0]->agility_serhin / $jml_serhin;
        $mean_kedisiplinan_serhin = $kedisiplinan_serhin[0]->kedisiplinan_serhin / $jml_serhin;
        $mean_teknik_serhin = $teknik_serhin[0]->teknik_serhin / $jml_serhin;

        //standar deviasi fight
        $hbf = $jml_fight - 1;
        $a_speed = pow($rsf[0]->speed - $mean_speed_fight, 2) + pow($rsf[1]->speed - $mean_speed_fight, 2) + pow($rsf[2]->speed - $mean_speed_fight, 2) + pow($rsf[3]->speed - $mean_speed_fight, 2);
        $sdf_speed = sqrt($a_speed / $hbf);

        $a_power = pow($rpf[0]->power - $mean_power_fight, 2) + pow($rpf[1]->power - $mean_power_fight, 2) + pow($rpf[2]->power - $mean_power_fight, 2) + pow($rpf[3]->power - $mean_power_fight, 2);
        $sdf_power = sqrt($a_power / $hbf);

        $a_stamina = pow($rstf[0]->stamina - $mean_stamina_fight, 2) + pow($rstf[1]->stamina - $mean_stamina_fight, 2) + pow($rstf[2]->stamina - $mean_stamina_fight, 2) + pow($rstf[3]->stamina - $mean_stamina_fight, 2);
        $sdf_stamina = sqrt($a_stamina / $hbf);

        $a_agility = pow($raf[0]->agility - $mean_agility_fight, 2) + pow($raf[1]->agility - $mean_agility_fight, 2) + pow($raf[2]->agility - $mean_agility_fight, 2) + pow($raf[3]->agility - $mean_agility_fight, 2);
        $sdf_agility = sqrt($a_agility / $hbf);

        $a_kedisiplinan = pow($rkf[0]->kedisiplinan - $mean_kedisiplinan_fight, 2) + pow($rkf[1]->kedisiplinan - $mean_kedisiplinan_fight, 2) + pow($rkf[2]->kedisiplinan - $mean_kedisiplinan_fight, 2) + pow($rkf[3]->kedisiplinan - $mean_kedisiplinan_fight, 2);
        $sdf_kedisiplinan = sqrt($a_kedisiplinan / $hbf);

        $a_teknik = pow($rtf[0]->teknik - $mean_teknik_fight, 2) + pow($rtf[1]->teknik - $mean_teknik_fight, 2) + pow($rtf[2]->teknik - $mean_teknik_fight, 2) + pow($rtf[3]->teknik - $mean_teknik_fight, 2);
        $sdf_teknik = sqrt($a_teknik / $hbf);

        //standar deviasi tgr
        $hbt = $jml_tgr - 1;
        $b_speed = pow($rst[0]->speed - $mean_speed_tgr, 2) + pow($rst[1]->speed - $mean_speed_tgr, 2) + pow($rst[2]->speed - $mean_speed_tgr, 2) + pow($rst[3]->speed - $mean_speed_tgr, 2);
        $sdt_speed = sqrt($b_speed / $hbt);

        $b_power = pow($rpt[0]->power - $mean_power_tgr, 2) + pow($rpt[1]->power - $mean_power_tgr, 2) + pow($rpt[2]->power - $mean_power_tgr, 2) + + pow($rpt[3]->power - $mean_power_tgr, 2);
        $sdt_power = sqrt($b_power / $hbt);

        $b_stamina = pow($rstt[0]->stamina - $mean_stamina_tgr, 2) + pow($rstt[1]->stamina - $mean_stamina_tgr, 2) + pow($rstt[2]->stamina - $mean_stamina_tgr, 2) + + pow($rstt[3]->stamina - $mean_stamina_tgr, 2);
        $sdt_stamina = sqrt($b_stamina / $hbt);

        $b_agility = pow($rat[0]->agility - $mean_agility_tgr, 2) + pow($rat[1]->agility - $mean_agility_tgr, 2) + pow($rat[2]->agility - $mean_agility_tgr, 2) + pow($rat[3]->agility - $mean_agility_tgr, 2);
        $sdt_agility = sqrt($b_agility / $hbt);

        $b_kedisiplinan = pow($rkt[0]->kedisiplinan - $mean_kedisiplinan_tgr, 2) + pow($rkt[1]->kedisiplinan - $mean_kedisiplinan_tgr, 2) + pow($rkt[2]->kedisiplinan - $mean_kedisiplinan_tgr, 2) + pow($rkt[3]->kedisiplinan - $mean_kedisiplinan_tgr, 2);
        $sdt_kedisiplinan = sqrt($b_kedisiplinan / $hbt);

        $b_teknik = pow($rtt[0]->teknik - $mean_teknik_tgr, 2) + pow($rtt[1]->teknik - $mean_teknik_tgr, 2) + pow($rtt[2]->teknik - $mean_teknik_tgr, 2) + pow($rtt[3]->teknik - $mean_teknik_tgr, 2);
        $sdt_teknik = sqrt($b_teknik / $hbt);

        //standar deviasi serhin
        $hbsh = $jml_serhin - 1;
        $c_speed = pow($rssh[0]->speed - $mean_speed_serhin, 2) + pow($rssh[1]->speed - $mean_speed_serhin, 2);
        $sdsh_speed = sqrt($c_speed / $hbsh);

        $c_power = pow($rpsh[0]->power - $mean_power_serhin, 2) + pow($rpsh[1]->power - $mean_power_serhin, 2);
        $sdsh_power = sqrt($c_power / $hbsh);

        $c_stamina = pow($rstsh[0]->stamina - $mean_stamina_serhin, 2) + pow($rstsh[1]->stamina - $mean_stamina_serhin, 2);
        $sdsh_stamina = sqrt($c_stamina / $hbsh);

        $c_agility = pow($rash[0]->agility - $mean_agility_serhin, 2) + pow($rash[1]->agility - $mean_agility_serhin, 2);
        $sdsh_agility = sqrt($c_agility / $hbsh);

        $c_kedisiplinan = pow($rksh[0]->kedisiplinan - $mean_kedisiplinan_serhin, 2) + pow($rksh[1]->kedisiplinan - $mean_kedisiplinan_serhin, 2);
        $sdsh_kedisiplinan = sqrt($c_kedisiplinan / $hbsh);

        $c_teknik = pow($rtsh[0]->teknik - $mean_teknik_serhin, 2) + pow($rtsh[1]->teknik - $mean_teknik_serhin, 2);
        $sdsh_teknik = sqrt($c_teknik / $hbsh);


        //query perhitungan gausian
        //fight
        $this->db->select('speed');
        $gnb_s = $this->db->get('data_uji')->result();

        $this->db->select('speed');
        $gnb_ss = $this->db->get('data_uji')->result();

        $this->db->select('speed');
        $gnb_sss = $this->db->get('data_uji')->result();

        $this->db->select('power');
        $gnb_p = $this->db->get('data_uji')->result();
        
        $this->db->select('power');
        $gnb_pp = $this->db->get('data_uji')->result();

        $this->db->select('power');
        $gnb_ppp = $this->db->get('data_uji')->result();

        $this->db->select('stamina');
        $gnb_st = $this->db->get('data_uji')->result();

        $this->db->select('stamina');
        $gnb_stt = $this->db->get('data_uji')->result();

        $this->db->select('stamina');
        $gnb_sttt = $this->db->get('data_uji')->result();

        $this->db->select('agility');
        $gnb_a = $this->db->get('data_uji')->result();

        $this->db->select('agility');
        $gnb_aa = $this->db->get('data_uji')->result();

        $this->db->select('agility');
        $gnb_aaa = $this->db->get('data_uji')->result();

        $this->db->select('kedisiplinan');
        $gnb_k = $this->db->get('data_uji')->result();

        $this->db->select('kedisiplinan');
        $gnb_kk = $this->db->get('data_uji')->result();

        $this->db->select('kedisiplinan');
        $gnb_kkk = $this->db->get('data_uji')->result();

        $this->db->select('teknik');
        $gnb_t = $this->db->get('data_uji')->result();

        $this->db->select('teknik');
        $gnb_tt = $this->db->get('data_uji')->result();

        $this->db->select('teknik');
        $gnb_ttt = $this->db->get('data_uji')->result();

        $this->db->select('nama');
        $namaa = $this->db->get('data_uji')->result();

        //proses perhitungan
        //gausian fight speed
        foreach($gnb_s as $gnb_s) {
            $gnbs_fight[] = 1 / sqrt(2 * 3.14 * $sdf_speed) * exp(-(pow($gnb_s->speed - $mean_speed_fight, 2) / (2 * pow($sdf_speed, 2))));
        }
        //gausian fight power
        foreach($gnb_p as $gnb_p) {
            $gnbp_fight[] = 1 / sqrt(2 * 3.14 * $sdf_power) * exp(-(pow($gnb_p->power - $mean_power_fight, 2) / (2 * pow($sdf_power, 2))));
        }      
        //gausian fight stamina
        foreach($gnb_st as $gnb_st) {
            $gnbst_fight[] = 1 / sqrt(2 * 3.14 * $sdf_stamina) * exp(-(pow($gnb_st->stamina - $mean_stamina_fight, 2) / (2 * pow($sdf_stamina, 2))));
        }
        //gausian fight agility
        foreach($gnb_a as $gnb_a) {
            $gnba_fight[] = 1 / sqrt(2 * 3.14 * $sdf_agility) * exp(-(pow($gnb_a->agility - $mean_agility_fight, 2) / (2 * pow($sdf_agility, 2))));
        }
        //gausian fight kedisiplinan
        foreach($gnb_k as $gnb_k) {
            $gnbk_fight[] = 1 / sqrt(2 * 3.14 * $sdf_kedisiplinan) * exp(-(pow($gnb_k->kedisiplinan - $mean_kedisiplinan_fight, 2) / (2 * pow($sdf_kedisiplinan, 2))));
        }
        //gausian fight teknik
        foreach($gnb_t as $gnb_t) {
            $gnbt_fight[] = 1 / sqrt(2 * 3.14 * $sdf_teknik) * exp(-(pow($gnb_t->teknik - $mean_teknik_fight, 2) / (2 * pow($sdf_teknik, 2))));
        }

        //gausian tgr speed
        foreach($gnb_ss as $gnb_s) {
            $gnbs_tgr[] = 1 / sqrt(2 * 3.14 * $sdt_speed) * exp(-(pow($gnb_s->speed - $mean_speed_tgr, 2) / (2 * pow($sdt_speed, 2))));
        }

        //gausian tgr power
        foreach($gnb_pp as $gnb_p) {
            $gnbp_tgr[] = 1 / sqrt(2 * 3.14 * $sdt_power) * exp(-(pow($gnb_p->power - $mean_power_tgr, 2) / (2 * pow($sdt_power, 2))));
        }

        //gausian tgr stamina
        foreach($gnb_stt as $gnb_st) {
            $gnbst_tgr[] = 1 / sqrt(2 * 3.14 * $sdt_stamina) * exp(-(pow($gnb_st->stamina - $mean_stamina_tgr, 2) / (2 * pow($sdt_stamina, 2))));
        }

        //gausian tgr agility
        foreach($gnb_aa as $gnb_a) {
            $gnba_tgr[] = 1 / sqrt(2 * 3.14 * $sdt_agility) * exp(-(pow($gnb_a->agility - $mean_agility_tgr, 2) / (2 * pow($sdt_agility, 2))));
        }

        //gausian tgr kedisiplinan
        foreach($gnb_kk as $gnb_kk) {
            $gnbk_tgr[] = 1 / sqrt(2 * 3.14 * $sdt_kedisiplinan) * exp(-(pow($gnb_kk->kedisiplinan - $mean_kedisiplinan_tgr, 2) / (2 * pow($sdt_kedisiplinan, 2))));
        }

        //gausian tgr teknik
        foreach($gnb_tt as $gnb_t) {
            $gnbt_tgr[] = 1 / sqrt(2 * 3.14 * $sdt_teknik) * exp(-(pow($gnb_t->teknik - $mean_teknik_tgr, 2) / (2 * pow($sdt_teknik, 2))));
        }

        //gausian serhin speed
        foreach($gnb_sss as $gnb_s) {
            $gnbs_serhin[] = 1 / sqrt(2 * 3.14 * $sdsh_speed) * exp(-(pow($gnb_s->speed - $mean_speed_serhin, 2) / (2 * pow($sdsh_speed, 2))));
        }

        //gausian serhin power
        foreach($gnb_ppp as $gnb_p) {
            $gnbp_serhin[] = 1 / sqrt(2 * 3.14 * $sdsh_power) * exp(-(pow($gnb_p->power - $mean_power_serhin, 2) / (2 * pow($sdsh_power, 2))));
        }

        //gausian serhin stamina
        foreach($gnb_sttt as $gnb_st) {
            $gnbst_serhin[] = 1 / sqrt(2 * 3.14 * $sdsh_stamina) * exp(-(pow($gnb_st->stamina - $mean_stamina_serhin, 2) / (2 * pow($sdsh_stamina, 2))));
        }

        //gausian serhin agility
        foreach($gnb_aaa as $gnb_a) {
            $gnba_serhin[] = 1 / sqrt(2 * 3.14 * $sdsh_agility) * exp(-(pow($gnb_a->agility - $mean_agility_serhin, 2) / (2 * pow($sdsh_agility, 2))));
        }

        //gausian serhin kedisiplinan
        foreach($gnb_kkk as $gnb_k) {
            $gnbk_serhin[] = 1 / sqrt(2 * 3.14 * $sdsh_kedisiplinan) * exp(-(pow($gnb_k->kedisiplinan - $mean_kedisiplinan_serhin, 2) / (2 * pow($sdsh_kedisiplinan, 2))));
        }

        //gausian serhin teknik
        foreach($gnb_ttt as $gnb_t) {
            $gnbt_serhin[] = 1 / sqrt(2 * 3.14 * $sdsh_teknik) * exp(-(pow($gnb_t->teknik - $mean_teknik_serhin, 2) / (2 * pow($sdsh_teknik, 2))));
        }

        //hitung hasil kategori fight
        $hkf_1 = $gnbs_fight[0] * $gnbp_fight[0] * $gnbst_fight[0] * $gnba_fight[0] * $gnbk_fight[0] * $gnbt_fight[0] * $probabilitas_fight;
        $hkf_2 = $gnbs_fight[1] * $gnbp_fight[1] * $gnbst_fight[1] * $gnba_fight[1] * $gnbk_fight[1] * $gnbt_fight[1] * $probabilitas_fight;
        $hkf_3 = $gnbs_fight[2] * $gnbp_fight[2] * $gnbst_fight[2] * $gnba_fight[2] * $gnbk_fight[2] * $gnbt_fight[2] * $probabilitas_fight;
        $hkf_4 = $gnbs_fight[3] * $gnbp_fight[3] * $gnbst_fight[3] * $gnba_fight[3] * $gnbk_fight[3] * $gnbt_fight[3] * $probabilitas_fight;
        $hkf_5 = $gnbs_fight[4] * $gnbp_fight[4] * $gnbst_fight[4] * $gnba_fight[4] * $gnbk_fight[4] * $gnbt_fight[4] * $probabilitas_fight;
        $hkf_6 = $gnbs_fight[5] * $gnbp_fight[5] * $gnbst_fight[5] * $gnba_fight[5] * $gnbk_fight[5] * $gnbt_fight[5] * $probabilitas_fight;
        $hkf_7 = $gnbs_fight[6] * $gnbp_fight[6] * $gnbst_fight[6] * $gnba_fight[6] * $gnbk_fight[6] * $gnbt_fight[6] * $probabilitas_fight;
        $hkf_8 = $gnbs_fight[7] * $gnbp_fight[7] * $gnbst_fight[7] * $gnba_fight[7] * $gnbk_fight[7] * $gnbt_fight[7] * $probabilitas_fight;
        $hkf_9 = $gnbs_fight[8] * $gnbp_fight[8] * $gnbst_fight[8] * $gnba_fight[8] * $gnbk_fight[8] * $gnbt_fight[8] * $probabilitas_fight;
        $hkf_10 = $gnbs_fight[9] * $gnbp_fight[9] * $gnbst_fight[9] * $gnba_fight[9] * $gnbk_fight[9] * $gnbt_fight[9] * $probabilitas_fight;

        //hitung hasil kategori tgr
        $hkt_1 = $gnbs_tgr[0] * $gnbp_tgr[0] * $gnbst_tgr[0] * $gnba_tgr[0] * $gnbk_tgr[0] * $gnbt_tgr[0] * $probabilitas_tgr;
        $hkt_2 = $gnbs_tgr[1] * $gnbp_tgr[1] * $gnbst_tgr[1] * $gnba_tgr[1] * $gnbk_tgr[1] * $gnbt_tgr[1] * $probabilitas_tgr;
        $hkt_3 = $gnbs_tgr[2] * $gnbp_tgr[2] * $gnbst_tgr[2] * $gnba_tgr[2] * $gnbk_tgr[2] * $gnbt_tgr[2] * $probabilitas_tgr;
        $hkt_4 = $gnbs_tgr[3] * $gnbp_tgr[3] * $gnbst_tgr[3] * $gnba_tgr[3] * $gnbk_tgr[3] * $gnbt_tgr[3] * $probabilitas_tgr;
        $hkt_5 = $gnbs_tgr[4] * $gnbp_tgr[4] * $gnbst_tgr[4] * $gnba_tgr[4] * $gnbk_tgr[4] * $gnbt_tgr[4] * $probabilitas_tgr;
        $hkt_6 = $gnbs_tgr[5] * $gnbp_tgr[5] * $gnbst_tgr[5] * $gnba_tgr[5] * $gnbk_tgr[5] * $gnbt_tgr[5] * $probabilitas_tgr;
        $hkt_7 = $gnbs_tgr[6] * $gnbp_tgr[6] * $gnbst_tgr[6] * $gnba_tgr[6] * $gnbk_tgr[6] * $gnbt_tgr[6] * $probabilitas_tgr;
        $hkt_8 = $gnbs_tgr[7] * $gnbp_tgr[7] * $gnbst_tgr[7] * $gnba_tgr[7] * $gnbk_tgr[7] * $gnbt_tgr[7] * $probabilitas_tgr;
        $hkt_9 = $gnbs_tgr[8] * $gnbp_tgr[8] * $gnbst_tgr[8] * $gnba_tgr[8] * $gnbk_tgr[8] * $gnbt_tgr[8] * $probabilitas_tgr;
        $hkt_10 = $gnbs_tgr[9] * $gnbp_tgr[9] * $gnbst_tgr[9] * $gnba_tgr[9] * $gnbk_tgr[9] * $gnbt_tgr[9] * $probabilitas_tgr;

        //hitung hasil kategori serhin
        $hks_1 = $gnbs_serhin[0] * $gnbp_serhin[0] * $gnbst_serhin[0] * $gnba_serhin[0] * $gnbk_serhin[0] * $gnbt_serhin[0] * $probabilitas_serhin;
        $hks_2 = $gnbs_serhin[1] * $gnbp_serhin[1] * $gnbst_serhin[1] * $gnba_serhin[1] * $gnbk_serhin[1] * $gnbt_serhin[1] * $probabilitas_serhin;
        $hks_3 = $gnbs_serhin[2] * $gnbp_serhin[2] * $gnbst_serhin[2] * $gnba_serhin[2] * $gnbk_serhin[2] * $gnbt_serhin[2] * $probabilitas_serhin;
        $hks_4 = $gnbs_serhin[3] * $gnbp_serhin[3] * $gnbst_serhin[3] * $gnba_serhin[3] * $gnbk_serhin[3] * $gnbt_serhin[3] * $probabilitas_serhin;
        $hks_5 = $gnbs_serhin[4] * $gnbp_serhin[4] * $gnbst_serhin[4] * $gnba_serhin[4] * $gnbk_serhin[4] * $gnbt_serhin[4] * $probabilitas_serhin;
        $hks_6 = $gnbs_serhin[5] * $gnbp_serhin[5] * $gnbst_serhin[5] * $gnba_serhin[5] * $gnbk_serhin[5] * $gnbt_serhin[5] * $probabilitas_serhin;
        $hks_7 = $gnbs_serhin[6] * $gnbp_serhin[6] * $gnbst_serhin[6] * $gnba_serhin[6] * $gnbk_serhin[6] * $gnbt_serhin[6] * $probabilitas_serhin;
        $hks_8 = $gnbs_serhin[7] * $gnbp_serhin[7] * $gnbst_serhin[7] * $gnba_serhin[7] * $gnbk_serhin[7] * $gnbt_serhin[7] * $probabilitas_serhin;
        $hks_9 = $gnbs_serhin[8] * $gnbp_serhin[8] * $gnbst_serhin[8] * $gnba_serhin[8] * $gnbk_serhin[8] * $gnbt_serhin[8] * $probabilitas_serhin;
        $hks_10 = $gnbs_serhin[9] * $gnbp_serhin[9] * $gnbst_serhin[9] * $gnba_serhin[9] * $gnbk_serhin[9] * $gnbt_serhin[9] * $probabilitas_serhin;

        //prediksi 1
        $prediksi_1 = [$hkf_1, $hkt_1, $hks_1];
        $hp1 = max($prediksi_1);

        if($hp1 == $hkf_1) {
            $kategori_pertandingan_1 = 'Fighter';
        } elseif($hp1 == $hkt_1) {
            $kategori_pertandingan_1 = 'TGR';
        } elseif($hp1 == $hks_1) {
            $kategori_pertandingan_1 = 'Serang Hindar';
        }

        $prediksi_2 = [$hkf_2, $hkt_2, $hks_2];
        $hp2 = max($prediksi_2);
        if($hp2 == $hkf_2) {
            $kategori_pertandingan_2 = 'Fighter';
        } elseif($hp2 == $hkt_2) {
            $kategori_pertandingan_2 = 'TGR';
        } elseif($hp2 == $hks_2) {
            $kategori_pertandingan_2 = 'Serang Hindar';
        }

        $prediksi_3 = [$hkf_3, $hkt_3, $hks_3];
        $hp3 = max($prediksi_3);
        if($hp3 == $hkf_3) {
            $kategori_pertandingan_3 = 'Fighter';
        } elseif($hp3 == $hkt_3) {
            $kategori_pertandingan_3 = 'TGR';
        } elseif($hp3 == $hks_3) {
            $kategori_pertandingan_3 = 'Serang Hindar';
        }

        $prediksi_4 = [$hkf_4, $hkt_4, $hks_4];
        $hp4 = max($prediksi_4);
        if($hp4 == $hkf_4) {
            $kategori_pertandingan_4 = 'Fighter';
        } elseif($hp4 == $hkt_4) {
            $kategori_pertandingan_4 = 'TGR';
        } elseif($hp4 == $hks_4) {
            $kategori_pertandingan_4 = 'Serang Hindar';
        }

        $prediksi_5 = [$hkf_5, $hkt_5, $hks_5];
        $hp5 = max($prediksi_5);
        if($hp5 == $hkf_5) {
            $kategori_pertandingan_5 = 'Fighter';
        } elseif($hp5 == $hkt_5) {
            $kategori_pertandingan_5 = 'TGR';
        } elseif($hp5 == $hks_5) {
            $kategori_pertandingan_5 = 'Serang Hindar';
        }

        $prediksi_6 = [$hkf_6, $hkt_6, $hks_6];
        $hp6 = max($prediksi_6);
        if($hp6 == $hkf_6) {
            $kategori_pertandingan_6 = 'Fighter';
        } elseif($hp6 == $hkt_6) {
            $kategori_pertandingan_6 = 'TGR';
        } elseif($hp6 == $hks_6) {
            $kategori_pertandingan_6 = 'Serang Hindar';
        }

        $prediksi_7 = [$hkf_7, $hkt_7, $hks_7];
        $hp7 = max($prediksi_7);
        if($hp7 == $hkf_7) {
            $kategori_pertandingan_7 = 'Fighter';
        } elseif($hp7 == $hkt_7) {
            $kategori_pertandingan_7 = 'TGR';
        } elseif($hp7 == $hks_7) {
            $kategori_pertandingan_7 = 'Serang Hindar';
        }

        $prediksi_8 = [$hkf_8, $hkt_8, $hks_8];
        $hp8 = max($prediksi_8);
        if($hp8 == $hkf_8) {
            $kategori_pertandingan_8 = 'Fighter';
        } elseif($hp8 == $hkt_8) {
            $kategori_pertandingan_8 = 'TGR';
        } elseif($hp8 == $hks_8) {
            $kategori_pertandingan_8 = 'Serang Hindar';
        }

        $prediksi_9 = [$hkf_9, $hkt_9, $hks_9];
        $hp9 = max($prediksi_9);
        if($hp9 == $hkf_9) {
            $kategori_pertandingan_9 = 'Fighter';
        } elseif($hp9 == $hkt_9) {
            $kategori_pertandingan_9 = 'TGR';
        } elseif($hp9 == $hks_9) {
            $kategori_pertandingan_9 = 'Serang Hindar';
        }

        $prediksi_10 = [$hkf_10, $hkt_10, $hks_10];
        $hp10 = max($prediksi_10);
        if($hp10 == $hkf_10) {
            $kategori_pertandingan_10 = 'Fighter';
        } elseif($hp10 == $hkt_10) {
            $kategori_pertandingan_10 = 'TGR';
        } elseif($hp10 == $hks_10) {
            $kategori_pertandingan_10 = 'Serang Hindar';
        }

        $data = array(
            'mean_speed_fight' => $mean_speed_fight,
            'mean_power_fight' => $mean_power_fight,
            'mean_stamina_fight' => $mean_stamina_fight,
            'mean_agility_fight' => $mean_agility_fight,
            'mean_kedisiplinan_fight' => $mean_kedisiplinan_fight,
            'mean_teknik_fight' => $mean_teknik_fight,
            'mean_speed_tgr' => $mean_speed_tgr,
            'mean_power_tgr' => $mean_power_tgr,
            'mean_stamina_tgr' => $mean_stamina_tgr,
            'mean_agility_tgr' => $mean_agility_tgr,
            'mean_kedisiplinan_tgr' => $mean_kedisiplinan_tgr,
            'mean_teknik_tgr' => $mean_teknik_tgr,
            'mean_speed_serhin' => $mean_speed_serhin,
            'mean_power_serhin' => $mean_power_serhin,
            'mean_stamina_serhin' => $mean_stamina_serhin,
            'mean_agility_serhin' => $mean_agility_serhin,
            'mean_kedisiplinan_serhin' => $mean_kedisiplinan_serhin,
            'mean_teknik_serhin' => $mean_teknik_serhin,
            'sdf_speed' => $sdf_speed,
            'sdf_power' => $sdf_power,
            'sdf_stamina' => $sdf_stamina,
            'sdf_agility' => $sdf_agility,
            'sdf_kedisiplinan' => $sdf_kedisiplinan,
            'sdf_teknik' => $sdf_teknik,
            'sdt_speed' => $sdt_speed,
            'sdt_power' => $sdt_power,
            'sdt_stamina' => $sdt_stamina,
            'sdt_agility' => $sdt_agility,
            'sdt_kedisiplinan' => $sdt_kedisiplinan,
            'sdt_teknik' => $sdt_teknik,
            'sdsh_speed' => $sdsh_speed,
            'sdsh_power' => $sdsh_power,
            'sdsh_stamina' => $sdsh_stamina,
            'sdsh_agility' => $sdsh_agility,
            'sdsh_kedisiplinan' => $sdsh_kedisiplinan,
            'sdsh_teknik' => $sdsh_teknik,
            'gnbs_fight' => $gnbs_fight,
            'gnbp_fight' => $gnbp_fight,
            'gnbst_fight' => $gnbst_fight,
            'gnba_fight' => $gnba_fight,
            'gnbk_fight' => $gnbk_fight,
            'gnbt_fight' => $gnbt_fight,
            'gnbs_tgr' => $gnbs_tgr,
            'gnbp_tgr' => $gnbp_tgr,
            'gnbst_tgr' => $gnbst_tgr,
            'gnba_tgr' => $gnba_tgr,
            'gnbk_tgr' => $gnbk_tgr,
            'gnbt_tgr' => $gnbt_tgr,
            'gnbs_serhin' => $gnbs_serhin,
            'gnbp_serhin' => $gnbp_serhin,
            'gnbst_serhin' => $gnbst_serhin,
            'gnba_serhin' => $gnba_serhin,
            'gnbk_serhin' => $gnba_serhin,
            'gnbt_serhin' => $gnbt_serhin,
            'namaa' => $namaa,
            'hkf_1' => $hkf_1,
            'hkf_2' => $hkf_2,
            'hkf_3' => $hkf_3,
            'hkf_4' => $hkf_4,
            'hkf_5' => $hkf_5,
            'hkf_6' => $hkf_6,
            'hkf_7' => $hkf_7,
            'hkf_8' => $hkf_8,
            'hkf_9' => $hkf_9,
            'hkf_10' => $hkf_10,
            'hkt_1' => $hkt_1,
            'hkt_2' => $hkt_2,
            'hkt_3' => $hkt_3,
            'hkt_4' => $hkt_4,
            'hkt_5' => $hkt_5,
            'hkt_6' => $hkt_6,
            'hkt_7' => $hkt_7,
            'hkt_8' => $hkt_8,
            'hkt_9' => $hkt_9,
            'hkt_10' => $hkt_10,
            'hks_1' => $hks_1,
            'hks_2' => $hks_2,
            'hks_3' => $hks_3,
            'hks_4' => $hks_4,
            'hks_5' => $hks_5,
            'hks_6' => $hks_6,
            'hks_7' => $hks_7,
            'hks_8' => $hks_8,
            'hks_9' => $hks_9,
            'hks_10' => $hks_10,
            'hp1' => $hp1,
            'hp2' => $hp2,
            'hp3' => $hp3,
            'hp4' => $hp4,
            'hp5' => $hp5,
            'hp6' => $hp6,
            'hp7' => $hp7,
            'hp8' => $hp8,
            'hp9' => $hp9,
            'hp10' => $hp10,
            'kategori_pertandingan_1' => $kategori_pertandingan_1,
            'kategori_pertandingan_2' => $kategori_pertandingan_2,
            'kategori_pertandingan_3' => $kategori_pertandingan_3,
            'kategori_pertandingan_4' => $kategori_pertandingan_4,
            'kategori_pertandingan_5' => $kategori_pertandingan_5,
            'kategori_pertandingan_6' => $kategori_pertandingan_6,
            'kategori_pertandingan_7' => $kategori_pertandingan_7,
            'kategori_pertandingan_8' => $kategori_pertandingan_8,
            'kategori_pertandingan_9' => $kategori_pertandingan_9,
            'kategori_pertandingan_10' => $kategori_pertandingan_10
        );

        return $data;
    }
}
