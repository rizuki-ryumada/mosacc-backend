<!DOCTYPE html>
<html lang="en">

<head>
    <!-- head -->
    <?php $this->load->view("acc/_partials/head"); ?>
    <!-- /head -->
</head>

<body>
    <div class="container-fluid">
        <?php $this->load->view("acc/_partials/sidebar"); ?>
    </div>

    <div>
        <!-- navbar&&sidebar -->

        <?php $this->load->view("acc/_partials/navbar"); ?>
        <!-- /navbar&&sidebar -->
    </div>

    <!-- preloader -->
    <?php $this->load->view('acc/_partials/preloader.php') ?>
    <!-- preloader -->

    <div class="content">

        <div class="row">
            <div class="col s12 m1"></div>
            <div class="col s12 m3">
                <div class="card">
                    <div class="card-image">
                        <img src="<?php echo site_url('assets/images/laporan_keuangan/ilustrasi-laporan-posisi-keuangan.jpg'); ?>" width="200" height="300">
                        <span class="card-title card-title-text">Posisi Keuangan (Neraca)</span>
                        <a class="btn-floating halfway-fab btn-large waves-effect waves-light red modal-trigger" href="<?php echo base_url('acc/laporan_keuangan/laporan_neraca'); ?>"><i class="material-icons">launch</i></a>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information. I am convenient
                            because I require little markup to use effectively.</p>

                        <div id="rutin1" class="modal">
                            <div class="modal-content">
                                <h4>Posisi Keuangan (Neraca)</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col s12 m3">
                <div class="card">
                    <div class="card-image">
                        <img src="<?php echo site_url('assets/images/laporan_keuangan/ilustrasi-laporan-aktivitas.jpg'); ?>" width="200" height="300">
                        <span class="card-title card-title-text">Laporan Aktivitas</span>
                        <a class="btn-floating halfway-fab btn-large waves-effect waves-light red modal-trigger" href="<?php echo base_url('acc/laporan_keuangan/laporan_aktivitas'); ?>"><i class="material-icons">launch</i></a>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information. I am convenient
                            because I require little markup to use effectively.</p>
                    </div>
                </div>
            </div>

            <div class="col s12 m3">
                <div class="card">
                    <div class="card-image">
                        <img src="<?php echo site_url('assets/images/laporan_keuangan/ilustrasi-laporan-arus-kas.jpg'); ?>" width="200" height="300">
                        <span class="card-title card-title-text">Arus Kas</span>
                        <a class="btn-floating halfway-fab btn-large waves-effect waves-light red modal-trigger" href="<?php echo base_url('acc/laporan_keuangan/laporan_arus_kas'); ?>"><i class="material-icons">launch</i></a>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information. I am convenient
                            because I require little markup to use effectively.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view("acc/_partials/js"); ?>
</body>