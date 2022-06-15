<div class="col-md-12">
    <h1>
        Daftar Nama Prodi
    </h1>

    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
  Tambah Prodi
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Form Prodi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?= base_url(). 'prodi/create'; ?>">
                <div class="mb-3">
                    <label for="kode" class="form-label">Kode</label>
                    <input type="text" class="form-control" name="kode" id="kode" required>
                </div>
                <div class=" mb-3">
                    <label for="nama" class="form-label">Nama Prodi</label>
                    <input type="text" class="form-control" name="nama" id="nama" required>
                </div>
                <div class="mb-3">
                    <label for="kaprodi" class="form-label">Kepala Prodi</label>
                    <input type="text" class="form-control" name="kaprodi" id="kaprodi" required>
                </div>
                <div class="">
                    <button type="submit" name="simpan" class="btn btn-primary w-100">Tambah</button>
                </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
    <br>
    <br>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th><th>KODE</th><th>Nama Prodi</th><th>Kepala Prodi</th><th>Option</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $nomor = 1;
                foreach($prodi as $row) :
            ?>  
                <tr>
                    <td><?= $nomor++ ?></td>    
                    <td><?= $row->kode ?></td>         
                    <td><?= $row->nama ?></td>
                    <td><?= $row->kaprodi ?></td>  
                    <td>
                        <a href="<?php echo base_url('prodi/detail/'. $row->kode.'')?>" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>   
                        <a href="<?php echo base_url('prodi/delete/'. $row->kode.'')?>" class="btn btn-danger btn-sm"><i class="fas fa-trash" onclick="javascript: return confirm ('Anda yakin Menghapus Data?')"></i></a>
                        <a href="<?php echo base_url('prodi/edit/'. $row->kode.'')?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a> 
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