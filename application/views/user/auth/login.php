<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/auth/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/auth/css/style.css">
    <script src="<?= base_url() ?>assets/js/sweetalert2-all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>

<body>

    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="<?= base_url() ?>assets/auth/images/imagess.png" alt="sing up image"></figure>
                        <a href="<?= base_url('auth/v_registrasi') ?>" class="signup-image-link">Membuat akun baru</a>
                        <a href="<?= base_url('auth/v_lupa_password') ?>" class="signup-image-link">Lupa password ?</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign in</h2>
                        <form method="POST" action="<?= base_url('auth/login') ?>" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-email material-icons-name"></i></label>
                                <input type="text" name="email" id="your_name" placeholder="Email" />
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password" />
                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group form-button">
                                <button type="submit" class="form-submit">Log In</button>
                            </div>
                        </form>
                        <!-- <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="<?= base_url() ?>assets/auth/vendor/jquery/jquery.min.js"></script>
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
                title: 'Maaf akun anda belum dikonfirmasi!',
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
        <?php elseif ($this->session->flashdata('emailsalah')) : ?>
            Swal.fire({
                icon: 'error',
                title: 'Email anda salah!',
                text: 'silahkan coba lagi',
                showConfirmButton: true,
                // timer: 1500
            })
        <?php elseif ($this->session->flashdata('logout')) : ?>
            Swal.fire({
                icon: 'success',
                title: 'Anda berhasil logout',
                text: 'silahkan login untuk masuk kembali',
                showConfirmButton: true,
                // timer: 1500
            })
        <?php elseif ($this->session->flashdata('gantipass')) : ?>
            Swal.fire({
                icon: 'success',
                title: 'Anda berhasil ganti password!',
                showConfirmButton: true,
                // timer: 1500
            })
        <?php elseif ($this->session->flashdata('gagal')) : ?>
            Swal.fire({
                icon: 'error',
                title: 'Maaf anda gagal mengganti password!',
                showConfirmButton: true,
                // timer: 1500
            })
        <?php endif ?>
    </script>
    <script src="<?= base_url() ?>assets/auth/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>