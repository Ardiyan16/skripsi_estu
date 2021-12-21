<?php $this->load->view('partials/head.php') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<?php $this->load->view('partials/menu.php') ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3><i class="fa fa-table"></i> Hitung Nilai Atlet</h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Hitung Nilai Atlet</h2>
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
                                                <a href="#editnilai<?= $n->id_nilai ?>" data-toggle="modal" class="btn btn-success btn-sm"><i class="fa fa-calculator"></i> Hitung</a>
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
<?php $this->load->view('partials/js.php') ?>