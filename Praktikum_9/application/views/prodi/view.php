<div class="content-wrapper-12">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Detail Prodi</h3>

        </div>
        <div class="card-body">
        
        <div class="row mb-2">
            <div class="col-sm-8">
            <table class="table table-striped">
                <tr>
                    <th>Kode</th>
                    <td><?= $detail->kode ?></td>
                </tr>
                <tr>
                    <th>Nama Prodi</th>
                    <td><?= $detail->nama ?></td>
                </tr>
                <tr>
                    <th>Kepala Prodi</th>
                    <td><?= $detail->kaprodi ?></td>
                </tr>
            </table>
            </div>
            <div class="col-sm-4">
                Ini Lambang
            </div>
        </div>

        </div>

    </div>
    <!-- /.card -->

    </section>
    <!-- /.content -->
</div>

<link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/adminlte.min.css">   