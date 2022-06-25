<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Summernote -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <style>
        .note-editor .dropdown-toggle::after {
            all: unset;
        }

        .note-editor .note-dropdown-menu,
        .note-editor .note-modal-footer {
            box-sizing: content-box;
        }
    </style>
    <!-- Own CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/style.css">
</head>

<body>
    <?= $this->include('template/navHome'); ?>
    <div class="main">
        <?= $this->renderSection('content'); ?>
    </div>
    <?= $this->include('template/footerHome'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        /* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.getElementById("sticky").style.top = "0";
                document.getElementById("sticky").style.opacity = "1";
            } else {
                document.getElementById("sticky").style.top = "-58px";
                document.getElementById("sticky").style.opacity = "0.8";
            }
            prevScrollpos = currentScrollPos;
        }
    </script>
    <script>
        function previewImg() {
            const sampul = document.querySelector('#sampul');
            const imgPreview = document.querySelector('.img-preview');

            const fileSampul = new FileReader();
            fileSampul.readAsDataURL(sampul.files[0]);

            fileSampul.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>/js/jquery.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Summernote -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $('.summernote').summernote({
            placeholder: 'Masukkan isi discussion',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            callbacks: {
                onImageUpload: function(files) {
                    for (let i = 0; i < files.length; i++) {
                        $.upload(files[i]);
                    }
                },
                onMediaDelete: function(target) {
                    $.delete(target[0].src);
                }
            },
        });
        // upload gambar textarea summernote
        $.upload = function(file) {
            let out = new FormData();
            out.append('file', file, file.name);
            $.ajax({
                method: 'POST',
                url: '<?php echo site_url('admin/uploadGambar') ?>',
                contentType: false,
                cache: false,
                processData: false,
                data: out,
                success: function(img) {
                    $('.summernote').summernote('insertImage', img);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error(textStatus + " " + errorThrown);
                }
            });
        };
        // delete gambar textarea summernote
        $.delete = function(src) {
            $.ajax({
                method: 'POST',
                url: '<?php echo site_url('admin/deleteGambar') ?>',
                cache: false,
                data: {
                    src: src
                },
                success: function(response) {
                    console.log(response);
                }

            });
        };

        function konfirmasi(url) {
            var result = confirm("Want to delete?");
            if (result) {
                window.location.href = url;
            }
        }
    </script>
</body>

</html>