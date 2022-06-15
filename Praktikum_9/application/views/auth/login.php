<div class="col-md-6 mx-auto mb-4">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title text-center">Login</h3>
        </div>
        <!-- /.card-header -->
        <?= $this->session->flashdata('message'); ?>
        <!-- form start -->
        <form class="user" method="POST" action="<?= base_url('auth'); ?>">
            <div class="card-body">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" value="<?= set_value('username'); ?>">
                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary col-12">Login</button>
                <a class="small" href="<?= base_url('auth/registration'); ?> ">Doesn't have an account yet?</a>
            </div>
        </form>
    </div>
</div>