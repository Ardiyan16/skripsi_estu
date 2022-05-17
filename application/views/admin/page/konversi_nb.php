<?php $this->load->view('partials/head.php') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<?php $this->load->view('partials/menu.php') ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Konvert Data Uji</h3>
            <a href="<?= base_url('admin/data_set/perhitungan_nb') ?>" style="margin-left: 15px; margin-top: 20px;" class="btn btn-success"><i class="fa fa-chevron-circle-left"></i> Kembali</a>
        </div>
    </div>
    <div class="col-md-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Form Konvert <small>konversi data uji</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form class="form-horizontal form-label-left" method="post" action="<?= base_url('admin/data_set/perhitungan_naivebayes') ?>">
                    <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Nama Atlet</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="text" name="nama" value="<?= $nilai->nama ?>" class="form-control" readonly placeholder="Nama Atlet...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Speed</label>
                        <div class="col-md-9 col-sm-9 ">
                            <select name="speed" class="form-control" required="">
                                <option value="">Nilai...</option>
                                <option value="A" <?php if ($nilai->speed >= 80 && $nilai->speed <= 100) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>A</option>
                                <option value="B" <?php if ($nilai->speed >= 68 && $nilai->speed <= 79) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>B</option>
                                <option value="C" <?php if ($nilai->speed >= 56 && $nilai->speed <= 67) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>C</option>
                                <option value="D" <?php if ($nilai->speed >= 45 && $nilai->speed <= 55) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>D</option>
                                <option value="E" <?php if ($nilai->speed > 0 && $nilai->speed < 45) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>E</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Power</label>
                        <div class="col-md-9 col-sm-9 ">
                            <select name="power" class="form-control" required="">
                                <option value="">Nilai...</option>
                                <option value="A" <?php if ($nilai->power >= 80 && $nilai->power <= 100) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>A</option>
                                <option value="B" <?php if ($nilai->power >= 68 && $nilai->power <= 79) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>B</option>
                                <option value="C" <?php if ($nilai->power >= 56 && $nilai->power <= 67) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>C</option>
                                <option value="D" <?php if ($nilai->power >= 45 && $nilai->power <= 55) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>D</option>
                                <option value="E" <?php if ($nilai->power > 0 && $nilai->power < 45) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>E</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Stamina</label>
                        <div class="col-md-9 col-sm-9 ">
                            <select name="stamina" class="form-control" required="">
                                <option value="">Nilai...</option>
                                <option value="A" <?php if ($nilai->stamina >= 80 && $nilai->stamina <= 100) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>A</option>
                                <option value="B" <?php if ($nilai->stamina >= 68 && $nilai->stamina <= 79) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>B</option>
                                <option value="C" <?php if ($nilai->stamina >= 56 && $nilai->stamina <= 67) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>C</option>
                                <option value="D" <?php if ($nilai->stamina >= 45 && $nilai->stamina <= 55) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>D</option>
                                <option value="E" <?php if ($nilai->stamina > 0 && $nilai->stamina < 45) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>E</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Agility</label>
                        <div class="col-md-9 col-sm-9 ">
                            <select name="agility" class="form-control" required="">
                                <option value="">Nilai...</option>
                                <option value="A" <?php if ($nilai->agility >= 80 && $nilai->agility <= 100) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>A</option>
                                <option value="B" <?php if ($nilai->agility >= 68 && $nilai->agility <= 79) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>B</option>
                                <option value="C" <?php if ($nilai->agility >= 56 && $nilai->agility <= 67) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>C</option>
                                <option value="D" <?php if ($nilai->agility >= 45 && $nilai->agility <= 55) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>D</option>
                                <option value="E" <?php if ($nilai->agility > 0 && $nilai->agility < 45) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>E</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Kedisiplinan</label>
                        <div class="col-md-9 col-sm-9 ">
                            <select name="kedisiplinan" class="form-control" required="">
                                <option value="">Nilai...</option>
                                <option value="A" <?php if ($nilai->kedisiplinan >= 80 && $nilai->kedisiplinan <= 100) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>A</option>
                                <option value="B" <?php if ($nilai->kedisiplinan >= 68 && $nilai->kedisiplinan <= 79) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>B</option>
                                <option value="C" <?php if ($nilai->kedisiplinan >= 56 && $nilai->kedisiplinan <= 67) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>C</option>
                                <option value="D" <?php if ($nilai->kedisiplinan >= 45 && $nilai->kedisiplinan <= 55) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>D</option>
                                <option value="E" <?php if ($nilai->kedisiplinan > 0 && $nilai->kedisiplinan < 45) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>E</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Gerak/Teknik</label>
                        <div class="col-md-9 col-sm-9 ">
                            <select name="teknik" class="form-control" required="">
                                <option value="">Nilai...</option>
                                <option value="A" <?php if ($nilai->teknik >= 80 && $nilai->teknik <= 100) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>A</option>
                                <option value="B" <?php if ($nilai->teknik >= 68 && $nilai->teknik <= 79) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>B</option>
                                <option value="C" <?php if ($nilai->teknik >= 56 && $nilai->teknik <= 67) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>C</option>
                                <option value="D" <?php if ($nilai->teknik >= 45 && $nilai->teknik <= 55) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>D</option>
                                <option value="E" <?php if ($nilai->teknik > 0 && $nilai->teknik < 45) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>E</option>
                            </select>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9  offset-md-3">
                            <button type="submit" class="btn btn-success">Hitung Naive Bayes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('partials/footer.php') ?>
<?php $this->load->view('partials/js.php') ?>