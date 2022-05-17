<?php $this->load->view('partials/head.php') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<?php $this->load->view('partials/menu.php') ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3><i class="fa fa-table"></i> Tabel Hasil Konversi</h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Hasil Konversi Dataset</h2>
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
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($konvert as $d) :
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
                                            <td>
                                                <a onclick="return confirm('apakah anda yakin ?')" href="<?= base_url('admin/data_set/delete_konversi/' . $d->id) ?>" class="btn btn-danger btn-sm tombol-hapus"><i class="fa fa-trash"></i> Hapus</a>
                                            </td>
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
            title: 'Konversi Dataset berhasil disimpan',
            showConfirmButton: true,
            // timer: 1500
        })
    <?php elseif ($this->session->flashdata('delete')) : ?>
        Swal.fire({
            icon: 'success',
            title: 'Konversi Dataset Berhasil dihapus',
            showConfirmButton: true,
            // timer: 1500
        })
    <?php endif ?>

    // $('.tombol-hapus').on('click', function(e) {
    //     e.preventDefault();
    //     const link = $(this).attr('href');
    //     Swal.fire({
    //         title: 'Apakah anda yakin ?',
    //         text: "Data nilai akan dihapus!",
    //         icon: 'warning',
    //         showCancelButton: true,
    //         confirmButtonColor: '#d33',
    //         cancelButtonColor: '#6b705c',
    //         confirmButtonText: 'Hapus Data!'
    //     }).then((result) => {
    //         if (result.isConfirmed) {
    //             document.location.href = link;
    //         }
    //     })
    // });
</script>
<?php $this->load->view('partials/js.php') ?>