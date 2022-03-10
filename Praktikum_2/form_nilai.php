<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>PHP_Praktik2</title>
    <style>
        nav {
            margin : 0 0 30px 0;
            height : 65px;
        }
    </style>    

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <span class="navbar-brand mb-0 h1">Sistem Penilaian</span>
</nav>


    <form method="POST" action="nilai_siswa.php">
        <div class="col-8">
            Nama Lengkap :
            <input type="text" name="nama" value="" size="30" class="form-control" placeholder="Nama Mahasiswa"/><br/>
        </div>
        <div class="col-8">
            Mata Kuliah :
            <select name="matkul" class="form-control">
                <option value="DDP">Dasar Dasar Pemrograman</option>
                <option value="BDI">Basis Data I</option>
                <option value="WEB1">Pemrograman Web</option>
            </select><br/>
        </div>
        <div class="col-8">
            Nilai UTS : 
            <input type="text" name="nilai_uts" value="" size="6" class="form-control" placeholder="Masukkan Nilai UTS"/><br/>
        </div>
        <div class="col-8">
            Nilai UAS : 
            <input type="text" name="nilai_uas" value="" size="6" class="form-control" placeholder="Masukkan Nilai UAS"/><br/>
        </div>
        <div class="col-8">
            Nilai Tugas Praktikum :
            <input type="text" name="nilai_tugas" value="" size="6" class="form-control" placeholder="Masukkan Nilai Tugas"/><br/>
        </div>
        <div class="col-8">
            <input type="submit" name="proses" value="SIMPAN" class="btn btn-primary"/>
        </div>
    </form>

    


<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top: 30px;">
    Develop By STT NF 2022
</nav>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

</body>

</html>