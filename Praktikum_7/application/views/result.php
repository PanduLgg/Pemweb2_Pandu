<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="col-md-12">
    <h1>DATA MAHASISWA</h1>

    <table border="1" class="table">
        <thead>
            <tr>
                <th>Nama</th><th>NIM</th><th>Gender</th><th>Tempat Lahir</th><th>Tanggal Lahir</th><th>IPK</th>
            </tr>
        </thead>
        <tbody>

    <tr>
        <td><?= $nama; ?></td>
        <td><?= $nim; ?></td>
        <td><?= $gender; ?></td>
        <td><?= $tmp_lahir ?></td>
        <td><?= $tgl_lahir; ?></td>
        <td><?= $ipk; ?></td>
    </tr>

        </tbody>
    </table>
</body>


<link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/adminlte.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</html>