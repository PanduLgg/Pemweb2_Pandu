<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-5 border border-primary px-4 py-5 rounded shadow">
            <form method="POST" action="<?= base_url() ?>dosen/index">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama">
                </div>
                <div class=" mb-3">
                    <label for="nidn" class="form-label">NIDN</label>
                    <input type="text" class="form-control" name="nidn" id="nidn">
                </div>
                <div class="form-group row">
                    <label class="col-2">Gender</label> 
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L"> 
                    <label for="gender_0" class="custom-control-label">L</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P"> 
                    <label for="gender_1" class="custom-control-label">P</label>
                </div>
                </div>
                </div> 
                <div class="mb-3">
                    <label for="pendidikan" class="form-label">Pendidkan</label>
                    <input type="text" class="form-control" name="pendidikan" id="pendidikan">
                </div>
                <button type="submit" name="simpan" class="btn btn-primary w-100">Tambah</button>
            </form>
        </div>
    </div>
</div>

<link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/adminlte.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>