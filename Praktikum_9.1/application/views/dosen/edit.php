<div class="content-wrapp">
    <section class = "">
        <?php 
            foreach($dosen as $dsn) { ?>
            <div class="col-md-12   ">
                <h3 class="">Edit Biodata Dosen</h3>
                <br>
            <form method="POST" action="<?= base_url(). 'dosen/update'; ?>">

                <div class="form-group">
                    <label for="nama">Nama Dosen</label>
                    <input type="hidden" name="nidn" id="nidn" class="form-control" value="<?= $dsn->nidn?>">
                    <input type="text" name="nama" id="nama" class="form-control" value="<?= $dsn->nama?>">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" name="gender" id="gender">
                    <option>L</option>
                    <option>P</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pendidikan_akhir">Pendidikan</label>
                    <input type="text" name="pendidikan_akhir" id="pendidikan_akhir" class="form-control" value="<?= $dsn->pendidikan_akhir?>">
                </div>
                <div class="form-group">
                    <label for="prodi_kode">Kode Prodi</label>
                    <select class="form-control" name="prodi_kode" id="prodi_kode">
                    <option>TI</option>
                    <option>SI</option>
                    <option>BD</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" name="simpan" class="btn btn-primary w-100">Ubah</button>
                </div>

            </form>

            </div>
            </section>
        <?php } ?>
</div>