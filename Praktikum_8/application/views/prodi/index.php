<div class="col-md-12">
    <h1>
        Daftar Nama Prodi
    </h1>

    <div>
        <a href="<?= base_url(), 'prodi/create' ?>" class="btn btn-primary">Tambah</a>
    </div>
    <br>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th><th>KODE</th><th>Nama Prodi</th><th>Kepala Prodi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $nomor = 1;
                foreach($list_prodi as $row) {
            ?>  
                <tr>
                    <td><?= $nomor ?></td>    
                    <td><?= $row->kode ?></td>         
                    <td><?= $row->nama ?></td>
                    <td><?= $row->kaprodi ?></td>  
                </tr>
            <?php   
                $nomor++;    
                }
            ?>
        </tbody>
    </table>
</div>


<link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/adminlte.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>