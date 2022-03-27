<header class='mb-3'>
    <nav class="navbar navbar-expand navbar-light ">
        <div class="container-fluid">
            <a href="#" class="burger-btn d-block">
                <i class="bi bi-justify fs-3"></i>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">


                </ul>
                <div class="dropdown">
                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="user-menu d-flex">
                            <div class="user-name text-end me-3">

                                <h6 class="mb-0 text-gray-600"><?= user()->username; ?></h6>
                                <p class="mb-0 text-sm text-gray-600">Online</p>
                            </div>
                            <div class="user-img d-flex align-items-center">

                                <dt class="the-icon"><span class="fa-fw select-all fas fa-2x"></span></dt>

                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                        <li>
                            <!-- <h6 class="dropdown-header">Hello, <?= user()->username; ?></h6> -->
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-person me-2"></i> My
                                Profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-gear me-2"></i>
                                Settings</a></li>
                        <!-- <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-wallet me-2"></i>
                                Wallet</a></li> -->
                        <li>
                            <hr class="dropdown-divider">
                        <li><a class="dropdown-item" href="<?= route_to('logout') ?>" onclick="return confirm('Apakah anda yakin ingin keluar ?')"><i class="fa-solid fa-power-off me-2"></i>
                                Logout</a>
                        </li>


                        <!-- <li><a class="" href="<?= route_to('logout') ?>"><i class="icon-mid bi bi-box-arrow-left me-2" id="basic"></i> Logout</a></li> -->


                        <!-- <button class="btn btn-primary sweet-1" onclick="swal ( 'Warning','Are you sure you want to leave','warning')">
                                Logout
                            </button> -->
                        <!-- <button> <i class="fa-solid fa-power-off me-2" onclick="swal ( 'Warning','Are you sure you want to leave','warning')">
                                    Logout
                                </i></button> -->


                        <!-- <div class="col-md-4 col-12">
                            <button id="warning" class="btn btn-outline-warning btn-lg btn-block">Warning</button>
                        </div> -->

                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>