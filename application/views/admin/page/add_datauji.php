<?php $this->load->view('partials/head.php') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<?php $this->load->view('partials/menu.php') ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Tambah Data Uji</h3>
            <a href="<?= base_url('admin/data_set/data_uji') ?>" style="margin-left: 15px; margin-top: 20px;" class="btn btn-success"><i class="fa fa-chevron-circle-left"></i> Kembali</a>
        </div>
    </div>
    <div class="col-md-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Form Tambah Data uji <small>tambah data uji</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form class="form-horizontal form-label-left" method="post" action="<?= base_url('admin/data_set/save_datauji') ?>">
                    <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Nama Atlet</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="text" name="nama" class="form-control" placeholder="Nama Atlet...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Speed</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="number" class="form-control" name="speed" placeholder="Speed...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Power</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="number" class="form-control" name="power" placeholder="Power...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Stamina</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="number" class="form-control" name="stamina" placeholder="Stamina...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Agility</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="number" class="form-control" name="agility" placeholder="Agility...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Kedisiplinan</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="number" class="form-control" name="kedisiplinan" placeholder="kedisiplinan...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Gerak/Teknik</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="number" class="form-control" name="teknik" placeholder="Gerak Teknik...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Kategori</label>
                        <div class="col-md-9 col-sm-9 ">
                            <select name="kategori" class="form-control">
                                <option value="Fight">Fight</option>
                                <option value="TGR">TGR</option>
                                <option value="Serang Hindar">Serang Hindar</option>
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
        </div>
    </div>
</div>
<?php $this->load->view('partials/footer.php') ?>
<?php $this->load->view('partials/js.php') ?>