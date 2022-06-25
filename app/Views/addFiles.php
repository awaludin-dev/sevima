<?= $this->extend('template/templateHome'); ?>

<?= $this->section('content'); ?>
<div class="cont-file">
    <div class="add-file">
        <h1 class="mt-5">Tambah File</h1>
        <form class="user" action="<?= base_url('addFilesProcess'); ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <div class="form-group mb-3">
                <input type="text" class="form-control form-control-user <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" placeholder="Judul" value="<?= old('judul') ?>" name="judul" autofocus>
            </div>
            <div class="input-group mb-3">
                <input type="file" class="form-control" id="sampul" name="file">
                <label class="input-group-text" for="sampul">Upload</label>
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">
                Add File
            </button>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>