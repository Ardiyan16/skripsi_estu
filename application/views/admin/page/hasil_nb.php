<?php $this->load->view('partials/head.php') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<?php $this->load->view('partials/menu.php') ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3><i class="fa fa-table"></i> Hasil Perhitungan Naive Bayes</h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Hasil perhitungan</h2>
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
                            <h5>Hasil keputusan atlet dengan nama <?= $nama ?></h5>
                            <h5>Nilai Fight = <?= $fight ?></h5>
                            <h5>Nilai TGR = <?= $tgr ?></h5>
                            <h5>Nilai Serang Hindar = <?= $serhin ?></h5>
                            <h5>Hasil Fight = <?= $hasil_fight ?></h5>
                            <h5>Hasil TGR = <?= $hasil_tgr ?></h5>
                            <h5>Hasil Serang Hindar = <?= $hasil_serhin ?></h5>
                            <h5>Keputusan pada kategori = <?= $keputusan ?></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('partials/footer.php') ?>
<?php $this->load->view('partials/js.php') ?>