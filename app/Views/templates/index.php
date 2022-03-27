<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url();  ?>/assets/css/bootstrap.css">

    <link rel="stylesheet" href="<?= base_url();  ?>/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?= base_url();  ?>/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url();  ?>/assets/css/app.css">
    <link rel="shortcut icon" href="<?= base_url();  ?>/assets/images/favicon.svg" type="image/x-icon">

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/bd44bb9b8e.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="<?= base_url();  ?>/assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <!-- cara untuk memanggil side bar dengan include -->
                <?= $this->include('templates/sidebar'); ?>
                <!-- end  -->
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main" class='layout-navbar'>
            <?= $this->include('templates/topbar') ?>
            <?= $this->renderSection('page-content'); ?>
        </div>
    </div>
    <script src="<?= base_url();  ?>/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url();  ?>/assets/js/bootstrap.bundle.min.js"></script>

    <script src="<?= base_url();  ?>/assets/js/main.js"></script>
    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script> -->
    <!-- <script src="assets/js/bootstrap.bundle.min.js"></script> -->

    <!-- <script src="assets/js/extensions/sweetalert2.js"></script>
    <script src="assets/vendors/sweetalert2/sweetalert2.all.min.js"></script> -->

    <!-- <script src="assets/js/main.js"></script> -->
</body>

</html>