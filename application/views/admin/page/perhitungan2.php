<?php $this->load->view('partials/head.php') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<?php $this->load->view('partials/menu.php') ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3><i class="fa fa-calculator"></i> Perhitungan Naive Bayes</h3>
            <a href="<?= base_url('admin/data_set/hasil_prediksi') ?>" style="margin-left: 15px; margin-top: 20px;" class="btn btn-success"><i class="fa fa-calculator"></i> Hasil Prediksi</a>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Perhitungan Gausian Fighter</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Speed</th>
                                        <th>Power</th>
                                        <th>Stamina</th>
                                        <th>Agility</th>
                                        <th>Kedisiplinan</th>
                                        <th>Gerak Teknik</th>
                                        <th>Kategori</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <ul>
                                                <?php foreach ($perhitungan['namaa'] as $nm) { ?>
                                                    <li><?= $nm->nama ?></li>
                                                <?php } ?>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <?php foreach ($perhitungan['gnbs_fight'] as $gnsf) { ?>
                                                    <li><?= round($gnsf, 5) ?></li>
                                                <?php } ?>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <?php foreach ($perhitungan['gnbp_fight'] as $gnpf) { ?>
                                                    <li><?= round($gnpf, 5) ?></li>
                                                <?php } ?>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <?php foreach ($perhitungan['gnbst_fight'] as $gnstf) { ?>
                                                    <li><?= round($gnstf, 5) ?></li>
                                                <?php } ?>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <?php foreach ($perhitungan['gnba_fight'] as $gnaf) { ?>
                                                    <li><?= round($gnaf, 5) ?></li>
                                                <?php } ?>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <?php foreach ($perhitungan['gnbk_fight'] as $gnkf) { ?>
                                                    <li><?= round($gnkf, 5) ?></li>
                                                <?php } ?>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <?php foreach ($perhitungan['gnbt_fight'] as $gntf) { ?>
                                                    <li><?= round($gntf, 5) ?></li>
                                                <?php } ?>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <li><?= $perhitungan['hkf_1'] ?></li>
                                                <li><?= $perhitungan['hkf_2'] ?></li>
                                                <li><?= $perhitungan['hkf_3'] ?></li>
                                                <li><?= $perhitungan['hkf_4'] ?></li>
                                                <li><?= $perhitungan['hkf_5'] ?></li>
                                                <li><?= $perhitungan['hkf_6'] ?></li>
                                                <li><?= $perhitungan['hkf_7'] ?></li>
                                                <li><?= $perhitungan['hkf_8'] ?></li>
                                                <li><?= $perhitungan['hkf_9'] ?></li>
                                                <li><?= $perhitungan['hkf_10'] ?></li>
                                                <li><?= $perhitungan['hkf_11'] ?></li>
                                                <li><?= $perhitungan['hkf_12'] ?></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Perhitungan Gausian TGR</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Speed</th>
                                        <th>Power</th>
                                        <th>Stamina</th>
                                        <th>Agility</th>
                                        <th>Kedisiplinan</th>
                                        <th>Gerak Teknik</th>
                                        <th>Kategori</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <ul>
                                                <?php foreach ($perhitungan['namaa'] as $nm) { ?>
                                                    <li><?= $nm->nama ?></li>
                                                <?php } ?>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <?php foreach ($perhitungan['gnbs_tgr'] as $gnst) { ?>
                                                    <li><?= round($gnst, 5) ?></li>
                                                <?php } ?>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <?php foreach ($perhitungan['gnbp_tgr'] as $gnpt) { ?>
                                                    <li><?= round($gnpt, 5) ?></li>
                                                <?php } ?>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <?php foreach ($perhitungan['gnbst_tgr'] as $gnstt) { ?>
                                                    <li><?= $gnstt ?></li>
                                                <?php } ?>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <?php foreach ($perhitungan['gnba_tgr'] as $gnat) { ?>
                                                    <li><?= round($gnat, 5) ?></li>
                                                <?php } ?>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <?php foreach ($perhitungan['gnbk_tgr'] as $gnkt) { ?>
                                                    <li><?= round($gnkt, 5) ?></li>
                                                <?php } ?>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <?php foreach ($perhitungan['gnbt_tgr'] as $gntt) { ?>
                                                    <li><?= round($gntt, 5) ?></li>
                                                <?php } ?>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <li><?= $perhitungan['hkt_1'] ?></li>
                                                <li><?= $perhitungan['hkt_2'] ?></li>
                                                <li><?= $perhitungan['hkt_3'] ?></li>
                                                <li><?= $perhitungan['hkt_4'] ?></li>
                                                <li><?= $perhitungan['hkt_5'] ?></li>
                                                <li><?= $perhitungan['hkt_6'] ?></li>
                                                <li><?= $perhitungan['hkt_7'] ?></li>
                                                <li><?= $perhitungan['hkt_8'] ?></li>
                                                <li><?= $perhitungan['hkt_9'] ?></li>
                                                <li><?= $perhitungan['hkt_10'] ?></li>
                                                <li><?= $perhitungan['hkt_11'] ?></li>
                                                <li><?= $perhitungan['hkt_12'] ?></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Perhitungan Gausian Serang Hindar</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Speed</th>
                                        <th>Power</th>
                                        <th>Stamina</th>
                                        <th>Agility</th>
                                        <th>Kedisiplinan</th>
                                        <th>Gerak Teknik</th>
                                        <th>Kategori</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <ul>
                                                <?php foreach ($perhitungan['namaa'] as $nm) { ?>
                                                    <li><?= $nm->nama ?></li>
                                                <?php } ?>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <?php foreach ($perhitungan['gnbs_serhin'] as $gns_sh) { ?>
                                                    <li><?= $gns_sh ?></li>
                                                <?php } ?>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <?php foreach ($perhitungan['gnbp_serhin'] as $gnp_sh) { ?>
                                                    <li><?= round($gnp_sh, 5) ?></li>
                                                <?php } ?>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <?php foreach ($perhitungan['gnbst_serhin'] as $gnst_sh) { ?>
                                                    <li><?= round($gnst_sh, 5) ?></li>
                                                <?php } ?>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <?php foreach ($perhitungan['gnba_serhin'] as $gna_sh) { ?>
                                                    <li><?= round($gna_sh, 5) ?></li>
                                                <?php } ?>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <?php foreach ($perhitungan['gnbk_serhin'] as $gnk_sh) { ?>
                                                    <li><?= round($gnk_sh, 5) ?></li>
                                                <?php } ?>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <?php foreach ($perhitungan['gnbt_serhin'] as $gnt_sh) { ?>
                                                    <li><?= round($gnt_sh, 5) ?></li>
                                                <?php } ?>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <li><?= $perhitungan['hks_1'] ?></li>
                                                <li><?= $perhitungan['hks_2'] ?></li>
                                                <li><?= $perhitungan['hks_3'] ?></li>
                                                <li><?= $perhitungan['hks_4'] ?></li>
                                                <li><?= $perhitungan['hks_5'] ?></li>
                                                <li><?= $perhitungan['hks_6'] ?></li>
                                                <li><?= $perhitungan['hks_7'] ?></li>
                                                <li><?= $perhitungan['hks_8'] ?></li>
                                                <li><?= $perhitungan['hks_9'] ?></li>
                                                <li><?= $perhitungan['hks_10'] ?></li>
                                                <li><?= $perhitungan['hks_11'] ?></li>
                                                <li><?= $perhitungan['hks_12'] ?></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('partials/footer.php') ?>
<script>
    <?php if ($this->session->flashdata('insert')) : ?>
        Swal.fire({
            icon: 'success',
            title: 'Data latih berhasil disimpan',
            showConfirmButton: true,
            // timer: 1500
        })
    <?php elseif ($this->session->flashdata('update')) : ?>
        Swal.fire({
            icon: 'success',
            title: 'Data latih berhasil diupdate',
            showConfirmButton: true,
            // timer: 1500
        })
    <?php elseif ($this->session->flashdata('delete')) : ?>
        Swal.fire({
            icon: 'success',
            title: 'Data latih Berhasil dihapus',
            showConfirmButton: true,
            // timer: 1500
        })
    <?php endif ?>

    // $.ajax({
    //     url: "<?php echo base_url('admin/data_set/get_mean') ?>",
    //     type: 'GET',
    //     dataType: "JSON",
    //     success: function(data) {
    //         console.log('data', data);
    //     }
</script>
<?php $this->load->view('partials/js.php') ?>