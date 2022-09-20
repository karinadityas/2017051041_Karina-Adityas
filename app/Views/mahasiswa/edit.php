<form action = '/update/<?= $id ?>' method = 'post'>
    <div class="mb-3">
        <label for="npm" class="form-label">NPM</label>
        <input type="text" class="form-control" id="npm" name="npm" aria-describedby="npm" value = "<?= $npm ?>">
        <!-- <div id="npm" class="form-text">Isi NPM</div> -->
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" value = "<?= $nama ?>">
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" name="alamat" id="alamat" value = "<?= $alamat ?>">
    </div>
    <button type="submit" class="btn btn-dark">Submit</button>
</form>