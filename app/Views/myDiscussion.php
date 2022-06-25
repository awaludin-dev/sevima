<?= $this->extend('template/templateHome'); ?>

<?= $this->section('content'); ?>
<div class="cont-discussion">
    <h1 class="text-center">My Discussion Chat</h1>
    <div class="mb-3 btn btn-primary">Tambah Diskusi</div>
    <div class="discussions">
        <div class="discussion">
            <h4 aria-describedby="titleHelp">Penentuan nama variabel untuk bahasa pemrograman?</h4>
            <div id="titleHelp" class="form-text small-text">Pengirim : Udin</div>
            <p>Penentuan nama variabel untuk bahasa pemrograman harus jelas.</p>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>