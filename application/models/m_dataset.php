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
        $this->db->update($this->dataset, $this,['id' => $post['id']]);
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
        $this->db->update($this->datalatih, $this,['id' => $post['id']]);
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
        $this->db->update($this->datauji, $this,['id' => $post['id']]);
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

    public function get_mean()
    {

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
        $hbf = $jml_fight-1;
        $a_speed = pow($rsf[0]->speed - $mean_speed_fight, 2) + pow($rsf[1]->speed - $mean_speed_fight,2) + pow($rsf[2]->speed - $mean_speed_fight,2) + pow($rsf[3]->speed - $mean_speed_fight,2);
        $sdf_speed = sqrt($a_speed / $hbf);

        $a_power = pow($rpf[0]->power - $mean_power_fight, 2) + pow($rpf[1]->power - $mean_power_fight,2) + pow($rpf[2]->power - $mean_power_fight,2) + pow($rpf[3]->power - $mean_power_fight,2);
        $sdf_power = sqrt($a_power / $hbf);

        $a_stamina = pow($rstf[0]->stamina - $mean_stamina_fight, 2) + pow($rstf[1]->stamina - $mean_stamina_fight,2) + pow($rstf[2]->stamina - $mean_stamina_fight,2) + pow($rstf[3]->stamina - $mean_stamina_fight,2);
        $sdf_stamina = sqrt($a_stamina / $hbf);

        $a_agility = pow($raf[0]->agility - $mean_agility_fight, 2) + pow($raf[1]->agility - $mean_agility_fight,2) + pow($raf[2]->agility - $mean_agility_fight,2) + pow($raf[3]->agility - $mean_agility_fight,2);
        $sdf_agility = sqrt($a_agility / $hbf);

        $a_kedisiplinan = pow($rkf[0]->kedisiplinan - $mean_kedisiplinan_fight, 2) + pow($rkf[1]->kedisiplinan - $mean_kedisiplinan_fight,2) + pow($rkf[2]->kedisiplinan - $mean_kedisiplinan_fight,2) + pow($rkf[3]->kedisiplinan - $mean_kedisiplinan_fight,2);
        $sdf_kedisiplinan = sqrt($a_kedisiplinan / $hbf);

        $a_teknik = pow($rtf[0]->teknik - $mean_teknik_fight, 2) + pow($rtf[1]->teknik - $mean_teknik_fight,2) + pow($rtf[2]->teknik - $mean_teknik_fight,2) + pow($rtf[3]->teknik - $mean_teknik_fight,2);
        $sdf_teknik = sqrt($a_teknik / $hbf);

        //standar deviasi tgr
        $hbt = $jml_tgr-1;
        $b_speed = pow($rst[0]->speed - $mean_speed_tgr, 2) + pow($rst[1]->speed - $mean_speed_tgr,2) + pow($rst[2]->speed - $mean_speed_tgr,2);
        $sdt_speed = sqrt($b_speed / $hbt);

        $b_power = pow($rpt[0]->power - $mean_power_tgr, 2) + pow($rpt[1]->power - $mean_power_tgr,2) + pow($rpt[2]->power - $mean_power_tgr,2);
        $sdt_power = sqrt($b_power / $hbt);

        $b_stamina = pow($rstt[0]->stamina - $mean_stamina_tgr, 2) + pow($rstt[1]->stamina - $mean_stamina_tgr,2) + pow($rstt[2]->stamina - $mean_stamina_tgr,2);
        $sdt_stamina = sqrt($b_stamina / $hbt);

        $b_agility = pow($rat[0]->agility - $mean_agility_tgr, 2) + pow($rat[1]->agility - $mean_agility_tgr,2) + pow($rat[2]->agility - $mean_agility_tgr,2);
        $sdt_agility = sqrt($b_agility / $hbt);

        $b_kedisiplinan = pow($rkt[0]->kedisiplinan - $mean_kedisiplinan_tgr, 2) + pow($rkt[1]->kedisiplinan - $mean_kedisiplinan_tgr,2) + pow($rkt[2]->kedisiplinan - $mean_kedisiplinan_tgr,2);
        $sdt_kedisiplinan = sqrt($b_kedisiplinan / $hbt);

        $b_teknik = pow($rtt[0]->teknik - $mean_teknik_tgr, 2) + pow($rtt[1]->teknik - $mean_teknik_tgr,2) + pow($rtt[2]->teknik - $mean_teknik_tgr,2);
        $sdt_teknik = sqrt($b_teknik / $hbt);

        //standar deviasi serhin
        $hbsh = $jml_serhin-1;
        $c_speed = pow($rssh[0]->speed - $mean_speed_serhin, 2) + pow($rssh[1]->speed - $mean_speed_serhin,2) + pow($rssh[2]->speed - $mean_speed_serhin,2);
        $sdsh_speed = sqrt($c_speed / $hbsh);

        $c_power = pow($rpsh[0]->power - $mean_power_serhin, 2) + pow($rpsh[1]->power - $mean_power_serhin,2) + pow($rpsh[2]->power - $mean_power_serhin,2);
        $sdsh_power = sqrt($c_power / $hbsh);

        $c_stamina = pow($rstsh[0]->stamina - $mean_stamina_serhin, 2) + pow($rstsh[1]->stamina - $mean_stamina_serhin,2) + pow($rstsh[2]->stamina - $mean_stamina_serhin,2);
        $sdsh_stamina = sqrt($c_stamina / $hbsh);

        $c_agility = pow($rash[0]->agility - $mean_agility_serhin, 2) + pow($rash[1]->agility - $mean_agility_serhin,2) + pow($rash[2]->agility - $mean_agility_serhin,2);
        $sdsh_agility = sqrt($c_agility / $hbsh);

        $c_kedisiplinan = pow($rksh[0]->kedisiplinan - $mean_kedisiplinan_serhin, 2) + pow($rksh[1]->kedisiplinan - $mean_kedisiplinan_serhin,2) + pow($rksh[2]->kedisiplinan - $mean_kedisiplinan_serhin,2);
        $sdsh_kedisiplinan = sqrt($c_kedisiplinan / $hbsh);

        $c_teknik = pow($rtsh[0]->teknik - $mean_teknik_serhin, 2) + pow($rtsh[1]->teknik - $mean_teknik_serhin,2) + pow($rtsh[2]->teknik - $mean_teknik_serhin,2);
        $sdsh_teknik = sqrt($c_teknik / $hbsh);


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
            'sdsh_teknik' => $sdsh_teknik
        );

        return $data;
    }

}