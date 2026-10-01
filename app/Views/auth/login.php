<?= $this->extend('layout/auth') ?>

<?= $this->section('pageContent') ?>
    <!-- here -->
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-7 grid-margin stretch-card">
                        </div>

                        <div class="col-md-5 grid-margin transparent">
                            <form id="loginForm">
                                <?= csrf_field() ?>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" name="email" id="email" value="admin">
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control form-control-sm" name="password" id="password" value="admin">
                                </div>
                                
                                <div class="text-end mt-4 font-weight-light"> 
                                    <a href="#" class="btn">Create account</a>

                                    <button type="submit" class="btn btn-primary" id="btnSubmit">Sign in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>

<?= $this->section('pageScripts') ?>
    <script src="<?= base_url('assets/js/modules/auth.js') ?>"></script>
<?= $this->endSection() ?>