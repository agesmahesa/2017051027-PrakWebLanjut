<?= $this->extend('templates/template') ?>
<?= $this->section('content') ?>
<div class="container mt-3 mb-3">
    <div class="col-6">
        <div class="p-4">
        </div>
        <form action="/store" method="post">
            <div class="form-group">
                <label for="npm">Npm</label>
                <input type="number" name="npm" class="form-control" id="npm">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat">
            </div>
    </div>

    <div class="col-6">
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>

        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary">Tambah Data</button>
</form>

</div>

<?= $this->endsection('content') ?>