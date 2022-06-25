<?= $this->extend('template/templateHome'); ?>

<?= $this->section('content'); ?>
<div class="cont-discussion">
    <h1 class="text-center">Add Discussion Chat</h1>
    <form class="user" action="<?= base_url('addDiscussionProcess'); ?>">
        <?= csrf_field() ?>
        <div class="form-group mb-3">
            <input type="text" class="form-control form-control-user <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" placeholder="Judul" value="<?= old('judul') ?>" name="judul" autofocus>
        </div>
        <div class="mb-3">
            <textarea class="form-control summernote" id="isi" name="isi"><?= old('isi'); ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-user btn-block">
            Add File
        </button>
    </form>
</div>
<?= $this->endSection(); ?>