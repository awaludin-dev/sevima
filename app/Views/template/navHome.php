<nav class="navbar navbar-expand-lg navbar-dark bg-primary position-fixed fixed-top w-100" id="sticky">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Udinesia</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#content">Content</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#creator">Creator</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('discussion'); ?>">Discussion</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li> -->
            </ul>
            <div class="d-flex">
                <?php if (session()->get('name')) : ?>
                    <div class="nav-item dropdown d-flex align-items-center">
                        <img src="<?= base_url('img/' . session()->get('photo')); ?>" class="img-user" alt="...">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= session()->get('name'); ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="<?= base_url('profile'); ?>">Profile</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('myDiscussion'); ?>">My Discussion</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('files'); ?>">Files</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?= base_url('logout'); ?>">Logout</a></li>
                        </ul>
                    </div>
                <?php else : ?>
                    <a href="<?= base_url('login'); ?>" class="btn btn-outline-light" type="submit">Login</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>