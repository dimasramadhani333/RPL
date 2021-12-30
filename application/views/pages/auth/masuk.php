<?php $this->load->view('templates/auth_header'); ?>
<div class="container">
        <div class="col-md-8 mx-auto">
            <?php $this->load->view('layouts/_alert') ?>
        </div>

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                                </div>
                                <?= $this->session->flashdata('message'); ?>
                                <?= form_open('login', ['method' => 'POST']) ?>
                                    <div class="form-group">
                                        <?= form_input(['type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' => 'form-control form-control-user', 'placeholder' => 'Masukan email', 'required' => true]) ?>
                                        <?= form_error('email') ?>
                                    </div>
                                    <div class="form-group">
                                        <?= form_password('password', '', ['class' => 'form-control form-control-user', 'placeholder' => 'Masukkan password', 'required' => true]) ?>
                                        <?= form_error('password') ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                    <?= form_close() ?>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('register') ?>">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<?php $this->load->view('templates/auth_footer');?>