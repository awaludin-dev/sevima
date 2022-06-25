<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Own CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <?php if (session()->get('name')) : ?>
                        <div class="nav-item dropdown d-flex align-items-center">
                            <img src="<?= base_url('img/' . session()->get('photo')); ?>" class="img-user" alt="...">
                            <a class="nav-link dropdown-toggle text-black" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?= session()->get('name'); ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="userDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Group</a></li>
                                <li><a class="dropdown-item" href="#">Chat</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="<?= base_url('logout'); ?>">Logout</a></li>
                            </ul>
                        </div>
                    <?php else : ?>
                        <a href="<?= base_url('login'); ?>" class="btn btn-outline-primary" type="submit">Login</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>