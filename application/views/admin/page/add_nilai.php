<?php $this->load->view('partials/head.php') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<?php $this->load->view('partials/menu.php') ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Tambah Nilai Atlet</h3>
            <a href="<?= base_url('admin/admin/v_data_nilai') ?>" style="margin-left: 15px; margin-top: 20px;" class="btn btn-success"><i class="fa fa-chevron-circle-left"></i> Kembali</a>
        </div>
    </div>
    <div class="col-md-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Form Tambah Nilai <small>hasil test atlet</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form class="form-horizontal form-label-left" method="post" action="<?= base_url('admin/admin/save_nilai') ?>">

                    <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Nama Atlet</label>
                        <div class="col-md-7 col-sm-9 ">
                            <input type="text" name="nama" class="form-control" placeholder="Nama Atlet...">
                            <input type="hidden" name="id_user" id="nilai" value="">
                        </div>
                        <div class="col-md-2 col-sm-9 ">
                            <a href="#atlet" data-toggle="modal" class="btn btn-primary"><i class="fa fa-search"></i> Pilih Atlet</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 "> Asal Unit</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="text" class="form-control" name="asal_unit" placeholder="Asal Unit...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 "> Nilai Speed</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="number" class="form-control" name="speed" placeholder="Nilai Speed...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 "> Nilai Power</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="number" class="form-control" name="power" placeholder="Nilai Power...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Nilai Stamina</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="number" class="form-control" name="stamina" placeholder="Nilai Stamina...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Nilai Agility</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="number" class="form-control" name="agility" placeholder="Nilai Agility...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Nilai Kedisiplinan</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="number" class="form-control" name="kedisiplinan" placeholder="Nilai kedisiplinan...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Nilai Gerak/Teknik</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="number" class="form-control" name="gerak_teknik" placeholder="Nilai Gerak Teknik...">
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9  offset-md-3">
                            <button type="submit" class="btn btn-success">Simpan Nilai</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="atlet" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Data Atlet</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Pilih</th>
                                        <th>Nama</th>
                                        <th>Asal Unit/Ranting</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($user as $u) : ?>
                                        <tr>
                                            <td><input type="checkbox" class="checked" id="id" name="id_user" value="<?= $u->id ?>"></td>
                                            <td><?= $u->nama ?></td>
                                            <td><?= $u->asal_unit ?></td>
                                            <td><?= $u->email ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary pilihan" data-dismiss="modal">Pilih</button>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('partials/footer.php') ?>
<script>
    $('.pilihan').click(function(e) {
        e.preventDefault();
        var arr = [];
        var checkedValue = $(".checked:checked").val();
        console.log('checked', checkedValue);
        //$('#tambahpenggajian').modal('show');
        $.ajax({
            url: "<?php echo base_url('admin/admin/user_id/') ?>" + checkedValue,
            type: "GET",
            dataType: "JSON",
            success: function(result) {
                $('[name="id_user"]').val(result.id);
                //$('[name="id_invoices"]').val(result.id_service);
                $('[name="nama"]').val(result.nama);
                $('[name="asal_unit"]').val(result.asal_unit);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Data Eror');
            }
        })
    });

    $(".checked").on("click", function() {
        if ($(".checked:checked").length < 2) {
            $('.pilihan').prop('disabled', false);
        } else {
            $('.pilihan').prop('disabled', true);
        }
    });
</script>
<?php $this->load->view('partials/js.php') ?>