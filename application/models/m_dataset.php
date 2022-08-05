<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_dataset extends CI_Model
{
    private $dataset = 'data_set';
    private $datalatih = 'data_latih';
    private $datauji = 'data_uji';
    private $konversi = 'konversi_dataset';

    public function get_dataset()
    {
        return $this->db->get($this->dataset)->result();
    }

    public function get_konversi()
    {
        return $this->db->get($this->konversi)->result();
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

    public function save_konversi()
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
        $this->db->insert($this->konversi, $this);
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
        // $mean_power_serhin2 = 59.75;
        $mean_stamina_serhin = $stamina_serhin[0]->stamina_serhin / $jml_serhin;
        $mean_agility_serhin = $agility_serhin[0]->agility_serhin / $jml_serhin;
        $mean_kedisiplinan_serhin = $kedisiplinan_serhin[0]->kedisiplinan_serhin / $jml_serhin;
        // $mean_kedisiplinan_serhin2 = 65.75;
        $mean_teknik_serhin = $teknik_serhin[0]->teknik_serhin / $jml_serhin;
        // $mean_teknik_serhin2 = 64.75;

        //standar deviasi fight
        $hbf = $jml_fight - 1;
        foreach ($rsf as $rsf) {
            $data_rsf[] = pow($rsf->speed - $mean_speed_fight, 2);
            $a_speed = 0;
            foreach ($data_rsf as $drsf) {
                $a_speed += $drsf;
            }
        }
        $sdf_speed = sqrt($a_speed / $hbf);

        foreach ($rpf as $rpf) {
            $data_rpf[] = pow($rpf->power - $mean_power_fight, 2);
            $a_power = 0;
            foreach ($data_rpf as $drpf) {
                $a_power += $drpf;
            }
        }
        $sdf_power = sqrt($a_power / $hbf);

        foreach ($rstf as $rstf) {
            $data_rstf[] = pow($rstf->stamina - $mean_stamina_fight, 2);
            $a_stamina = 0;
            foreach ($data_rstf as $drstf) {
                $a_stamina += $drstf;
            }
        }
        $sdf_stamina = sqrt($a_stamina / $hbf);

        foreach ($raf as $raf) {
            $data_raf[] = pow($raf->agility - $mean_agility_fight, 2);
            $a_agility = 0;
            foreach ($data_raf as $draf) {
                $a_agility += $draf;
            }
        }
        $sdf_agility = sqrt($a_agility / $hbf);

        foreach ($rkf as $rkf) {
            $data_rkf[] = pow($rkf->kedisiplinan - $mean_kedisiplinan_fight, 2);
            $a_kedisiplinan = 0;
            foreach ($data_rkf as $drkf) {
                $a_kedisiplinan += $drkf;
            }
        }
        $sdf_kedisiplinan = sqrt($a_kedisiplinan / $hbf);

        foreach ($rtf as $rtf) {
            $data_rtf[] = pow($rtf->teknik - $mean_teknik_fight, 2);
            $a_teknik = 0;
            foreach ($data_rtf as $drtf) {
                $a_teknik += $drtf;
            }
        }
        $sdf_teknik = sqrt($a_teknik / $hbf);

        //standar deviasi tgr
        $hbt = $jml_tgr - 1;

        foreach ($rst as $rst) {
            $data_rst[] = pow($rst->speed - $mean_speed_tgr, 2);
            $b_speed = 0;
            foreach ($data_rst as $drst) {
                $b_speed += $drst;
            }
        }
        $sdt_speed = sqrt($b_speed / $hbt);

        foreach ($rpt as $rpt) {
            $data_rpt[] = pow($rpt->power - $mean_power_tgr, 2);
            $b_power = 0;
            foreach ($data_rpt as $drpt) {
                $b_power += $drpt;
            }
        }
        $sdt_power = sqrt($b_power / $hbt);

        foreach ($rstt as $rstt) {
            $data_rstt[] =  pow($rstt->stamina - $mean_stamina_tgr, 2);
            $b_stamina = 0;
            foreach ($data_rstt as $drstt) {
                $b_stamina += $drstt;
            }
        }
        $sdt_stamina = sqrt($b_stamina / $hbt);

        foreach ($rat as $rat) {
            $data_rat[] =  pow($rat->agility - $mean_agility_tgr, 2);
            $b_agility = 0;
            foreach ($data_rat as $drat) {
                $b_agility += $drat;
            }
        }
        $sdt_agility = sqrt($b_agility / $hbt);

        foreach ($rkt as $rkt) {
            $data_rkt[] =  pow($rkt->kedisiplinan - $mean_kedisiplinan_tgr, 2);
            $b_kedisiplinan = 0;
            foreach ($data_rkt as $drkt) {
                $b_kedisiplinan += $drkt;
            }
        }
        $sdt_kedisiplinan = sqrt($b_kedisiplinan / $hbt);

        foreach ($rtt as $rtt) {
            $data_rtt[] =  pow($rtt->teknik - $mean_teknik_tgr, 2);
            $b_teknik = 0;
            foreach ($data_rtt as $drtt) {
                $b_teknik += $drtt;
            }
        }
        $sdt_teknik = sqrt($b_teknik / $hbt);

        //standar deviasi serhin
        $hbsh = $jml_serhin - 1;

        foreach ($rssh as $rssh) {
            $data_rssh[] = pow($rssh->speed - $mean_speed_serhin, 2);
            $c_speed = 0;
            foreach ($data_rssh as $drssh) {
                $c_speed += $drssh;
            }
        }
        $sdsh_speed = sqrt($c_speed / $hbsh);

        foreach ($rpsh as $rpsh) {
            $data_rpsh[] = pow($rpsh->power - $mean_power_serhin, 2);
            $c_power = 0;
            foreach ($data_rpsh as $drpsh) {
                $c_power += $drpsh;
            }
        }
        $sdsh_power = sqrt($c_power / $hbsh);

        foreach ($rstsh as $rstsh) {
            $data_rstsh[] = pow($rstsh->stamina - $mean_stamina_serhin, 2);
            $c_stamina = 0;
            foreach ($data_rstsh as $drstsh) {
                $c_stamina += $drstsh;
            }
        }
        $sdsh_stamina = sqrt($c_stamina / $hbsh);

        foreach ($rash as $rash) {
            $data_rash[] = pow($rash->agility - $mean_agility_serhin, 2);
            $c_agility = 0;
            foreach ($data_rash as $drash) {
                $c_agility += $drash;
            }
        }
        $sdsh_agility = sqrt($c_agility / $hbsh);

        foreach ($rksh as $rksh) {
            $data_rksh[] = pow($rksh->kedisiplinan - $mean_kedisiplinan_serhin, 2);
            $c_kedisiplinan = 0;
            foreach ($data_rksh as $drksh) {
                $c_kedisiplinan += $drksh;
            }
        }
        $sdsh_kedisiplinan = sqrt($c_kedisiplinan / $hbsh);

        foreach ($rtsh as $rtsh) {
            $data_rtsh[] = pow($rtsh->teknik - $mean_teknik_serhin, 2);
            $c_teknik = 0;
            foreach ($data_rtsh as $drtsh) {
                $c_teknik += $drtsh;
            }
        }
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
        foreach ($gnb_s as $gnb_s) {
            $gnbs_fight[] = 1 / sqrt(2 * 3.14 * $sdf_speed) * exp(- (pow($gnb_s->speed - $mean_speed_fight, 2) / (2 * pow($sdf_speed, 2))));
        }
        //gausian fight power
        foreach ($gnb_p as $gnb_p) {
            $gnbp_fight[] = 1 / sqrt(2 * 3.14 * $sdf_power) * exp(- (pow($gnb_p->power - $mean_power_fight, 2) / (2 * pow($sdf_power, 2))));
        }
        //gausian fight stamina
        foreach ($gnb_st as $gnb_st) {
            $gnbst_fight[] = 1 / sqrt(2 * 3.14 * $sdf_stamina) * exp(- (pow($gnb_st->stamina - $mean_stamina_fight, 2) / (2 * pow($sdf_stamina, 2))));
        }
        //gausian fight agility
        foreach ($gnb_a as $gnb_a) {
            $gnba_fight[] = 1 / sqrt(2 * 3.14 * $sdf_agility) * exp(- (pow($gnb_a->agility - $mean_agility_fight, 2) / (2 * pow($sdf_agility, 2))));
        }
        //gausian fight kedisiplinan
        foreach ($gnb_k as $gnb_k) {
            $gnbk_fight[] = 1 / sqrt(2 * 3.14 * $sdf_kedisiplinan) * exp(- (pow($gnb_k->kedisiplinan - $mean_kedisiplinan_fight, 2) / (2 * pow($sdf_kedisiplinan, 2))));
        }
        //gausian fight teknik
        foreach ($gnb_t as $gnb_t) {
            $gnbt_fight[] = 1 / sqrt(2 * 3.14 * $sdf_teknik) * exp(- (pow($gnb_t->teknik - $mean_teknik_fight, 2) / (2 * pow($sdf_teknik, 2))));
        }

        //gausian tgr speed
        foreach ($gnb_ss as $gnb_s) {
            $gnbs_tgr[] = 1 / sqrt(2 * 3.14 * $sdt_speed) * exp(- (pow($gnb_s->speed - $mean_speed_tgr, 2) / (2 * pow($sdt_speed, 2))));
        }

        //gausian tgr power
        foreach ($gnb_pp as $gnb_p) {
            $gnbp_tgr[] = 1 / sqrt(2 * 3.14 * $sdt_power) * exp(- (pow($gnb_p->power - $mean_power_tgr, 2) / (2 * pow($sdt_power, 2))));
        }

        //gausian tgr stamina
        foreach ($gnb_stt as $gnb_st) {
            $gnbst_tgr[] = 1 / sqrt(2 * 3.14 * $sdt_stamina) * exp(- (pow($gnb_st->stamina - $mean_stamina_tgr, 2) / (2 * pow($sdt_stamina, 2))));
        }

        //gausian tgr agility
        foreach ($gnb_aa as $gnb_a) {
            $gnba_tgr[] = 1 / sqrt(2 * 3.14 * $sdt_agility) * exp(- (pow($gnb_a->agility - $mean_agility_tgr, 2) / (2 * pow($sdt_agility, 2))));
        }

        //gausian tgr kedisiplinan
        foreach ($gnb_kk as $gnb_kk) {
            $gnbk_tgr[] = 1 / sqrt(2 * 3.14 * $sdt_kedisiplinan) * exp(- (pow($gnb_kk->kedisiplinan - $mean_kedisiplinan_tgr, 2) / (2 * pow($sdt_kedisiplinan, 2))));
        }

        //gausian tgr teknik
        foreach ($gnb_tt as $gnb_t) {
            $gnbt_tgr[] = 1 / sqrt(2 * 3.14 * $sdt_teknik) * exp(- (pow($gnb_t->teknik - $mean_teknik_tgr, 2) / (2 * pow($sdt_teknik, 2))));
        }

        //gausian serhin speed
        foreach ($gnb_sss as $gnb_sss) {
            $gnbs_serhin[] = 1 / sqrt(2 * 3.14 * $sdsh_speed) * exp(- (pow($gnb_sss->speed - $mean_speed_serhin, 2) / (2 * pow($sdsh_speed, 2))));
        }

        //gausian serhin power
        foreach ($gnb_ppp as $gnb_ppp) {
            $gnbp_serhin[] = 1 / sqrt(2 * 3.14 * $sdsh_power) * exp(- (pow($gnb_ppp->power - $mean_power_serhin, 2) / (2 * pow($sdsh_power, 2))));
        }

        //gausian serhin stamina
        foreach ($gnb_sttt as $gnb_sttt) {
            $gnbst_serhin[] = 1 / sqrt(2 * 3.14 * $sdsh_stamina) * exp(- (pow($gnb_sttt->stamina - $mean_stamina_serhin, 2) / (2 * pow($sdsh_stamina, 2))));
        }

        //gausian serhin agility
        foreach ($gnb_aaa as $gnb_aaa) {
            $gnba_serhin[] = 1 / sqrt(2 * 3.14 * $sdsh_agility) * exp(- (pow($gnb_aaa->agility - $mean_agility_serhin, 2) / (2 * pow($sdsh_agility, 2))));
        }

        //gausian serhin kedisiplinan
        foreach ($gnb_kkk as $gnb_kkk) {
            $gnbk_serhin[] = 1 / sqrt(2 * 3.14 * $sdsh_kedisiplinan) * exp(- (pow($gnb_kkk->kedisiplinan - $mean_kedisiplinan_serhin, 2) / (2 * pow($sdsh_kedisiplinan, 2))));
        }

        //gausian serhin teknik
        foreach ($gnb_ttt as $gnb_ttt) {
            $gnbt_serhin[] = 1 / sqrt(2 * 3.14 * $sdsh_teknik) * exp(- (pow($gnb_ttt->teknik - $mean_teknik_serhin, 2) / (2 * pow($sdsh_teknik, 2))));
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
        $hkf_11 = $gnbs_fight[10] * $gnbp_fight[10] * $gnbst_fight[10] * $gnba_fight[10] * $gnbk_fight[10] * $gnbt_fight[10] * $probabilitas_fight;
        $hkf_12 = $gnbs_fight[11] * $gnbp_fight[11] * $gnbst_fight[11] * $gnba_fight[11] * $gnbk_fight[11] * $gnbt_fight[11] * $probabilitas_fight;
        $hkf_13 = $gnbs_fight[12] * $gnbp_fight[12] * $gnbst_fight[12] * $gnba_fight[12] * $gnbk_fight[12] * $gnbt_fight[12] * $probabilitas_fight;
        $hkf_14 = $gnbs_fight[13] * $gnbp_fight[13] * $gnbst_fight[13] * $gnba_fight[13] * $gnbk_fight[13] * $gnbt_fight[13] * $probabilitas_fight;

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
        $hkt_11 = $gnbs_tgr[10] * $gnbp_tgr[10] * $gnbst_tgr[10] * $gnba_tgr[10] * $gnbk_tgr[10] * $gnbt_tgr[10] * $probabilitas_tgr;
        $hkt_12 = $gnbs_tgr[11] * $gnbp_tgr[11] * $gnbst_tgr[11] * $gnba_tgr[11] * $gnbk_tgr[11] * $gnbt_tgr[11] * $probabilitas_tgr;
        $hkt_13 = $gnbs_tgr[12] * $gnbp_tgr[12] * $gnbst_tgr[12] * $gnba_tgr[12] * $gnbk_tgr[12] * $gnbt_tgr[12] * $probabilitas_tgr;
        $hkt_14 = $gnbs_tgr[13] * $gnbp_tgr[13] * $gnbst_tgr[13] * $gnba_tgr[13] * $gnbk_tgr[13] * $gnbt_tgr[13] * $probabilitas_tgr;

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
        $hks_11 = $gnbs_serhin[10] * $gnbp_serhin[10] * $gnbst_serhin[10] * $gnba_serhin[10] * $gnbk_serhin[10] * $gnbt_serhin[10] * $probabilitas_serhin;
        $hks_12 = $gnbs_serhin[11] * $gnbp_serhin[11] * $gnbst_serhin[11] * $gnba_serhin[11] * $gnbk_serhin[11] * $gnbt_serhin[11] * $probabilitas_serhin;
        $hks_13 = $gnbs_serhin[10] * $gnbp_serhin[10] * $gnbst_serhin[10] * $gnba_serhin[10] * $gnbk_serhin[10] * $gnbt_serhin[10] * $probabilitas_serhin;
        $hks_14 = $gnbs_serhin[11] * $gnbp_serhin[11] * $gnbst_serhin[11] * $gnba_serhin[11] * $gnbk_serhin[11] * $gnbt_serhin[11] * $probabilitas_serhin;

        //prediksi 1
        $prediksi_1 = [$hkf_1, $hkt_1, $hks_1];
        $hp1 = max($prediksi_1);

        if ($hp1 == $hkf_1) {
            $kategori_pertandingan_1 = 'Fight';
        } elseif ($hp1 == $hkt_1) {
            $kategori_pertandingan_1 = 'TGR';
        } elseif ($hp1 == $hks_1) {
            $kategori_pertandingan_1 = 'Serang Hindar';
        }

        $prediksi_2 = [$hkf_2, $hkt_2, $hks_2];
        $hp2 = max($prediksi_2);
        if ($hp2 == $hkf_2) {
            $kategori_pertandingan_2 = 'Fight';
        } elseif ($hp2 == $hkt_2) {
            $kategori_pertandingan_2 = 'TGR';
        } elseif ($hp2 == $hks_2) {
            $kategori_pertandingan_2 = 'Serang Hindar';
        }

        $prediksi_3 = [$hkf_3, $hkt_3, $hks_3];
        $hp3 = max($prediksi_3);
        if ($hp3 == $hkf_3) {
            $kategori_pertandingan_3 = 'Fight';
        } elseif ($hp3 == $hkt_3) {
            $kategori_pertandingan_3 = 'TGR';
        } elseif ($hp3 == $hks_3) {
            $kategori_pertandingan_3 = 'Serang Hindar';
        }

        $prediksi_4 = [$hkf_4, $hkt_4, $hks_4];
        $hp4 = max($prediksi_4);
        if ($hp4 == $hkf_4) {
            $kategori_pertandingan_4 = 'Fight';
        } elseif ($hp4 == $hkt_4) {
            $kategori_pertandingan_4 = 'TGR';
        } elseif ($hp4 == $hks_4) {
            $kategori_pertandingan_4 = 'Serang Hindar';
        }

        $prediksi_5 = [$hkf_5, $hkt_5, $hks_5];
        $hp5 = max($prediksi_5);
        if ($hp5 == $hkf_5) {
            $kategori_pertandingan_5 = 'Fight';
        } elseif ($hp5 == $hkt_5) {
            $kategori_pertandingan_5 = 'TGR';
        } elseif ($hp5 == $hks_5) {
            $kategori_pertandingan_5 = 'Serang Hindar';
        }

        $prediksi_6 = [$hkf_6, $hkt_6, $hks_6];
        $hp6 = max($prediksi_6);
        if ($hp6 == $hkf_6) {
            $kategori_pertandingan_6 = 'Fight';
        } elseif ($hp6 == $hkt_6) {
            $kategori_pertandingan_6 = 'TGR';
        } elseif ($hp6 == $hks_6) {
            $kategori_pertandingan_6 = 'Serang Hindar';
        }

        $prediksi_7 = [$hkf_7, $hkt_7, $hks_7];
        $hp7 = max($prediksi_7);
        if ($hp7 == $hkf_7) {
            $kategori_pertandingan_7 = 'Fight';
        } elseif ($hp7 == $hkt_7) {
            $kategori_pertandingan_7 = 'TGR';
        } elseif ($hp7 == $hks_7) {
            $kategori_pertandingan_7 = 'Serang Hindar';
        }

        $prediksi_8 = [$hkf_8, $hkt_8, $hks_8];
        $hp8 = max($prediksi_8);
        if ($hp8 == $hkf_8) {
            $kategori_pertandingan_8 = 'Fight';
        } elseif ($hp8 == $hkt_8) {
            $kategori_pertandingan_8 = 'TGR';
        } elseif ($hp8 == $hks_8) {
            $kategori_pertandingan_8 = 'Serang Hindar';
        }

        $prediksi_9 = [$hkf_9, $hkt_9, $hks_9];
        $hp9 = max($prediksi_9);
        if ($hp9 == $hkf_9) {
            $kategori_pertandingan_9 = 'Fight';
        } elseif ($hp9 == $hkt_9) {
            $kategori_pertandingan_9 = 'TGR';
        } elseif ($hp9 == $hks_9) {
            $kategori_pertandingan_9 = 'Serang Hindar';
        }

        $prediksi_10 = [$hkf_10, $hkt_10, $hks_10];
        $hp10 = max($prediksi_10);
        if ($hp10 == $hkf_10) {
            $kategori_pertandingan_10 = 'Fight';
        } elseif ($hp10 == $hkt_10) {
            $kategori_pertandingan_10 = 'TGR';
        } elseif ($hp10 == $hks_10) {
            $kategori_pertandingan_10 = 'Serang Hindar';
        }

        $prediksi_10 = [$hkf_10, $hkt_10, $hks_10];
        $hp10 = max($prediksi_10);
        if ($hp10 == $hkf_10) {
            $kategori_pertandingan_10 = 'Fight';
        } elseif ($hp10 == $hkt_10) {
            $kategori_pertandingan_10 = 'TGR';
        } elseif ($hp10 == $hks_10) {
            $kategori_pertandingan_10 = 'Serang Hindar';
        }

        $prediksi_11 = [$hkf_11, $hkt_11, $hks_11];
        $hp11 = max($prediksi_11);
        if ($hp11 == $hkf_11) {
            $kategori_pertandingan_11 = 'Fight';
        } elseif ($hp11 == $hkt_11) {
            $kategori_pertandingan_11 = 'TGR';
        } elseif ($hp11 == $hks_11) {
            $kategori_pertandingan_11 = 'Serang Hindar';
        }

        $prediksi_12 = [$hkf_12, $hkt_12, $hks_12];
        $hp12 = max($prediksi_12);
        if ($hp12 == $hkf_12) {
            $kategori_pertandingan_12 = 'Fight';
        } elseif ($hp12 == $hkt_12) {
            $kategori_pertandingan_12 = 'TGR';
        } elseif ($hp12 == $hks_12) {
            $kategori_pertandingan_12 = 'Serang Hindar';
        }

        $prediksi_13 = [$hkf_13, $hkt_13, $hks_13];
        $hp13 = max($prediksi_13);
        if ($hp13 == $hkf_13) {
            $kategori_pertandingan_13 = 'Fight';
        } elseif ($hp13 == $hkt_13) {
            $kategori_pertandingan_13 = 'TGR';
        } elseif ($hp13 == $hks_13) {
            $kategori_pertandingan_13 = 'Serang Hindar';
        }

        $prediksi_14 = [$hkf_14, $hkt_14, $hks_14];
        $hp14 = max($prediksi_14);
        if ($hp14 == $hkf_14) {
            $kategori_pertandingan_14 = 'Fight';
        } elseif ($hp14 == $hkt_14) {
            $kategori_pertandingan_14 = 'TGR';
        } elseif ($hp14 == $hks_14) {
            $kategori_pertandingan_14 = 'Serang Hindar';
        }


        //query kategori
        $this->db->select('kategori');
        $kategorii = $this->db->get('data_uji')->result();

        $jumlahh2 =  $this->db->count_all_results('data_uji');


        //akurasi
        if ($kategori_pertandingan_1 == $kategorii[0]->kategori) {
            $akurasi1 = '1';
        } else {
            $akurasi1 = '0';
        }

        if ($kategori_pertandingan_2 == $kategorii[1]->kategori) {
            $akurasi2 = '1';
        } else {
            $akurasi2 = '0';
        }

        if ($kategori_pertandingan_3 == $kategorii[2]->kategori) {
            $akurasi3 = '1';
        } else {
            $akurasi3 = '0';
        }

        if ($kategori_pertandingan_4 == $kategorii[3]->kategori) {
            $akurasi4 = '1';
        } else {
            $akurasi4 = '0';
        }

        if ($kategori_pertandingan_5 == $kategorii[4]->kategori) {
            $akurasi5 = '1';
        } else {
            $akurasi5 = '0';
        }

        if ($kategori_pertandingan_6 == $kategorii[5]->kategori) {
            $akurasi6 = '1';
        } else {
            $akurasi6 = '0';
        }

        if ($kategori_pertandingan_7 == $kategorii[6]->kategori) {
            $akurasi7 = '1';
        } else {
            $akurasi7 = '0';
        }

        if ($kategori_pertandingan_8 == $kategorii[7]->kategori) {
            $akurasi8 = '1';
        } else {
            $akurasi8 = '0';
        }

        if ($kategori_pertandingan_9 == $kategorii[8]->kategori) {
            $akurasi9 = '1';
        } else {
            $akurasi9 = '0';
        }

        if ($kategori_pertandingan_10 == $kategorii[9]->kategori) {
            $akurasi10 = '1';
        } else {
            $akurasi10 = '0';
        }

        if ($kategori_pertandingan_11 == $kategorii[10]->kategori) {
            $akurasi11 = '1';
        } else {
            $akurasi11 = '0';
        }

        if ($kategori_pertandingan_12 == $kategorii[11]->kategori) {
            $akurasi12 = '1';
        } else {
            $akurasi12 = '0';
        }

        if ($kategori_pertandingan_13 == $kategorii[12]->kategori) {
            $akurasi13 = '1';
        } else {
            $akurasi13 = '0';
        }

        if ($kategori_pertandingan_14 == $kategorii[13]->kategori) {
            $akurasi14 = '1';
        } else {
            $akurasi14 = '0';
        }

        $akr = [$akurasi1, $akurasi2, $akurasi3, $akurasi4, $akurasi5, $akurasi6, $akurasi7, $akurasi8, $akurasi9, $akurasi10, $akurasi11, $akurasi12, $akurasi13, $akurasi14];
        $jml_akr = array_sum($akr);

        $hasil_akr = $jml_akr / $jumlahh2 * 100;

        // var_dump($gnbs_fight);

        $data = array(
            // $power_serhin,
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
            'gnbk_serhin' => $gnbk_serhin,
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
            'hkf_11' => $hkf_11,
            'hkf_12' => $hkf_12,
            'hkf_13' => $hkf_13,
            'hkf_14' => $hkf_14,
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
            'hkt_11' => $hkt_11,
            'hkt_12' => $hkt_12,
            'hkt_13' => $hkt_13,
            'hkt_14' => $hkt_14,
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
            'hks_11' => $hks_11,
            'hks_12' => $hks_12,
            'hks_13' => $hks_13,
            'hks_14' => $hks_14,
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
            'hp11' => $hp11,
            'hp12' => $hp12,
            'hp13' => $hp13,
            'hp14' => $hp14,
            'kategori_pertandingan_1' => $kategori_pertandingan_1,
            'kategori_pertandingan_2' => $kategori_pertandingan_2,
            'kategori_pertandingan_3' => $kategori_pertandingan_3,
            'kategori_pertandingan_4' => $kategori_pertandingan_4,
            'kategori_pertandingan_5' => $kategori_pertandingan_5,
            'kategori_pertandingan_6' => $kategori_pertandingan_6,
            'kategori_pertandingan_7' => $kategori_pertandingan_7,
            'kategori_pertandingan_8' => $kategori_pertandingan_8,
            'kategori_pertandingan_9' => $kategori_pertandingan_9,
            'kategori_pertandingan_10' => $kategori_pertandingan_10,
            'kategori_pertandingan_11' => $kategori_pertandingan_11,
            'kategori_pertandingan_12' => $kategori_pertandingan_12,
            'kategori_pertandingan_13' => $kategori_pertandingan_13,
            'kategori_pertandingan_14' => $kategori_pertandingan_14,
            'hasil_akurasi' => $hasil_akr,
            // 'a_speed' => $a_speed,
        );

        $data2  = array(
            'akurasi1' => $hasil_akr,
        );

        return $data;
    }

    public function perhitungan2()
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
        // $mean_power_serhin2 = 59.75;
        $mean_stamina_serhin = $stamina_serhin[0]->stamina_serhin / $jml_serhin;
        $mean_agility_serhin = $agility_serhin[0]->agility_serhin / $jml_serhin;
        $mean_kedisiplinan_serhin = $kedisiplinan_serhin[0]->kedisiplinan_serhin / $jml_serhin;
        // $mean_kedisiplinan_serhin2 = 65.75;
        $mean_teknik_serhin = $teknik_serhin[0]->teknik_serhin / $jml_serhin;
        // $mean_teknik_serhin2 = 64.75;

        //standar deviasi fight
        $hbf = $jml_fight - 1;
        foreach ($rsf as $rsf) {
            $data_rsf[] = pow($rsf->speed - $mean_speed_fight, 2);
            $a_speed = 0;
            foreach ($data_rsf as $drsf) {
                $a_speed += $drsf;
            }
        }
        $sdf_speed = sqrt($a_speed / $hbf);

        foreach ($rpf as $rpf) {
            $data_rpf[] = pow($rpf->power - $mean_power_fight, 2);
            $a_power = 0;
            foreach ($data_rpf as $drpf) {
                $a_power += $drpf;
            }
        }
        $sdf_power = sqrt($a_power / $hbf);

        foreach ($rstf as $rstf) {
            $data_rstf[] = pow($rstf->stamina - $mean_stamina_fight, 2);
            $a_stamina = 0;
            foreach ($data_rstf as $drstf) {
                $a_stamina += $drstf;
            }
        }
        $sdf_stamina = sqrt($a_stamina / $hbf);

        foreach ($raf as $raf) {
            $data_raf[] = pow($raf->agility - $mean_agility_fight, 2);
            $a_agility = 0;
            foreach ($data_raf as $draf) {
                $a_agility += $draf;
            }
        }
        $sdf_agility = sqrt($a_agility / $hbf);

        foreach ($rkf as $rkf) {
            $data_rkf[] = pow($rkf->kedisiplinan - $mean_kedisiplinan_fight, 2);
            $a_kedisiplinan = 0;
            foreach ($data_rkf as $drkf) {
                $a_kedisiplinan += $drkf;
            }
        }
        $sdf_kedisiplinan = sqrt($a_kedisiplinan / $hbf);

        foreach ($rtf as $rtf) {
            $data_rtf[] = pow($rtf->teknik - $mean_teknik_fight, 2);
            $a_teknik = 0;
            foreach ($data_rtf as $drtf) {
                $a_teknik += $drtf;
            }
        }
        $sdf_teknik = sqrt($a_teknik / $hbf);

        //standar deviasi tgr
        $hbt = $jml_tgr - 1;

        foreach ($rst as $rst) {
            $data_rst[] = pow($rst->speed - $mean_speed_tgr, 2);
            $b_speed = 0;
            foreach ($data_rst as $drst) {
                $b_speed += $drst;
            }
        }
        $sdt_speed = sqrt($b_speed / $hbt);

        foreach ($rpt as $rpt) {
            $data_rpt[] = pow($rpt->power - $mean_power_tgr, 2);
            $b_power = 0;
            foreach ($data_rpt as $drpt) {
                $b_power += $drpt;
            }
        }
        $sdt_power = sqrt($b_power / $hbt);

        foreach ($rstt as $rstt) {
            $data_rstt[] =  pow($rstt->stamina - $mean_stamina_tgr, 2);
            $b_stamina = 0;
            foreach ($data_rstt as $drstt) {
                $b_stamina += $drstt;
            }
        }
        $sdt_stamina = sqrt($b_stamina / $hbt);

        foreach ($rat as $rat) {
            $data_rat[] =  pow($rat->agility - $mean_agility_tgr, 2);
            $b_agility = 0;
            foreach ($data_rat as $drat) {
                $b_agility += $drat;
            }
        }
        $sdt_agility = sqrt($b_agility / $hbt);

        foreach ($rkt as $rkt) {
            $data_rkt[] =  pow($rkt->kedisiplinan - $mean_kedisiplinan_tgr, 2);
            $b_kedisiplinan = 0;
            foreach ($data_rkt as $drkt) {
                $b_kedisiplinan += $drkt;
            }
        }
        $sdt_kedisiplinan = sqrt($b_kedisiplinan / $hbt);

        foreach ($rtt as $rtt) {
            $data_rtt[] =  pow($rtt->teknik - $mean_teknik_tgr, 2);
            $b_teknik = 0;
            foreach ($data_rtt as $drtt) {
                $b_teknik += $drtt;
            }
        }
        $sdt_teknik = sqrt($b_teknik / $hbt);

        //standar deviasi serhin
        $hbsh = $jml_serhin - 1;

        foreach ($rssh as $rssh) {
            $data_rssh[] = pow($rssh->speed - $mean_speed_serhin, 2);
            $c_speed = 0;
            foreach ($data_rssh as $drssh) {
                $c_speed += $drssh;
            }
        }
        $sdsh_speed = sqrt($c_speed / $hbsh);

        foreach ($rpsh as $rpsh) {
            $data_rpsh[] = pow($rpsh->power - $mean_power_serhin, 2);
            $c_power = 0;
            foreach ($data_rpsh as $drpsh) {
                $c_power += $drpsh;
            }
        }
        $sdsh_power = sqrt($c_power / $hbsh);

        foreach ($rstsh as $rstsh) {
            $data_rstsh[] = pow($rstsh->stamina - $mean_stamina_serhin, 2);
            $c_stamina = 0;
            foreach ($data_rstsh as $drstsh) {
                $c_stamina += $drstsh;
            }
        }
        $sdsh_stamina = sqrt($c_stamina / $hbsh);

        foreach ($rash as $rash) {
            $data_rash[] = pow($rash->agility - $mean_agility_serhin, 2);
            $c_agility = 0;
            foreach ($data_rash as $drash) {
                $c_agility += $drash;
            }
        }
        $sdsh_agility = sqrt($c_agility / $hbsh);

        foreach ($rksh as $rksh) {
            $data_rksh[] = pow($rksh->kedisiplinan - $mean_kedisiplinan_serhin, 2);
            $c_kedisiplinan = 0;
            foreach ($data_rksh as $drksh) {
                $c_kedisiplinan += $drksh;
            }
        }
        $sdsh_kedisiplinan = sqrt($c_kedisiplinan / $hbsh);

        foreach ($rtsh as $rtsh) {
            $data_rtsh[] = pow($rtsh->teknik - $mean_teknik_serhin, 2);
            $c_teknik = 0;
            foreach ($data_rtsh as $drtsh) {
                $c_teknik += $drtsh;
            }
        }
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
        foreach ($gnb_s as $gnb_s) {
            $gnbs_fight[] = 1 / sqrt(2 * 3.14 * $sdf_speed) * exp(- (pow($gnb_s->speed - $mean_speed_fight, 2) / (2 * pow($sdf_speed, 2))));
        }
        //gausian fight power
        foreach ($gnb_p as $gnb_p) {
            $gnbp_fight[] = 1 / sqrt(2 * 3.14 * $sdf_power) * exp(- (pow($gnb_p->power - $mean_power_fight, 2) / (2 * pow($sdf_power, 2))));
        }
        //gausian fight stamina
        foreach ($gnb_st as $gnb_st) {
            $gnbst_fight[] = 1 / sqrt(2 * 3.14 * $sdf_stamina) * exp(- (pow($gnb_st->stamina - $mean_stamina_fight, 2) / (2 * pow($sdf_stamina, 2))));
        }
        //gausian fight agility
        foreach ($gnb_a as $gnb_a) {
            $gnba_fight[] = 1 / sqrt(2 * 3.14 * $sdf_agility) * exp(- (pow($gnb_a->agility - $mean_agility_fight, 2) / (2 * pow($sdf_agility, 2))));
        }
        //gausian fight kedisiplinan
        foreach ($gnb_k as $gnb_k) {
            $gnbk_fight[] = 1 / sqrt(2 * 3.14 * $sdf_kedisiplinan) * exp(- (pow($gnb_k->kedisiplinan - $mean_kedisiplinan_fight, 2) / (2 * pow($sdf_kedisiplinan, 2))));
        }
        //gausian fight teknik
        foreach ($gnb_t as $gnb_t) {
            $gnbt_fight[] = 1 / sqrt(2 * 3.14 * $sdf_teknik) * exp(- (pow($gnb_t->teknik - $mean_teknik_fight, 2) / (2 * pow($sdf_teknik, 2))));
        }

        //gausian tgr speed
        foreach ($gnb_ss as $gnb_s) {
            $gnbs_tgr[] = 1 / sqrt(2 * 3.14 * $sdt_speed) * exp(- (pow($gnb_s->speed - $mean_speed_tgr, 2) / (2 * pow($sdt_speed, 2))));
        }

        //gausian tgr power
        foreach ($gnb_pp as $gnb_p) {
            $gnbp_tgr[] = 1 / sqrt(2 * 3.14 * $sdt_power) * exp(- (pow($gnb_p->power - $mean_power_tgr, 2) / (2 * pow($sdt_power, 2))));
        }

        //gausian tgr stamina
        foreach ($gnb_stt as $gnb_st) {
            $gnbst_tgr[] = 1 / sqrt(2 * 3.14 * $sdt_stamina) * exp(- (pow($gnb_st->stamina - $mean_stamina_tgr, 2) / (2 * pow($sdt_stamina, 2))));
        }

        //gausian tgr agility
        foreach ($gnb_aa as $gnb_a) {
            $gnba_tgr[] = 1 / sqrt(2 * 3.14 * $sdt_agility) * exp(- (pow($gnb_a->agility - $mean_agility_tgr, 2) / (2 * pow($sdt_agility, 2))));
        }

        //gausian tgr kedisiplinan
        foreach ($gnb_kk as $gnb_kk) {
            $gnbk_tgr[] = 1 / sqrt(2 * 3.14 * $sdt_kedisiplinan) * exp(- (pow($gnb_kk->kedisiplinan - $mean_kedisiplinan_tgr, 2) / (2 * pow($sdt_kedisiplinan, 2))));
        }

        //gausian tgr teknik
        foreach ($gnb_tt as $gnb_t) {
            $gnbt_tgr[] = 1 / sqrt(2 * 3.14 * $sdt_teknik) * exp(- (pow($gnb_t->teknik - $mean_teknik_tgr, 2) / (2 * pow($sdt_teknik, 2))));
        }

        //gausian serhin speed
        foreach ($gnb_sss as $gnb_sss) {
            $gnbs_serhin[] = 1 / sqrt(2 * 3.14 * $sdsh_speed) * exp(- (pow($gnb_sss->speed - $mean_speed_serhin, 2) / (2 * pow($sdsh_speed, 2))));
        }

        //gausian serhin power
        foreach ($gnb_ppp as $gnb_ppp) {
            $gnbp_serhin[] = 1 / sqrt(2 * 3.14 * $sdsh_power) * exp(- (pow($gnb_ppp->power - $mean_power_serhin, 2) / (2 * pow($sdsh_power, 2))));
        }

        //gausian serhin stamina
        foreach ($gnb_sttt as $gnb_sttt) {
            $gnbst_serhin[] = 1 / sqrt(2 * 3.14 * $sdsh_stamina) * exp(- (pow($gnb_sttt->stamina - $mean_stamina_serhin, 2) / (2 * pow($sdsh_stamina, 2))));
        }

        //gausian serhin agility
        foreach ($gnb_aaa as $gnb_aaa) {
            $gnba_serhin[] = 1 / sqrt(2 * 3.14 * $sdsh_agility) * exp(- (pow($gnb_aaa->agility - $mean_agility_serhin, 2) / (2 * pow($sdsh_agility, 2))));
        }

        //gausian serhin kedisiplinan
        foreach ($gnb_kkk as $gnb_kkk) {
            $gnbk_serhin[] = 1 / sqrt(2 * 3.14 * $sdsh_kedisiplinan) * exp(- (pow($gnb_kkk->kedisiplinan - $mean_kedisiplinan_serhin, 2) / (2 * pow($sdsh_kedisiplinan, 2))));
        }

        //gausian serhin teknik
        foreach ($gnb_ttt as $gnb_ttt) {
            $gnbt_serhin[] = 1 / sqrt(2 * 3.14 * $sdsh_teknik) * exp(- (pow($gnb_ttt->teknik - $mean_teknik_serhin, 2) / (2 * pow($sdsh_teknik, 2))));
        }


        //hitung hasil kategori fight
        // $hkf = [$gnbs_fight * $gnbp_fight * $gnbst_fight * $gnba_fight * $gnbk_fight * $gnbt_fight * $probabilitas_fight];

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
        if ($hp1 == $hkf_1) {
            $kategori_pertandingan_1 = 'Fight';
        } elseif ($hp1 == $hkt_1) {
            $kategori_pertandingan_1 = 'TGR';
        } elseif ($hp1 == $hks_1) {
            $kategori_pertandingan_1 = 'Serang Hindar';
        }

        $prediksi_2 = [$hkf_2, $hkt_2, $hks_2];
        $hp2 = max($prediksi_2);
        if ($hp2 == $hkf_2) {
            $kategori_pertandingan_2 = 'Fight';
        } elseif ($hp2 == $hkt_2) {
            $kategori_pertandingan_2 = 'TGR';
        } elseif ($hp2 == $hks_2) {
            $kategori_pertandingan_2 = 'Serang Hindar';
        }

        $prediksi_3 = [$hkf_3, $hkt_3, $hks_3];
        $hp3 = max($prediksi_3);
        if ($hp3 == $hkf_3) {
            $kategori_pertandingan_3 = 'Fight';
        } elseif ($hp3 == $hkt_3) {
            $kategori_pertandingan_3 = 'TGR';
        } elseif ($hp3 == $hks_3) {
            $kategori_pertandingan_3 = 'Serang Hindar';
        }

        $prediksi_4 = [$hkf_4, $hkt_4, $hks_4];
        $hp4 = max($prediksi_4);
        if ($hp4 == $hkf_4) {
            $kategori_pertandingan_4 = 'Fight';
        } elseif ($hp4 == $hkt_4) {
            $kategori_pertandingan_4 = 'TGR';
        } elseif ($hp4 == $hks_4) {
            $kategori_pertandingan_4 = 'Serang Hindar';
        }

        $prediksi_5 = [$hkf_5, $hkt_5, $hks_5];
        $hp5 = max($prediksi_5);
        if ($hp5 == $hkf_5) {
            $kategori_pertandingan_5 = 'Fight';
        } elseif ($hp5 == $hkt_5) {
            $kategori_pertandingan_5 = 'TGR';
        } elseif ($hp5 == $hks_5) {
            $kategori_pertandingan_5 = 'Serang Hindar';
        }

        $prediksi_6 = [$hkf_6, $hkt_6, $hks_6];
        $hp6 = max($prediksi_6);
        if ($hp6 == $hkf_6) {
            $kategori_pertandingan_6 = 'Fight';
        } elseif ($hp6 == $hkt_6) {
            $kategori_pertandingan_6 = 'TGR';
        } elseif ($hp6 == $hks_6) {
            $kategori_pertandingan_6 = 'Serang Hindar';
        }

        $prediksi_7 = [$hkf_7, $hkt_7, $hks_7];
        $hp7 = max($prediksi_7);
        if ($hp7 == $hkf_7) {
            $kategori_pertandingan_7 = 'Fight';
        } elseif ($hp7 == $hkt_7) {
            $kategori_pertandingan_7 = 'TGR';
        } elseif ($hp7 == $hks_7) {
            $kategori_pertandingan_7 = 'Serang Hindar';
        }

        $prediksi_8 = [$hkf_8, $hkt_8, $hks_8];
        $hp8 = max($prediksi_8);
        if ($hp8 == $hkf_8) {
            $kategori_pertandingan_8 = 'Fight';
        } elseif ($hp8 == $hkt_8) {
            $kategori_pertandingan_8 = 'TGR';
        } elseif ($hp8 == $hks_8) {
            $kategori_pertandingan_8 = 'Serang Hindar';
        }

        $prediksi_9 = [$hkf_9, $hkt_9, $hks_9];
        $hp9 = max($prediksi_9);
        if ($hp9 == $hkf_9) {
            $kategori_pertandingan_9 = 'Fight';
        } elseif ($hp9 == $hkt_9) {
            $kategori_pertandingan_9 = 'TGR';
        } elseif ($hp9 == $hks_9) {
            $kategori_pertandingan_9 = 'Serang Hindar';
        }

        $prediksi_10 = [$hkf_10, $hkt_10, $hks_10];
        $hp10 = max($prediksi_10);
        if ($hp10 == $hkf_10) {
            $kategori_pertandingan_10 = 'Fight';
        } elseif ($hp10 == $hkt_10) {
            $kategori_pertandingan_10 = 'TGR';
        } elseif ($hp10 == $hks_10) {
            $kategori_pertandingan_10 = 'Serang Hindar';
        }

        //query kategori
        $this->db->select('kategori');
        $kategorii = $this->db->get('data_uji')->result();

        $jumlahh2 =  $this->db->count_all_results('data_latih');


        //akurasi
        if ($kategori_pertandingan_1 == $kategorii[0]->kategori) {
            $akurasi1 = '1';
        } else {
            $akurasi1 = '0';
        }

        if ($kategori_pertandingan_2 == $kategorii[1]->kategori) {
            $akurasi2 = '1';
        } else {
            $akurasi2 = '0';
        }

        if ($kategori_pertandingan_3 == $kategorii[2]->kategori) {
            $akurasi3 = '1';
        } else {
            $akurasi3 = '0';
        }

        if ($kategori_pertandingan_4 == $kategorii[3]->kategori) {
            $akurasi4 = '1';
        } else {
            $akurasi4 = '0';
        }

        if ($kategori_pertandingan_5 == $kategorii[4]->kategori) {
            $akurasi5 = '1';
        } else {
            $akurasi5 = '0';
        }

        if ($kategori_pertandingan_6 == $kategorii[5]->kategori) {
            $akurasi6 = '1';
        } else {
            $akurasi6 = '0';
        }

        if ($kategori_pertandingan_7 == $kategorii[6]->kategori) {
            $akurasi7 = '1';
        } else {
            $akurasi7 = '0';
        }

        if ($kategori_pertandingan_8 == $kategorii[7]->kategori) {
            $akurasi8 = '1';
        } else {
            $akurasi8 = '0';
        }

        if ($kategori_pertandingan_9 == $kategorii[8]->kategori) {
            $akurasi9 = '1';
        } else {
            $akurasi9 = '0';
        }

        if ($kategori_pertandingan_10 == $kategorii[9]->kategori) {
            $akurasi10 = '1';
        } else {
            $akurasi10 = '0';
        }

        $akr = [$akurasi1, $akurasi2, $akurasi3, $akurasi4, $akurasi5, $akurasi6, $akurasi7, $akurasi8, $akurasi9, $akurasi10];
        $jml_akr = array_sum($akr);
        $hasil_akr = $jml_akr / $jumlahh2 * 100;

        var_dump($gnbs_fight);

        $data = array(
            // $power_serhin,
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
            'gnbk_serhin' => $gnbk_serhin,
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
            'kategori_pertandingan_10' => $kategori_pertandingan_10,
            'hasil_akurasi' => $hasil_akr,
        );

        $data2  = array(
            'gnbs' => $gnbs_fight,
            
        );

        return $data2;
    }

    public function perhitungan_nb($parameter, $val_param, $kategori)
    {

        $query  = "SELECT (select count(id) from konversi_dataset where $parameter='$val_param' AND kategori='$kategori') / COUNT(id) as hasil_bagi FROM `konversi_dataset` WHERE kategori='$kategori'";
        return $this->db->query($query)->row();
    }
}
