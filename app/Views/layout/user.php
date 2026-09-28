<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/vendors/feather/feather.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendors/ti-icons/css/themify-icons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendors/css/vendor.bundle.base.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendors/font-awesome/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendors/mdi/css/materialdesignicons.min.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

    <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.png') ?>" />
</head>
<body>
    <div class="container-scroller">
        <?= view('layout/partials/_header') ?>

        <div class="container-fluid page-body-wrapper">
            <?= view('layout/partials/_sidebar') ?>

            <div class="main-panel">
                <div class="content-wrapper">
                    <?= $this->renderSection('content') ?>
                </div>

                <?= view('layout/partials/_footer') ?>
            </div>
        </div>
    </div>


    <!-- JS -->
    <script src="<?= base_url('assets/vendors/js/vendor.bundle.base.js') ?>"></script>

    <script src="<?= base_url('assets/js/off-canvas.js') ?>"></script>
    <script src="<?= base_url('assets/js/template.js') ?>"></script>
    <script src="<?= base_url('assets/js/settings.js') ?>"></script>
    <script src="<?= base_url('assets/js/todolist.js') ?>"></script>
</body>
</html>