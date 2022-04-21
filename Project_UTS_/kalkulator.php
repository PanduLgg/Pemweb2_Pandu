<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <title>BMI (Body Mass Index)</title>
</head>
<body class="mx-2">
    <?php

    include_once 'class_pasien.php';
    include_once 'class_bmi.php';
    include_once 'class_bmipasien.php';

    $_nama = $_POST['nama'];
    $_berat = $_POST['berat'];
    $_tinggi = $_POST['tinggi']; 
    $_tanggal = $_POST['tanggal'];
    $_gender = $_POST['gender'];
    
    $p1 = new Pasien("P001", "Ahmad", "L");
    $p2 = new Pasien("P002", "Rina", "P");
    $p3 = new Pasien("P003", "Lutfi", "L");
    $p4 = new Pasien("P004", $_nama, $_gender);

    $b1 = new BMI(69.8);
    $b1->tinggi = 169;
    $b2 = new BMI(80);
    $b2->tinggi = 161;
    $b3 = new BMI(45.2);
    $b3->tinggi = 171;
    $b4 = new BMI($_berat);
    $b4->tinggi = $_tinggi;

    $bp1 = new BMIPasien("2022-01-10", $p1, $b1);
    $bp2 = new BMIPasien("2022-01-10", $p2, $b2);
    $bp3 = new BMIPasien("2022-01-11", $p3, $b3);
    $bp4 = new BMIPasien($_tanggal, $p4, $b4);

    $ar_tampil = [$bp1, $bp2, $bp3, $bp4];

    ?>

    <h2 class="text-center mb-4 mt-3">Kalkulator BMI</h2>

    <table class="table table-bordered mb-5" border="1" width="100%">
    <thead class="table-info">
        <tr>
            <th>No</th><th>Tanggal Periksa</th><th>Kode Pasien</th>
            <th>Nama Pasien</th><th>Gender</th><th>Berat (kg)</th><th>Tinggi (cm)</th><th>Nilai BMI</th><th>Status BMI</th>
        </tr>
    </thead>

    <tbody>
        <?php
            $nomor=1;
            foreach($ar_tampil as $row){
        ?>
            <tr>
            <td><?=$nomor?></td>
            <td><?=$row->tanggal?></td>
            <td><?=$row->pasien->kode?></td>    
            <td><?=$row->pasien->nama?></td>
            <td><?=$row->pasien->gender?></td>
            <td><?=$row->bmi->berat?></td>
            <td><?=$row->bmi->tinggi?></td>
            <td><?=$row->bmi->nilaiBMI()?></td>
            <td><?=$row->bmi->statusBMI()?></td>


            </tr>
        <?php
            $nomor++;
            }
        ?>
    </tbody>
    </table>

    <div class="col-12" style="text-align:center;">
                <div class="col-12">
                <ul class="list-group">
                    <li class="list-group-item" aria-current="true">Interpretasi BMI</li>
                    <li class="list-group-item list-group-item-warning">Kekurangan Bobot (< 18.5)</li>
                    <li class="list-group-item list-group-item-success">Ideal (18.5 - 23.9)</li>
                    <li class="list-group-item list-group-item-warning">Kelebihan Bobot (24 - 26.9)</li>
                    <li class="list-group-item list-group-item-danger">Obesitas (> 27)</li>
                </ul>
            </div>

            <br>
            </div>


    
    </div>

<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>