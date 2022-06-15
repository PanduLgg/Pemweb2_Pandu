<div class="content-wrapp">
    <section class = "">
        <?php 
            foreach($prodi as $prd) { ?>
            <div class="col-md-12   ">
                <h3 class="">Edit Prodi</h3>
                <br>
            <form method="POST" action="<?= base_url(). 'prodi/update'; ?>">
            <div class="form-group">
                    <label for="kode">Kode Prodi</label>
                    <input type="text" name="kode" id="kode" class="form-control" value="<?= $prd->kode?>">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Prodi</label>
                    <input type="hidden" name="nidn" id="kode" class="form-control" value="<?= $prd->kode?>">
                    <input type="text" name="nama" id="nama" class="form-control" value="<?= $prd->nama?>">
                </div>
                <div class="form-group">
                    <label for="kaprodi">Kepala Prodi</label>
                    <input type="text" name="kaprodi" id="kaprodi" class="form-control" value="<?= $prd->kaprodi?>">
                </div>
                <div class="form-group">
                    <button type="submit" name="simpan" class="btn btn-primary w-100">Ubah</button>
                </div>

            </form>

            </div>
            </section>
        <?php } ?>
</div>  