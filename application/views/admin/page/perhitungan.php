<?php $this->load->view('partials/head.php') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<?php $this->load->view('partials/menu.php') ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3><i class="fa fa-calculator"></i> Data Uji Gausian Naive Bayes</h3>
            <a href="<?= base_url('admin/data_set/perhitungan2') ?>" style="margin-left: 15px; margin-top: 20px;" class="btn btn-success"><i class="fa fa-calculator"></i> Hitung Gausian</a>
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
                                        <th>No</th>
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
                                    <?php $no = 1;
                                    foreach ($datauji as $d) :
                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $d->nama ?></td>
                                            <td><?= $d->speed ?></td>
                                            <td><?= $d->power ?></td>
                                            <td><?= $d->stamina ?></td>
                                            <td><?= $d->agility ?></td>
                                            <td><?= $d->kedisiplinan ?></td>
                                            <td><?= $d->teknik ?></td>
                                            <td><?= $d->kategori ?></td>
                                        </tr>
                                    <?php endforeach; ?>
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