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

    ?>
   
<h2 class="text-center mb-4 mt-3">Kalkulator BMI</h2>

<div class="container">
        <div class="row">
            <div class="col-12">
                    <form method="POST" action="kalkulator.php">
                        <div class="form-group row">
                        <label for="nama" class="col-2 col-form-label">Nama</label> 
                        <div class="col-10">
                            <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <i class="fa fa-user"></i>
                                </div>
                            </div> 
                            <input id="nama" name="nama" placeholder="Nama Anda" type="text" required="required" class="form-control">
                            </div>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="berat" class="col-2 col-form-label">Berat (kg)</label> 
                        <div class="col-10">
                            <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <i class="fa fa-male"></i>
                                </div>
                            </div> 
                            <input id="berat" name="berat" placeholder="Berat Badan Anda dalam Kilogram" type="text" required="required" class="form-control">
                            </div>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="tinggi" class="col-2 col-form-label">Tinggi (cm)</label> 
                        <div class="col-10">
                            <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <i class="fa fa-male"></i>
                                </div>
                            </div> 
                            <input id="tinggi" name="tinggi" placeholder="Tinggi Badan Anda dalam Centimeter" type="text" required="required" class="form-control">
                            </div>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="text" class="col-2 col-form-label">Tanggal Periksa</label> 
                        <div class="col-10">
                            <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <i class="fa fa-calendar"></i>
                                </div>
                            </div> 
                            <input id="text" name="tanggal" placeholder="yyyy-mm-dd" type="text" aria-describedby="textHelpBlock" required="required" class="form-control">
                            </div> 
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-2">Jenis Kelamin</label> 
                        <div class="col-10">
                            <div class="custom-control custom-radio custom-control-inline">
                            <input name="gender" id="radio_0" type="radio" class="custom-control-input" value="L" required="required"> 
                            <label for="radio_0" class="custom-control-label">Laki-Laki</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                            <input name="gender" id="radio_1" type="radio" class="custom-control-input" value="P" required="required"> 
                            <label for="radio_1" class="custom-control-label">Perempuan</label>
                            </div>
                        </div>
                        </div> 
                        <div class="form-group row">
                        <div class=" col-12">
                        <button type="submit" class="btn btn-primary btn-block">HITUNG</button>
                        </div>
                        </div>
                    </form>
            </div>

        </div>


    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
</body>
</html>