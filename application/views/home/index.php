<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 480px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <!-- <h1 class="m-0 text-dark"> Event</h1> -->
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <!-- <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Event</li>
                    </ol> -->
                    <!-- <?= $this->session->flashdata('message'); ?> -->

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">

                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-center">
                                <h3 class="card-title"><b>Panakkukang</b></h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-sm">
                                <?php foreach ($panakkukang as $p) : ?>
                                    <tbody>
                                        <tr>
                                            <td><a href="<?= base_url() . 'input?id=' . $p['iddesa']; ?> "><?= $p['namakel']; ?></a></td>
                                            <td>
                                                <div class="progress progress-xs progress-striped active">
                                                    <div class="progress-bar bg-primary" style="width: <?= ($p['input'] / $p['tps']) * 100 ?>%"></div>
                                                </div>

                                                <span class="badge <?= ($p['input'] == $p['tps']) ? 'bg-success' : ''; ?>"><?= $p['input']; ?>/<?= $p['tps']; ?> (<?= number_format(($p['input'] / $p['tps']) * 100, 1) ?>%)</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col-md-6 -->
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-center">
                                <h2 class="card-title"><b>Biringkanaya</b></h2>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-sm">
                                <?php foreach ($biringkanaya as $b) : ?>
                                    <tbody>
                                        <tr>
                                            <td><a href="<?= base_url() . 'input?id=' . $b['iddesa']; ?> "><?= $b['namakel']; ?></a></td>
                                            <td>
                                                <div class="progress progress-xs progress-striped active">
                                                    <div class="progress-bar bg-primary" style="width: <?= ($b['input'] / $b['tps']) * 100 ?>%"></div>
                                                </div>
                                                <span class="badge <?= ($b['input'] == $b['tps']) ? 'bg-success' : ''; ?>">
                                                    <?= $b['input']; ?>/<?= $b['tps']; ?>
                                                    (<?= number_format(($b['input'] / $b['tps']) * 100, 1) ?>%)
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col-md-6 -->
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-center">
                                <h2 class="card-title"><b>Manggala</b></h2>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-sm">
                                <?php foreach ($manggala as $m) : ?>
                                    <tbody>
                                        <tr>
                                            <td><a href="<?= base_url() . 'input?id=' . $m['iddesa']; ?> "><?= $m['namakel']; ?></a></td>
                                            <td>
                                                <div class="progress progress-xs progress-striped active">
                                                    <div class="progress-bar bg-primary" style="width: <?= ($m['input'] / $m['tps']) * 100 ?>%"></div>
                                                </div>
                                                <span class="badge <?= ($m['input'] == $m['tps']) ? 'bg-success' : ''; ?>">
                                                    <?= $m['input']; ?>/<?= $m['tps']; ?>
                                                    (<?= number_format(($m['input'] / $m['tps']) * 100, 1) ?>%)
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col-md-6 -->
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-center">
                                <h2 class="card-title"><b>Tamalanrea</b></h2>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-sm">
                                <?php foreach ($tamalanrea as $t) : ?>
                                    <tbody>
                                        <tr>
                                            <td><a href="<?= base_url() . 'input?id=' . $t['iddesa']; ?> "><?= $t['namakel']; ?></a></td>
                                            <td>
                                                <div class="progress progress-xs progress-striped active">
                                                    <div class="progress-bar bg-primary" style="width: <?= ($t['input'] / $t['tps']) * 100 ?>%"></div>
                                                </div>
                                                <span class="badge <?= ($t['input'] == $t['tps']) ? 'bg-success' : ''; ?>">
                                                    <?= $t['input']; ?>/<?= $t['tps']; ?>
                                                    (<?= number_format(($t['input'] / $t['tps']) * 100, 1) ?>%)
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->