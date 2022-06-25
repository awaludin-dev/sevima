<?= $this->extend('template/templateHome'); ?>

<?= $this->section('content'); ?>
<form action="<?= base_url('updateProfile'); ?>" class="user d-flex justify-content-center" enctype="multipart/form-data" method="post">
    <?= csrf_field(); ?>
    <div class="form-group profile">
        <img src="<?= base_url('img/' . session()->get('photo')); ?>" class="img-thumbnail img-profile mb-3 mt-3 img-preview" alt="...">
        <input type="hidden" class="form-control" id="inputGroupFile02" name="photoLama">
        <div class="input-group mb-3">
            <input type="file" class="form-control" id="sampul" name="sampul" onchange="previewImg()">
            <label class="input-group-text" for="sampul">Upload</label>
        </div>
        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">Username</label>
            <input type="text" class="form-control" id="exampleInputUsername1" aria-describedby="usernameHelp" value="<?= $users->username; ?>" name="username">
        </div>
        <div class="mb-3">
            <label for="exampleInputName1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" value="<?= $users->name; ?>" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $users->email; ?>" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputTempatLahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" id="exampleInputTempatLahir" aria-describedby="tempatLahirHelp" value="<?= $users->tempat_lahir; ?>" name="tempat_lahir">
        </div>
        <div class="mb-3">
            <label for="exampleInputTanggalLahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="exampleInputTanggalLahir" aria-describedby="tanggalLahirHelp" value="<?= $users->tanggal_lahir; ?>" name="tanggal_lahir">
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary">
        </div>
    </div>
</form>
<?= $this->endSection(); ?>