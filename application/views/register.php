<?php
// Cek apakah terdapat session nama message
if($this->session->flashdata('message')){ // Jika ada
  echo '<div class="alert alert-success">'.$this->session->flashdata('message').'</div>'; // Tampilkan pesannya
}
?>
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>Call A</b> Doc </a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Register to Continue</p>

            <form action="<?php echo base_url('auth/register'); ?>" method="post">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Full name" name="nama">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Alamat" name="alamat">
                    <span class="glyphicon glyphicon-home form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="No hp" name="nohp">
                    <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Retype password" name="re-password">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign Up</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign Up using
        Facebook</a>
                <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign Up using
        Google+</a>
            </div>
            <!-- /.social-auth-links -->
            <a href="<?php echo site_url('auth/loginindex') ?>" class="text-center">I already have a membership</a>

        </div>
        <!-- /.login-box-body -->
    </div>
    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });
    </script>