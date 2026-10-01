<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <a class="navbar-brand brand-logo me-5" href="<?= base_url(); ?>"><img src="<?= base_url('assets/images/logo.svg') ?>" class="me-2" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="<?= base_url(); ?>"><img src="<?= base_url('assets/images/logo-mini.svg') ?>" alt="logo" /></a>
    </div>

    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">

        <?php if (session()->get('isLoggedIn')): ?>
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="icon-menu"></span>
            </button>

            <ul class="navbar-nav mr-lg-2">
                <li class="nav-item d-none d-lg-block ms-4">
                    <div class="input-group">
                        <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                            <span>Home / Profile</span>
                        </div>
                    </div>
                </li>
            </ul>

            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                        <img src="<?= base_url('assets/images/faces/face28.jpg') ?>" alt="profile" />
                    </a>

                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item"><i class="ti-settings text-primary"></i> Settings </a>
                        <a href="<?= base_url('logout') ?>" class="dropdown-item"><i class="ti-power-off text-primary"></i> Logout </a>
                    </div>
                </li>
            </ul>

            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="icon-menu"></span>
            </button>
        <?php else: ?>
            <a href="<?= base_url('login') ?>">
                Sign in
            </a>
        <?php endif; ?>

    </div>
</nav>