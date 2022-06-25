<?= $this->extend('template/templateHome'); ?>

<?= $this->section('content'); ?>
<div class="cont-discussion">
    <h1 class="text-center">My Discussion Chat</h1>
    <a href="<?= base_url('addDiscussion'); ?>" class="mb-3 btn btn-primary">Tambah Diskusi</a>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <span class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </span>
    <?php endif; ?>
    <div class="discussions">
        <?php foreach ($discussions as $discussion) : ?>
            <div class="discussion mb-3">
                <h4 aria-describedby="titleHelp"><?= $discussion->judul; ?></h4>
                <div id="titleHelp" class="form-text small-text">Pengirim : <?= $discussion->pengirim; ?></div>
                <?= $discussion->isi; ?>
                <a href="<?= base_url('viewDiscussion/' . $discussion->id); ?>" class="btn btn-primary">Lihat</a>
                <a href="<?= base_url('editDiscussion/' . $discussion->id); ?>" class="btn btn-success">Edit</a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection(); ?>