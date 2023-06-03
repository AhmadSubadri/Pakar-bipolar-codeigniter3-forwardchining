<?php $this->load->view('admin/partials/alert.php'); ?>
<div class="row">
    <div class="col-lg-12 d-flex align-items-strech">
        <div class="card w-100">
            <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9 alert alert-success">
                    <div class="mb-3 mb-sm-0">
                        <h5 class="card-title fw-semibold">Data Rule Add</h5>
                    </div>
                </div>
                <form action="<?= site_url('data-rule/insert'); ?>" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Kode Rule</label>
                                <input type="text" class="form-control" name="kode_rule" id="exampleInputEmail1" placeholder="Ex. R01" aria-describedby="emailHelp" />
                                <div id="emailHelp" class="form-text text-danger">
                                    <?= form_error('kode_rule') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label">Penyakit</label>
                                <select id="disabledSelect" name="kode_penyakit" class="form-select">
                                    <option class="disabled">-- elect penyakit --</option>
                                    <?php foreach ($penyakit->result() as $sakit) : ?>
                                        <option value="<?= $sakit->kode_penyakit; ?>"><?= $sakit->nama_penyakit; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div id="emailHelp" class="form-text text-danger">
                                    <?= form_error('kode_penyakit') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Kode Gejala (Gunakan Spasi)</label>
                                <input type="text" class="form-control" name="kode_gejala" id="exampleInputEmail1" placeholder="Ex. G01 G02 G03 G04" aria-describedby="emailHelp" />
                                <div id="emailHelp" class="form-text text-danger">
                                    <?= form_error('kode_gejala') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-primary btn-sm">
                                Submit
                            </button>
                        </div>
                        <div class="col-sm-6">
                            <a href="<?= site_url('data-rule') ?>" class="btn btn-sm btn-danger m-1">Cancle</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>