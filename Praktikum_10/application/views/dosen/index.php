<div class="col-md-12">
    <h1>
        Daftar Dosen
    </h1>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
    Tambah Dosen
    </button>
    <br>
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Form Dosen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?= base_url(). 'dosen/create'; ?>">
                <div class="mb-3">
                    <label for="nidn" class="form-label">NIDN</label>
                    <input type="text" class="form-control" name="nidn" id="nidn" required>
                </div>
                <div class=" mb-3">
                    <label for="nama" class="form-label">Nama </label>
                    <input type="text" class="form-control" name="nama" id="nama" required>
                </div>
                <div class="form-group row">
                  <label class="col-4">Gender</label> 
                <div class="custom-control custom-radio custom-control-inline" required>
                    <input name="gender" id="gender_0" type="radio" class="sr-only" value="L" required> 
                    <label for="gender_0" class="custom-control-label">L</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_1" type="radio" class="sr-only" value="P" required> 
                    <label for="gender_1" class="custom-control-label">P</label>
                </div>
                </div>
                <div class=" mb-3">
                    <label for="pendidikan_akhir" class="form-label">Pendidikan Akhir</label>
                    <input type="text" class="form-control" name="pendidikan_akhir" id="pendidikan_akhir" required>
                </div>
                <div class="form-group">
                    <label for="prodi_kode">Kode Prodi</label>
                    <select class="form-control" name="prodi_kode" id="prodi_kode" required>
                    <option>TI</option>
                    <option>SI</option>
                    <option>BD</option>
                    </select>
                </div>
                <div class="">
                    <button type="submit" name="simpan" class="btn btn-primary w-100">Tambah</button>
                </div>
                </div>
                </div>
        </form>
      </div>
      
    </div>
  </div>
    <br>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th><th>NIDN</th><th>Nama</th><th>Gender</th><th>Pendidikan</th><th>Kode Prodi</th><th>Option</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $nomor = 1;
                foreach($dosen as $row) :
            ?>  
                <tr>
                    <td><?= $nomor++ ?></td>    
                    <td><?= $row->nidn ?></td>         
                    <td><?= $row->nama ?></td>
                    <td><?= $row->gender ?></td> 
                    <td><?= $row->pendidikan_akhir ?></td>  
                    <td><?= $row->prodi_kode ?></td>  

                    <td>
                        <a href="<?php echo base_url('dosen/detail/'. $row->nidn.'')?>" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>   
                        <a href="<?php echo base_url('dosen/delete/'. $row->nidn.'')?>" class="btn btn-danger btn-sm"><i class="fas fa-trash" onclick="javascript: return confirm ('Anda yakin Menghapus Data?')"></i></a>
                        <a href="<?php echo base_url('dosen/edit/'. $row->nidn.'')?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>   
                    </td>
                    
                </tr>

            <?php   
                endforeach; 
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