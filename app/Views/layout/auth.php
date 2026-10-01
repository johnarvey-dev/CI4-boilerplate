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
    <?= $this->renderSection('pageStyles') ?>
</head>
<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper-b">
            <div class="main-panel-b">
                <div class="content-wrapper">
                    <?= $this->renderSection('pageContent') ?>
                </div>
            </div>
        </div>
    </div>


    <!-- JS -->
    <script src="<?= base_url('assets/vendors/js/vendor.bundle.base.js') ?>"></script>

    <script src="<?= base_url('assets/js/off-canvas.js') ?>"></script>
    <script src="<?= base_url('assets/js/template.js') ?>"></script>
    <script src="<?= base_url('assets/js/settings.js') ?>"></script>
    <script src="<?= base_url('assets/js/todolist.js') ?>"></script>
    <?= $this->renderSection('pageScripts') ?>
</body>
</html>