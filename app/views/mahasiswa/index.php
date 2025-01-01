<div class="container mt-3">

  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <button id="addButton" type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
        Tambah Data Mahasiswa
      </button>
      <br></br>

      <h3>Daftar Mahasiswa</h3>

      <ul class="list-group">
        <?php foreach ($data['mhs'] as $mhs) : ?>
          <li class="list-group-item ">
            <?= $mhs['nama'] ?>
            <a class="badge badge-danger float-right ml-1" href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'] ?>" onclick="return confirm('yakin?')">hapus</a>
            <a class="badge badge-warning float-right ml-1 tampilModalEdit" href="<?= BASEURL; ?>/mahasiswa/edit/<?= $mhs['id'] ?>" data-toggle="modal" data-target="#formModal" 
            data-id="<?= $mhs['id']; ?>">edit</a>
            <a class="badge badge-primary float-right ml-1" href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>">detail</a>
          </li>

        <?php endforeach; ?>
      </ul>

    </div>

  </div>

</div>


<!-- modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah data mahasiswa</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">x</button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL ?>/mahasiswa/tambah" method="post">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>

          <div class="mb-3">
            <label for="nrp" class="form-label">NRP</label>
            <input type="number" class="form-control" id="nrp" name="nrp">
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>

          <div>
            <label for="jurusan">Jurusan</label><br>
            <select class="form-select" id="jurusan" name="jurusan">
              <option selected>Open this select menu</option>
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Teknik Mesin">Teknik Mesin</option>
              <option value="Teknik Industri">Teknik Industri</option>
              <option value="Teknik Elektro">Teknik Elektro</option>
              <option value="Teknik Mekatronika">Teknik Mekatronika</option>
            </select>
          </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </div>
      </form>
    </div>
  </div>
</div>