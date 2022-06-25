<?= $this->extend('template/templateHome'); ?>

<?= $this->section('content'); ?>
<div class="cont-discussion">
    <div class="discussion">
        <h1 class="text-center"><?= $discussion->judul; ?></h1>
        <div id="titleHelp" class="form-text small-text">Pengirim : <?= $discussion->pengirim; ?></div>
        <?= $discussion->isi; ?>
    </div>
    <?php if (session()->get('name')) : ?>
        <div class="comment-discussion">
            <h3 class="mt-3 mb-2 text-center">Comment</h3>
            <form class="user" action="<?= base_url('addComment'); ?>">
                <?= csrf_field() ?>
                <input type="hidden" name="discussion_id" value="<?= $discussion->id; ?>">
                <div class="form-group mb-1">
                    <input type="text" class="form-control form-control-user" placeholder="Pengirim" value="<?= session()->get('name') ?>" name="pengirim">
                </div>
                <div class="form-group mb-1">
                    <input type="text" class="form-control form-control-user" placeholder="Comment" value="<?= old('isi') ?>" name="isi" autofocus>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Add File
                </button>
            </form>
        </div>
    <?php endif; ?>
    <div class="list-comment">
        <h3 class="text-center mt-3 mb-2">List Comment</h3>
        <?php foreach ($comments as $comment) : ?>
            <div class="comment">
                <h5><?= $comment->pengirim; ?></h5>
                <div id="titleHelp" class="form-text small-text"><?= $comment->updated_at ?></div>
                <p><?= $comment->isi ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</div>
</div>
<?= $this->endSection(); ?>