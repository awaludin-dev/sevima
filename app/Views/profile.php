<?= $this->extend('template/templateHome'); ?>

<?= $this->section('content'); ?>
<form action="" class="user d-flex justify-content-center">
    <?= csrf_field(); ?>
    <div class="form-group profile">
        <img src="<?= base_url('img/' . session()->get('photo')); ?>" class="img-thumbnail img-profile mb-3 mt-3" alt="...">
        <div class="input-group mb-3">
            <input type="file" class="form-control" id="inputGroupFile02">
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
        </div>
        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">Username</label>
            <input type="text" class="form-control" id="exampleInputUsername1" aria-describedby="usernameHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputName1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputTempatLahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" id="exampleInputTempatLahir" aria-describedby="tempatLahirHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputTanggalLahir" class="form-label">Tanggal Lahir</label>
            <input type="text" class="form-control" id="exampleInputTanggalLahir" aria-describedby="tanggalLahirHelp">
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary">
        </div>
    </div>
</form>
<?= $this->endSection(); ?>