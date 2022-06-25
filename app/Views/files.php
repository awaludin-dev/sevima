<?= $this->extend('template/templateHome'); ?>

<?= $this->section('content'); ?>
<div class="cont-files mt-5">
    <h2 class="text-center">File Manager <span class="ml-3"><a href="<?= base_url('addFiles'); ?>" class="btn btn-primary">+</a></span></h2>
    <div class="files">
        <?php foreach ($files as $file) : ?>
            <div class="file">
                <img src="<?= base_url('img/file.jpg'); ?>" class="d-block" alt="file">
                <div class="text-file">
                    <h5><?= $file->judul ?></h5>
                    <input type="text" class="form-control" value="<?= base_url('assets/upload/' . $file->file); ?>" id="text-copy" disabled />
                    <a href="<?= base_url('deleteFiles/' . $file->id); ?>" class="btn btn-outline-danger">Delete</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection(); ?>