<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <a class="navbar-brand mb-0 h1 " href="<?= base_url() ?>">BOOTSTRAP 4.5  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url(), 'mahasiswa/index'?>">Mahasiswa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url(), 'dosen/index'?>">Dosen</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url(), 'matakuliah/index'?>">Mata Kuliah</a>
      </li>
    </ul>
  </div>
</nav>

