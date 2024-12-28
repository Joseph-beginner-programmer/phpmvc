<div class="container mt-3">
    <div class="row">
        <div class="col-6">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
            Launch demo modal
        </button>
        <br></br>

            <h3>Mahasiswa</h3>
            
                <ul class="list-group">
                    <?php foreach($data['mhs'] as $mhs) : ?>
                        <li class="list-group-item  d-flex justify-content-between align-items-center">
                            <?= $mhs['nama'] ?>
                            <a class="badge badge-primary" href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>">details</a>
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