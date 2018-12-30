<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
<div class="row"  style="margin-top:10vh">
   <div class=" col-md-4 col-md-offset-4  jumbotron" >
      <h2 class="text-center">Register Form</h2>
      <hr>
      <?php 
         if (validation_errors()) {
            echo '
            <div class="alert alert-warning">'.
             validation_errors().
            '</div>';
         }
       ?>
      <form action="<?php echo site_url('AuthController/register')?>" method="post">
         <div class="form-group has-feedback">
            <label for="usr">Username :</label>
            <input name="username" class="form-control" placeholder="Masukan Username">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
         </div>
         <div class="form-group has-feedback">
            <label for="pwd">Password :</label>
            <input name="password" type="password" class="form-control" placeholder="Masukan Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
         </div>
         <div class="form-group has-feedback">
            <label for="pwd">Re-Password :</label>
            <input name="repassword" type="password" class="form-control" placeholder="Masukan Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
         </div>         
         <div class="form-group has-feedback">
            <label for="eml">Email :</label>
            <input name="email" type="email" class="form-control" placeholder="Masukan email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
         </div>
         <button type="submit" class="btn btn-primary btn-block">Daftar</button>
         <a  class="btn btn-danger btn-block">Batal</a>
      </form>
   </div>
</div>
</div>