<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>PHP_Praktik2.1</title>
    <style>
        main {
            padding : 20px;
        }
    </style>    

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <span class="navbar-brand mb-0 h1">Sistem Penilaian</span>
</nav>

<main>
<?php
    function grade($nilai_total) {
        if($nilai_total <= 100 ) {$grade = "A";}
        if($nilai_total < 85 ) {$grade = "B";}
        if($nilai_total < 70 ) {$grade = "C";}
        if($nilai_total < 56 ) {$grade = "D";}
        if($nilai_total < 36 ) {$grade = "E";}
        if($nilai_total < 0 ) {$grade = "I";}
        if($nilai_total > 100 ) {$grade = "I";}

        return $grade;
    }

    function lulus($nilai_total) {
        if($nilai_total > 55 ) {$lulus = "Lulus";}
        if($nilai_total <= 55 ) {$lulus = "Tidak Lulus";}

        return $lulus;
    }
?>


<!--Data -->
<?php
        $proses = $_POST['proses'];
        $nama_siswa = $_POST['nama'];
        $mata_kuliah = $_POST['matkul'];
        $nilai_uts = $_POST['nilai_uts'];
        $nilai_uas = $_POST['nilai_uas'];
        $nilai_tugas = $_POST['nilai_tugas'];

        $nilai_total = ($nilai_uts*0.30)+ ($nilai_uas*0.35)+ ($nilai_tugas*0.35); 
        $lulus = lulus($nilai_total);
        $grade =  grade($nilai_total);
        $predikat = $predikat;

        if(!empty($proses)) {
            echo 'Proses : ' .$proses;
            echo '<br/>Nama Lengkap  : ' .$nama_siswa;
            echo '<br/>Mata Kuliah  : ' .$mata_kuliah;
            echo '<br/>Nilai UTS  : ' .$nilai_uts;
            echo '<br/>Nilai UAS  : ' .$nilai_uas;
            echo '<br/>Nilai Tugas Praktikum  : ' .$nilai_tugas;
            echo '<br/>Nilai Total  : ' .$nilai_total;
            echo '<br/>Anda Dinyatakan  : ' .$lulus;
            echo '<br/>Grade Anda  : ' .$grade;
            echo '<br/>Predikat Anda : ';

        }
?>

<?php
    switch ($grade) {
        case "A" :
            echo "Sangat Memuaskan";
            break;
        case "B" :
            echo "Memuaskan";
            break;
        case "C" :
            echo "Cukup";
            break;
        case "D" :
            echo "Kurang";
            break;
        case "E" :
            echo "Sangat Kurang";
            break;
        default :
            echo "Tidak Ada";
    }

?>



    
</main

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

</body>

</html>