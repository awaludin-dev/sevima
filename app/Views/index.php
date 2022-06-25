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
            <img src="https://dmn-dallas-news-prod.cdn.arcpublishing.com/resizer/loyhpLKMDpT7Qawgo355Zy78Cds=/1660x934/smart/filters:no_upscale()/cloudfront-us-east-1.images.arcpublishing.com/dmn/VICAO2KR2BC3FHCLH27Z3OIVSU.jpg" class="d-block w-100" alt="Group Chat">
            <div class="carousel-caption d-none d-md-block text-black">
                <h5>Group Chat</h5>
                <p>Make a group chat and share to your friends. You can interaction with your friends in group chats.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://blog.qontak.com/wp-content/uploads/2020/08/Tidio-Live-chat.webp" class="d-block w-100" alt="Chat">
            <div class="carousel-caption d-none d-md-block text-black">
                <h5>Personal Chat</h5>
                <p>Make a new connection with some chat. Ask the person and study together.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://e-ujian.id/wp-content/uploads/2020/12/form-upload-materi.png" class="d-block w-100" alt="Upload Materi">
            <div class="carousel-caption d-none d-md-block text-black">
                <h5>Upload Matery</h5>
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
    <img src="https://dmn-dallas-news-prod.cdn.arcpublishing.com/resizer/loyhpLKMDpT7Qawgo355Zy78Cds=/1660x934/smart/filters:no_upscale()/cloudfront-us-east-1.images.arcpublishing.com/dmn/VICAO2KR2BC3FHCLH27Z3OIVSU.jpg" alt="Group Chat">
    <div class="desc-group">
        <h3>Group Chat</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis asperiores quaerat fuga praesentium consequuntur nihil dolore sit dolorem doloribus beatae debitis a, architecto eum eaque quia voluptas itaque facere repellat soluta voluptate. Ullam ea laborum, eius incidunt porro consequatur aperiam vitae! Iusto nesciunt, cum provident nam soluta inventore ea nemo.</p>
    </div>
</div>
<div class="group">
    <img src="https://blog.qontak.com/wp-content/uploads/2020/08/Tidio-Live-chat.webp" alt="Chat">
    <div class="desc-group">
        <h3>Personal Chat</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis asperiores quaerat fuga praesentium consequuntur nihil dolore sit dolorem doloribus beatae debitis a, architecto eum eaque quia voluptas itaque facere repellat soluta voluptate. Ullam ea laborum, eius incidunt porro consequatur aperiam vitae! Iusto nesciunt, cum provident nam soluta inventore ea nemo.</p>
    </div>
</div>
<div class="group">
    <img src="https://e-ujian.id/wp-content/uploads/2020/12/form-upload-materi.png" alt="Upload Materi">
    <div class="desc-group">
        <h3>Upload Matery</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis asperiores quaerat fuga praesentium consequuntur nihil dolore sit dolorem doloribus beatae debitis a, architecto eum eaque quia voluptas itaque facere repellat soluta voluptate. Ullam ea laborum, eius incidunt porro consequatur aperiam vitae! Iusto nesciunt, cum provident nam soluta inventore ea nemo.</p>
    </div>
</div>
<?= $this->endSection(); ?>