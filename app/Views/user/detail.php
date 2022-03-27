<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>


<div id="main-content">


    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <!-- <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>DataTable</h3>
                        <p class="text-subtitle text-muted">For user to check they list</p>
                    </div> -->
                <!-- <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                            </ol>
                        </nav>
                    </div> -->
            </div>
        </div>
        <?php if (in_groups('admin')) : ?>

            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= base_url();  ?>/assets/images/default.png" type="image/x-icon" class="img-fluid rounded-start" alt="<?= $user->username; ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h4><?= $user->username; ?></h4>
                                </li>
                                <?php if ($user->fullname) : ?>
                                    <li class="list-group-item"><?= $user->fullname; ?></li>
                                <?php endif ?>
                                <li class="list-group-item"><?= $user->email; ?></li>
                                <li class="list-group-item"><span class="badge bg-<?= ($user->name == 'admin') ? 'success' : 'warning'; ?>"><?= $user->name; ?></span></li>

                                <!-- <li class="list-group-item"><span class="badge badge-success"><?= $user->name; ?></span></li> -->
                                <a href="<?= base_url('user/datauser');  ?>">&laquo; back to user list</a>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        <?php endif; ?>


    </div>


    <?= $this->endSection(); ?>


    <footer>
        <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
                <p>2021 &copy; Mazer</p>
            </div>
            <div class="float-end">
                <p>Crafted with <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span>
                    by <a href="https://ahmadsaugi.com">Saugi</a></p>
            </div>
        </div>
    </footer>
</div>