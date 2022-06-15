<div class="content-wrapper-12">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Biodata Mahasiswa</h3>

        </div>
        <div class="card-body">
        
        <div class="row mb-2">
            <div class="col-sm-8">
            <table class="table table-striped">
                <tr>
                    <th>NIM</th>
                    <td><?= $detail->nim ?></td>
                </tr>
                <tr>
                    <th>Nama Lengkap</th>
                    <td><?= $detail->nama ?></td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td><?= $detail->gender ?></td>
                </tr>
                <tr>
                    <th>Tempat, Tanggal Lahir</th>
                    <td><?= $detail->tmp_lahir ?>, <?= $detail->tgl_lahir ?></td>
                </tr>
                <tr>
                    <th>IPK</th>
                    <td><?= $detail->ipk ?></td>
                </tr>
                <tr>
                    <th>Prodi</th>
                    <td><?= $detail->prodi_kode ?></td>
                </tr>
            </table>
            </div>
            <div class="col-sm-4">
                Ini Foto
            </div>
        </div>

        </div>

    </div>
    <!-- /.card -->

    </section>
    <!-- /.content -->
</div>

<link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/adminlte.min.css">   