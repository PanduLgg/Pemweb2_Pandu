<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1">
        <tr>
            <thead>No</thead>
            <thead>NIM</thead>
            <thead>Nama</thead>
            <thead>Gender</thead>
            <thead>IPK</thead>
            <thead>Predikat</thead>
        </tr>
        <?php
            $nomor = 1;
            foreach ($list_mhs as $mhs) {
        ?>
        
        <tr>
            <td><?=$nomor; ?></td>
            <td><?=$mhs->$nim; ?></td>
            <td><?=$mhs->$nama; ?></td>
            <td><?=$mhs->$gender; ?></td>
            <td><?=$mhs->$ipk; ?></td>
            <td><?=$mhs->$predikat(); ?></td>


        </tr>

        <?php
            $nomor++;
            
            }
        ?>

    </table>
</body>
</html>