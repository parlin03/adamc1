<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="col d-flex justify-content-center">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"><?= $title; ?></h1>
                    </div><!-- /.col -->
                    <!-- <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v2</li>
                    </ol>
                </div>/.col -->
                </div><!-- /.row -->

            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="col d-flex justify-content-center">

                <div class="row">
                    <div class="col-sm-12 ">
                        <div class="card">
                            <div class="card-header" style="text-align: center;">
                                <b> Kelurahan <?= $head; ?> </b>
                            </div>
                            <form action="<?= base_url('input/add'); ?>" method="POST" enctype="multipart/form-data">
                                <div class="card-body ">
                                    <!-- <input type="hidden" readonly value="<?= $t['id_tps']; ?>" name="id_tps" class="form-control"> -->
                                    <input type="hidden" readonly value="<?= $kel; ?>" name="iddesa" class="form-control">
                                    <input type="hidden" readonly value="<?= $kec->idkec; ?>" name="idkec" class="form-control">

                                    <div class="form-group row">
                                        <label for="id_tps" class="col-sm-9 col-form-label">TPS</label>
                                        <div class="col-sm-3">
                                            <select class="form-control" id="id_tps" name="id_tps">
                                                <?php
                                                foreach ($tps as $m) :  ?>
                                                    <option value="<?= $m['id_tps']; ?>"> <?= $m['tps']; ?> </option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label for="jml_suara0" class="col-sm-9 col-form-label">Suara Partai</label>
                                        <div class="col-sm-3">
                                            <input type="number" class="form-control" id="jml_suara0" onkeyup="sum();" onmouseup="sum();" name="jml_suara0" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jml_suara1" class="col-sm-9 col-form-label">1. H. ADAM MUHAMMAD, ST, M.SI</label>
                                        <div class="col-sm-3">
                                            <input type="number" class="form-control" id="jml_suara1" onkeyup="sum();" onmouseup="sum();" name="jml_suara1" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jml_suara2" class="col-sm-9 col-form-label">2. A M IRWAN PATAWARI, S.Si</label>
                                        <div class="col-sm-3">
                                            <input type="number" class="form-control" id="jml_suara2" onkeyup="sum();" onmouseup="sum();" name="jml_suara2" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jml_suara3" class="col-sm-9 col-form-label">3. Hj. NURIMBAYANI DASSIR, S.S</label>
                                        <div class="col-sm-3">
                                            <input type="number" class="form-control" id="jml_suara3" onkeyup="sum();" onmouseup="sum();" name="jml_suara3" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jml_suara4" class="col-sm-9 col-form-label">4. HENRY BATARA</label>
                                        <div class="col-sm-3">
                                            <input type="number" class="form-control" id="jml_suara4" onkeyup="sum();" onmouseup="sum();" name="jml_suara4" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jml_suara5" class="col-sm-9 col-form-label">5. RESKI AMELIA, S. Farm</label>
                                        <div class="col-sm-3">
                                            <input type="number" class="form-control" id="jml_suara5" onkeyup="sum();" onmouseup="sum();" name="jml_suara5" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jml_suara6" class="col-sm-9 col-form-label">6. Dr. SYAMSUDDIN NUR, SH, MH, CPM</label>
                                        <div class="col-sm-3">
                                            <input type="number" class="form-control" id="jml_suara6" onkeyup="sum();" onmouseup="sum();" name="jml_suara6" required>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label for="jml_sah" class="col-sm-9 col-form-label">Jumlah Suara</label>
                                        <div class="col-sm-3">
                                            <input type="number" class="form-control" id="jml_sah" name="jml_sah">
                                        </div>
                                    </div>
                                    <!-- <div class="form-group row">
                                        <label for="jml_rusak" class="col-sm-9 col-form-label">Suara Tidak Sah</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="jml_rusak" name="jml_rusak">
                                        </div>
                                    </div> -->
                                </div>
                                <!-- /card-body -->

                                <div class="card-footer">
                                    <div class="row">

                                        <div class="col-sm-6 d-flex justify-content-center mt-3 mb-3">
                                            <a href="<?= base_url(); ?>" class="btn btn-secondary">Cancel</a>
                                        </div>
                                        <div class="col-sm-6 d-flex justify-content-center mt-3 mb-3">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script>
    function sum() {
        var jmlSuara0 = document.getElementById('jml_suara0').value;
        var jmlSuara1 = document.getElementById('jml_suara1').value;
        var jmlSuara2 = document.getElementById('jml_suara2').value;
        var jmlSuara3 = document.getElementById('jml_suara3').value;
        var jmlSuara4 = document.getElementById('jml_suara4').value;
        var jmlSuara5 = document.getElementById('jml_suara5').value;
        var jmlSuara6 = document.getElementById('jml_suara6').value;
        var result = parseInt(jmlSuara0) + parseInt(jmlSuara1) +
            parseInt(jmlSuara2) + parseInt(jmlSuara3) + parseInt(jmlSuara4) +
            parseInt(jmlSuara5) + parseInt(jmlSuara6);
        if (!isNaN(result)) {
            document.getElementById('jml_sah').value = result;
        }
    }
</script>