<?php $this->load->view('partials/head.php') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<?php $this->load->view('partials/menu.php') ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3><i class="fa fa-calculator"></i> Hasil Prediksi Gausian Naive Bayes</h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Perhitungan</h2>
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
                                        <th>Hasil</th>
                                        <th>Prediksi</th>
                                        <th>Akurasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <ul>
                                                <?php foreach ($hasil['namaa'] as $nm) { ?>
                                                    <li><?= $nm->nama ?></li>
                                                <?php } ?>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <li><?= $hasil['hp1'] ?></li>
                                                <li><?= $hasil['hp2'] ?></li>
                                                <li><?= $hasil['hp3'] ?></li>
                                                <li><?= $hasil['hp4'] ?></li>
                                                <li><?= $hasil['hp5'] ?></li>
                                                <li><?= $hasil['hp6'] ?></li>
                                                <li><?= $hasil['hp7'] ?></li>
                                                <li><?= $hasil['hp8'] ?></li>
                                                <li><?= $hasil['hp9'] ?></li>
                                                <li><?= $hasil['hp10'] ?></li>
                                                <li><?= $hasil['hp11'] ?></li>
                                                <li><?= $hasil['hp12'] ?></li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <li><?= $hasil['kategori_pertandingan_1'] ?></li>
                                                <li><?= $hasil['kategori_pertandingan_2'] ?></li>
                                                <li><?= $hasil['kategori_pertandingan_3'] ?></li>
                                                <li><?= $hasil['kategori_pertandingan_4'] ?></li>
                                                <li><?= $hasil['kategori_pertandingan_5'] ?></li>
                                                <li><?= $hasil['kategori_pertandingan_6'] ?></li>
                                                <li><?= $hasil['kategori_pertandingan_7'] ?></li>
                                                <li><?= $hasil['kategori_pertandingan_8'] ?></li>
                                                <li><?= $hasil['kategori_pertandingan_9'] ?></li>
                                                <li><?= $hasil['kategori_pertandingan_10'] ?></li>
                                                <li><?= $hasil['kategori_pertandingan_11'] ?></li>
                                                <li><?= $hasil['kategori_pertandingan_12'] ?></li>
                                            </ul>
                                        </td>
                                        <td>Akurasi = <?= $hasil['hasil_akurasi'] ?> %</td>
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
    // })
</script>
<?php $this->load->view('partials/js.php') ?>