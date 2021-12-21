<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login Admin</title>

    <!-- Bootstrap -->
    <link href="<?= base_url() ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url() ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url() ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?= base_url() ?>assets/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url() ?>assets/build/css/custom.min.css" rel="stylesheet">
    <script src="<?= base_url() ?>assets/js/sweetalert2-all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>

<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form method="post" action="<?= base_url('admin/auth/login') ?>">
                        <h1>Halaman Login</h1>
                        <div>
                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                            <input type="text" name="username" class="form-control" placeholder="Username" />
                        </div>
                        <div>
                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                            <input type="password" name="password" class="form-control" placeholder="Password" />
                        </div>
                        <div>
                            <button class="btn btn-primary">Log in</button>
                            <!-- <a class="reset_pass" href="#">Lost your password?</a> -->
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <!-- <p class="change_link">New to site?
                                <a href="#signup" class="to_register"> Create Account </a>
                            </p> -->

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1><i class="fa fa-paw"></i> Dwi Saka Pangestu!</h1>
                                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>

            <!-- <div id="register" class="animate form registration_form">
                <section class="login_content">
                    <form>
                        <h1>Create Account</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="Username" required="" />
                        </div>
                        <div>
                            <input type="email" class="form-control" placeholder="Email" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" required="" />
                        </div>
                        <div>
                            <a class="btn btn-default submit" href="index.html">Submit</a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">Already a member ?
                                <a href="#signin" class="to_register"> Log in </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms.</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div> -->
        </div>
    </div>
</body>
<script>
    <?php if ($this->session->flashdata('insert')) : ?>
        Swal.fire({
            icon: 'success',
            title: 'Anda berhasil mendaftarkan akun',
            text: 'silahkan tunggu konfirmasi dari admin',
            showConfirmButton: true,
            // timer: 1500
        })
    <?php elseif ($this->session->flashdata('belumkonfirmasi')) : ?>
        Swal.fire({
            icon: 'error',
            title: 'Maaf akun admin anda tidak aktif!',
            text: 'silahkan tunggu konfirmasi dari admin',
            showConfirmButton: true,
            // timer: 1500
        })
    <?php elseif ($this->session->flashdata('passwordsalah')) : ?>
        Swal.fire({
            icon: 'error',
            title: 'Password anda salah!',
            text: 'silahkan coba lagi',
            showConfirmButton: true,
            // timer: 1500
        })
    <?php elseif ($this->session->flashdata('usernamesalah')) : ?>
        Swal.fire({
            icon: 'error',
            title: 'Username anda salah!',
            text: 'silahkan coba lagi',
            showConfirmButton: true,
            // timer: 1500
        })
    <?php elseif ($this->session->flashdata('logout')) : ?>
        Swal.fire({
            icon: 'success',
            title: 'Anda berhasil logout',
            showConfirmButton: true,
            // timer: 1500
        })
    <?php elseif ($this->session->flashdata('success')) : ?>
        Swal.fire({
            icon: 'success',
            title: 'Anda berhasil ganti password!',
            showConfirmButton: true,
            // timer: 1500
        })
    <?php endif ?>
</script>

</html>