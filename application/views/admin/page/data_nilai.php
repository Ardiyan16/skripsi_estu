<?php $this->load->view('partials/head.php') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<?php $this->load->view('partials/menu.php') ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3><i class="fa fa-table"></i> Tabel Data Nilai Atlet</h3>
            <a href="<?= base_url('admin/admin/v_add_nilai') ?>" style="margin-left: 15px; margin-top: 20px;" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Nilai</a>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Data Nilai Atlet</h2>
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
                                        <th>Asal Unit/Ranting</th>
                                        <th>Nilai Speed</th>
                                        <th>Nilai Power</th>
                                        <th>Nilai Stamina</th>
                                        <th>Nilai Agility</th>
                                        <th>Nilai Kedisiplinan</th>
                                        <th>Nilai Gerak Teknik</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($nilai as $n) :
                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $n->nama ?></td>
                                            <td><?= $n->asal_unit ?></td>
                                            <td><?= $n->speed ?></td>
                                            <td><?= $n->power ?></td>
                                            <td><?= $n->stamina ?></td>
                                            <td><?= $n->agility ?></td>
                                            <td><?= $n->kedisiplinan ?></td>
                                            <td><?= $n->gerak_teknik ?></td>
                                            <td>
                                                <a href="#editnilai<?= $n->id_nilai ?>" data-toggle="modal" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                                <a href="#hapusnilai<?= $n->id_nilai ?>" data-toggle="modal" class="btn btn-danger btn-sm tombol-hapus"><i class="fa fa-trash"></i> Hapus</a>
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
<?php foreach ($nilai2 as $n) : ?>
    <div class="modal fade" id="editnilai<?= $n->id_nilai ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form method="post" action="<?= base_url('admin/admin/update_nilai') ?>">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Edit Nilai <?= $n->nama ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 "> Nilai Speed</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="number" class="form-control" value="<?= $n->speed ?>" name="speed" placeholder="Nilai Speed...">
                                <input type="hidden" name="id_nilai" value="<?= $n->id_nilai ?>">
                                <input type="hidden" name="id_user" value="<?= $n->id_user ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 "> Nilai Power</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="number" class="form-control" value="<?= $n->power ?>" name="power" placeholder="Nilai Power...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Nilai Stamina</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="number" class="form-control" value="<?= $n->stamina ?>" name="stamina" placeholder="Nilai Stamina...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Nilai Agility</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="number" class="form-control" value="<?= $n->agility ?>" name="agility" placeholder="Nilai Agility...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Nilai Kedisiplinan</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="number" class="form-control" value="<?= $n->kedisiplinan ?>" name="kedisiplinan" placeholder="Nilai kedisiplinan...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Nilai Gerak/Teknik</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="number" class="form-control" value="<?= $n->gerak_teknik ?>" name="gerak_teknik" placeholder="Nilai Gerak Teknik...">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php endforeach; ?>
<?php foreach ($nilai2 as $n) : ?>
    <div class="modal fade" id="hapusnilai<?= $n->id_nilai ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Apakah anda yakin ?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Data nilai akan dihapus permanen</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('admin/admin/delete_nilai/' . $n->id_nilai) ?>" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?php $this->load->view('partials/footer.php') ?>
<script>
    <?php if ($this->session->flashdata('insert')) : ?>
        Swal.fire({
            icon: 'success',
            title: 'Data nilai berhasil disimpan',
            showConfirmButton: true,
            // timer: 1500
        })
    <?php elseif ($this->session->flashdata('update')) : ?>
        Swal.fire({
            icon: 'success',
            title: 'Data nilai berhasil diupdate',
            showConfirmButton: true,
            // timer: 1500
        })
    <?php elseif ($this->session->flashdata('delete')) : ?>
        Swal.fire({
            icon: 'success',
            title: 'Data Berita Berhasil dihapus',
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