<?php $this->load->view('admin/partials/alert.php'); ?>
<div class="row">
    <div class="col-lg-3">
        <div class="card overflow-hidden">
            <div class="card-body p-4">
                <h5 class="card-title mb-9 fw-semibold">Data Penyakit</h5>
                <div class="row align-items-center">
                    <div class="col-4">
                        <div class="d-flex justify-content-center">
                            <i class="ti ti-article"></i>
                        </div>
                    </div>
                    <div class="col-8">
                        <h3><?= count($penyakit->result()); ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card overflow-hidden">
            <div class="card-body p-4">
                <h5 class="card-title mb-9 fw-semibold">Data Gejala</h5>
                <div class="row align-items-center">
                    <div class="col-4">
                        <div class="d-flex justify-content-center">
                            <i class="ti ti-cards"></i>
                        </div>
                    </div>
                    <div class="col-8">
                        <h3><?= count($gejala->result()); ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card overflow-hidden">
            <div class="card-body p-4">
                <h5 class="card-title mb-9 fw-semibold">Data Riwayat</h5>
                <div class="row align-items-center">
                    <div class="col-4">
                        <div class="d-flex justify-content-center">
                            <i class="ti ti-history-toggle"></i>
                        </div>
                    </div>
                    <div class="col-8">
                        <h3><?= count($riwayat->result()); ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card overflow-hidden">
            <div class="card-body p-4">
                <h5 class="card-title mb-9 fw-semibold">Data Pasisen</h5>
                <div class="row align-items-center">
                    <div class="col-4">
                        <div class="d-flex justify-content-center">
                            <i class="ti ti-user fs-6"></i>
                        </div>
                    </div>
                    <div class="col-8">
                        <h3><?= count($pasien->result()); ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 d-flex align-items-strech">
        <div class="card w-100">
            <div class="card-body text-center">
                <h2>IMPLEMENTASI METODE FORWARD CHAINING<br>PADA SISTEM PAKAR DIAGNOSA<br>PENYAKIT GANGGUAN BIPOLAR</h2>
            </div>
        </div>
    </div>
</div>