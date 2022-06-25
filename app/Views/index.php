<?= $this->extend('template/templateHome'); ?>

<?= $this->section('content'); ?>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= base_url('img/pic1.jpg'); ?>" class="d-block w-100" alt="Group Chat">
            <div class="carousel-caption d-none d-md-block text-black">
                <h5>Udinesia</h5>
                <p>A website app that can do a discussion group. There are 2 feature inside, Discussion Chat and Manager File.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('img/pic2.png'); ?>" class="d-block w-100" alt="Chat">
            <div class="carousel-caption d-none d-md-block text-black">
                <h5>Discussion Chat</h5>
                <p>Share your problem and search the solution. You can be the one that give a solution to other people.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('img/pic3.png'); ?>" class="d-block w-100" alt="Upload Materi">
            <div class="carousel-caption d-none d-md-block text-black">
                <h5>File Manager</h5>
                <p>Upload a matery and share to other people. You can get the other matery too.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="group">
    <img src="<?= base_url('img/pic1.jpg'); ?>" alt="Group Chat">
    <div class="desc-group">
        <h3>Udinesia</h3>
        <p>A website app that can do a discussion group. There are 2 feature inside, Discussion Chat and Manager File. You can visit <a href="<?= base_url(); ?>">this link</a>.</p>
    </div>
</div>
<div class="group">
    <img src="<?= base_url('img/pic2.png'); ?>" alt="Chat">
    <div class="desc-group">
        <h3>Discussion Chat</h3>
        <p>Share your problem and search the solution. You can be the one that give a solution to other people. You can visit <a href="<?= base_url('discussion'); ?>">this link</a>.</p>
    </div>
</div>
<div class="group">
    <img src="<?= base_url('img/pic3.png'); ?>" alt="Upload Materi">
    <div class="desc-group">
        <h3>File Manager</h3>
        <p>Upload a matery and share to other people. You can get the other matery too. You can visit <a href="<?= base_url('files'); ?>">this link</a>.</p>
    </div>
</div>
<?= $this->endSection(); ?>