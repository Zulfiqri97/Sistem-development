<?= $this->extend('auth/templates/index');  ?>
<?= $this->section('content');  ?>


<div id="auth">

    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <div class="auth-logo">
                    <a href=""><img src="<?= base_url();  ?>/assets/images/logo/logo.png" alt="Logo"></a>
                </div>
                <!-- <h3 class="auth-title">HAlaman</h3> -->
                <!-- <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p> -->
                <?= view('Myth\Auth\Views\_message_block') ?>
                <form role="form" action="<?= route_to('login') ?>" method="post">
                    <?= csrf_field() ?>

                    <?php if ($config->validFields === ['email']) : ?>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="email" name="login" class="form-control form-control-xl" placeholder="<?= lang('Auth.email') ?>" <?php if (session('errors.login')) : ?>is-invalid<?php endif ?> autocomplete="off" value="<?= old('email') ?>">>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                            <div class="invalid-feedback">
                                <?= session('errors.login') ?>
                            </div>

                        <?php else : ?>




                            <div class="form-group position-relative has-icon-left mb-4">
                                <input type="text" name="login" class="form-control form-control-xl" placeholder="<?= lang('Auth.email') ?>" <?php if (session('errors.login')) : ?>is-invalid<?php endif ?> autocomplete="off" value="<?= old('email') ?>">
                                <div class="form-control-icon">
                                    <i class="bi bi-person"></i>
                                </div>
                                <div class="invalid-feedback">
                                    <?= session('errors.login') ?>
                                </div>
                            <?php endif; ?>


                            </div>
                            <div class="form-group position-relative has-icon-left mb-4">
                                <input type="password" name="password" class="form-control form-control-xl" placeholder="<?= lang('Auth.password') ?>" <?php if (session('errors.password')) : ?>is-invalid<?php endif ?> autocomplete="off" value="<?= old('password') ?>">
                                <div class="invalid-feedback">
                                    <?= session('errors.password') ?>
                                </div>
                                <div class="form-control-icon">
                                    <i class="bi bi-shield-lock"></i>
                                </div>
                            </div>




                            <?php if ($config->allowRemembering) : ?>
                                <div class="form-check form-check-lg d-flex align-items-end">
                                    <input class="form-check-input me-2" type="checkbox" name="remembering" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                    <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                        Keep me logged in
                                    </label>
                                </div>
                            <?php endif; ?>
                            <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit">Log in</button>

                </form>

                <?php if ($config->allowRegistration) : ?>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">Don't have an account? <a href="<?= route_to('register') ?>" class="font-bold">Sign
                                up</a>.</p>

                    <?php endif; ?>

                    <?php if ($config->allowRegistration) : ?>

                        <p><a class="font-bold" href="<?= route_to('forgot') ?>">Forgot password?</a>.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right">

            </div>
        </div>
    </div>

</div>

<?= $this->endSection();  ?>