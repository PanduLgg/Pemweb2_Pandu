<div class="col-md-12">
    <h1>
        Daftar Mahasiswa
    </h1>
    <div>
        <a href="<?= base_url(), 'mahasiswa/create' ?>" class="btn btn-primary">Tambah</a>
    </div>

    <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th><th>NIM</th><th>Nama</th><th>Gender</th><th>IPK</th><th>Predikat</th>
            </tr>
        </thead>
        <tbody>

    
    <tr>

        <td><?=$mhs->nama?></td>
        <td><?=$mhs->nim?></td>
        <td><?=$mhs->gender?></td>
        <td><?=$mhs->ipk?></td>
        <td><?=$mhs->predikat()?></td>
    </tr>

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