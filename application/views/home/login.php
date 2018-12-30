<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div id="contLogin" class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                    <!-- form card login -->
                    <div id="form" class="card rounded-0 well well-lg">
                        <h2 class="text-center text-white mb-4">Login Form</h2>
                        <div class="card-body">
                            <form action="<?php echo site_url('AuthController/login')?>" method="post">
                                <div class="form-group">
                                  <?php if(validation_errors()){?>
                                    <div class="alert alert-warning">
                                       <?= validation_errors();?>
                                    </div>
                                    <?php }elseif($this->session->flashdata('failLogin')){
                                          echo '<div class="alert alert-danger">'.$this->session->flashdata('failLogin').'</div>';
                                    } ?>
                                    <label for="usr">Username</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="username" required="">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Password</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" name="password" required="">
                                </div>
                                <button type="submit" class="btn btn-success btn-block">Login</button>
                                <a href="<?php echo site_url('AuthController/register')?>" class="btn btn-warning btn-block">Daftar</a>
                            </form>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->
                </div>
        </div>
    </div>
</div>