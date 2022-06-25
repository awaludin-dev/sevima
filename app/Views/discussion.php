<?= $this->extend('template/templateHome'); ?>

<?= $this->section('content'); ?>
<div class="cont-discussion">
    <h1 class="text-center">Discussion Chat</h1>
    <div class="discussions">
        <?php foreach ($discussions as $discussion) : ?>
            <div class="discussion mb-3">
                <h4 aria-describedby="titleHelp"><?= $discussion->judul; ?></h4>
                <div id="titleHelp" class="form-text small-text">Pengirim : <?= $discussion->pengirim; ?></div>
                <?= $discussion->isi; ?>
                <a href="<?= base_url('viewDiscussion/' . $discussion->id); ?>" class="btn btn-primary">Lihat</a>
                <?php if ($discussion->pengirim == session()->get('name')) : ?>
                    <a href="<?= base_url('editDiscussion/' . $discussion->id); ?>" class="btn btn-success">Edit</a>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection(); ?>