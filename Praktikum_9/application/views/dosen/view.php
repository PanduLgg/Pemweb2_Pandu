
<div class="content-wrapper-12">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Biodata Dosen</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        
        <div class="row mb-2">
            <div class="col-sm-8">
            <table class="table table-striped">
                <tr>
                    <th>NIDN</th>
                    <td><?= $detail->nidn ?></td>
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
                    <th>Pendidikan</th>
                    <td><?= $detail->pendidikan_akhir ?></td>
                </tr>
                <tr>
                    <th>Prodi</th>
                    <td><?php echo $detail->prodi_kode ?></td>
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