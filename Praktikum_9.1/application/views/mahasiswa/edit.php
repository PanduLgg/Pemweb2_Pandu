<div class="content-wrapp">
    <section class = "">
        <?php 
            foreach($mahasiswa as $mhs) { ?>
            <div class="col-md-12   ">
                <h3 class="">Edit Biodata Dosen</h3>
                <br>
            <form method="POST" action="<?= base_url(). 'mahasiswa/update'; ?>">

                <div class="form-group">
                    <label for="nama">Nama Mahasiswa</label>
                    <input type="hidden" name="nim" id="nim" class="form-control" value="<?= $mhs->nim?>">
                    <input type="text" name="nama" id="nama" class="form-control" value="<?= $mhs->nama?>">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" name="gender" id="gender">
                    <option>L</option>
                    <option>P</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tmp_lahir">Tempat Lahir</label>
                    <input type="text" name="tmp_lahir" id="tmp_lahir" class="form-control" value="<?= $mhs->tmp_lahir?>">
                </div>
                <div class="form-group">
                    <label for="tgl_lahir">Tempat Lahir</label>
                    <input type="text" name="tgl_lahir" id="tgl_lahir" class="form-control" value="<?= $mhs->tgl_lahir?>">
                </div>
                <div class="form-group">
                    <label for="ipk">IPK</label>
                    <input type="text" name="ipk" id="ipk" class="form-control" value="<?= $mhs->ipk?>">
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