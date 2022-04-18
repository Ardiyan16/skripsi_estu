<?php $this->load->view('partials/head.php') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<?php $this->load->view('partials/menu.php') ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3><i class="fa fa-table"></i> Tabel Data Latih</h3>
            <a href="<?= base_url('admin/data_set/add_datalatih') ?>" style="margin-left: 15px; margin-top: 20px;" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Nilai</a>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Data Latih</h2>
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
                                    foreach ($datalatih as $d) :
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
                                                <a href="#editdatalatih<?= $d->id ?>" data-toggle="modal" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                                <a onclick="return confirm('apakah anda yakin ?')" href="<?= base_url('admin/data_set/delete_datalatih/' . $d->id) ?>" class="btn btn-danger btn-sm tombol-hapus"><i class="fa fa-trash"></i> Hapus</a>
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
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Probabilitas</h2>
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
                            <table class="table col-sm-6">
                                <thead>
                                    <tr>
                                        <th scope="col">Atribut</th>
                                        <th scope="col">Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Fight</td>
                                        <td><?= $prob_fight ?></td>
                                    </tr>
                                    <tr>
                                        <td>TGR</td>
                                        <td><?= $prob_tgr ?></td>
                                    </tr>
                                    <tr>
                                        <td>Serang Hindar</td>
                                        <td><?= $prob_serhin ?></td>
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
                <h2>Mean</h2>
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
                            <table class="table col-sm-12">
                                <thead>
                                    <tr>
                                        <th>Atribut</th>
                                        <th>Speed</th>
                                        <th>Power</th>
                                        <th>Stamina</th>
                                        <th>Agility</th>
                                        <th>Kedisiplinan</th>
                                        <th>Gerak Teknik</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Fight</td>
                                        <td><?= $mean['mean_speed_fight'] ?></td>
                                        <td><?= $mean['mean_power_fight'] ?></td>
                                        <td><?= $mean['mean_stamina_fight'] ?></td>
                                        <td><?= $mean['mean_agility_fight'] ?></td>
                                        <td><?= $mean['mean_kedisiplinan_fight'] ?></td>
                                        <td><?= $mean['mean_teknik_fight'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>TGR</td>
                                        <td><?= $mean['mean_speed_tgr'] ?></td>
                                        <td><?= $mean['mean_power_tgr'] ?></td>
                                        <td><?= $mean['mean_stamina_tgr'] ?></td>
                                        <td><?= $mean['mean_agility_tgr'] ?></td>
                                        <td><?= $mean['mean_kedisiplinan_tgr'] ?></td>
                                        <td><?= $mean['mean_teknik_tgr'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Serang Hindar</td>
                                        <td><?= $mean['mean_speed_serhin'] ?></td>
                                        <td><?= $mean['mean_power_serhin'] ?></td>
                                        <td><?= $mean['mean_stamina_serhin'] ?></td>
                                        <td><?= $mean['mean_agility_serhin'] ?></td>
                                        <td><?= $mean['mean_kedisiplinan_serhin'] ?></td>
                                        <td><?= $mean['mean_teknik_serhin'] ?></td>
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
                <h2>Standar Deviasi</h2>
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
                            <table class="table col-sm-12">
                                <thead>
                                    <tr>
                                        <th>Atribut</th>
                                        <th>Speed</th>
                                        <th>Power</th>
                                        <th>Stamina</th>
                                        <th>Agility</th>
                                        <th>Kedisiplinan</th>
                                        <th>Gerak Teknik</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Fight</td>
                                        <td><?= $mean['sdf_speed'] ?></td>
                                        <td><?= $mean['sdf_power'] ?></td>
                                        <td><?= $mean['sdf_stamina'] ?></td>
                                        <td><?= $mean['sdf_agility'] ?></td>
                                        <td><?= $mean['sdf_kedisiplinan'] ?></td>
                                        <td><?= $mean['sdf_teknik'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>TGR</td>
                                        <td><?= $mean['sdt_speed'] ?></td>
                                        <td><?= $mean['sdt_power'] ?></td>
                                        <td><?= $mean['sdt_stamina'] ?></td>
                                        <td><?= $mean['sdt_agility'] ?></td>
                                        <td><?= $mean['sdt_kedisiplinan'] ?></td>
                                        <td><?= $mean['sdt_teknik'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Serang Hindar</td>
                                        <td><?= $mean['sdsh_speed'] ?></td>
                                        <td><?= $mean['sdsh_power'] ?></td>
                                        <td><?= $mean['sdsh_stamina'] ?></td>
                                        <td><?= $mean['sdsh_agility'] ?></td>
                                        <td><?= $mean['sdsh_kedisiplinan'] ?></td>
                                        <td><?= $mean['sdsh_teknik'] ?></td>
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
<?php foreach ($datalatih2 as $dt) : ?>
    <div class="modal fade" id="editdatalatih<?= $dt->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Data Set</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal form-label-left" method="post" action="<?= base_url('admin/data_set/update_datalatih') ?>">
                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Nama Atlet</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="hidden" name="id" value="<?= $dt->id ?>">
                                <input type="text" name="nama" value="<?= $dt->nama ?>" class="form-control" placeholder="Nama Atlet...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Speed</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="number" class="form-control" value="<?= $dt->speed ?>" name="speed" placeholder="Speed...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Power</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="number" class="form-control" value="<?= $dt->power ?>" name="power" placeholder="Power...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Stamina</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="number" class="form-control" value="<?= $dt->stamina ?>" name="stamina" placeholder="Stamina...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Agility</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="number" class="form-control" value="<?= $dt->agility ?>" name="agility" placeholder="Agility...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Kedisiplinan</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="number" class="form-control" value="<?= $dt->kedisiplinan ?>" name="kedisiplinan" placeholder="kedisiplinan...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Gerak/Teknik</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="number" class="form-control" value="<?= $dt->teknik ?>" name="teknik" placeholder="Gerak Teknik...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Kategori</label>
                            <div class="col-md-9 col-sm-9 ">
                                <select name="kategori" class="form-control">
                                    <option <?php if ($dt->kategori == 'Fight') {
                                                echo "selected=\"selected\"";
                                            } ?>value="Fight">Fight</option>
                                    <option <?php if ($dt->kategori == 'TGR') {
                                                echo "selected=\"selected\"";
                                            } ?> value="TGR">TGR</option>
                                    <option <?php if ($dt->kategori == 'Serang Hindar') {
                                                echo "selected=\"selected\"";
                                            } ?> value="Serang Hindar">Serang Hindar</option>
                                </select>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9  offset-md-3">
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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