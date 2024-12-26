<div class="container mt-5">
    <div class="row">
        <div class="col-6">
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