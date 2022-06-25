<?= $this->extend('template/templateHome'); ?>

<?= $this->section('content'); ?>
<div class="cont-files mt-5">
    <h2 class="text-center">File Manager <span class="ml-3"><a href="#" class="btn btn-success">+</a></span></h2>
    <div class="files">
        <div class="file">
            <img src="<?= base_url('img/file.jpg'); ?>" class="d-block" alt="file">
            <div class="text-file">
                <h5>Upload Matery</h5>
                <input type="text" class="form-control" value="http://localhost:8080/assets/upload/Modul-6.pdf" id="text-copy" disabled />
                <a href="#" class="btn btn-outline-primary">Edit</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>