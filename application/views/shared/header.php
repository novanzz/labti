<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" style="">Unggas Ternak</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right ">
              <?php if ($this->session->isLogin == true):?>
                <li>
                   <a class="dropdown-toggle" href="" data-toggle="dropdown"> <span class="fa fa-user"></span> <?= $this->session->username ?>
                      </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo site_url('home/logout')?>">
                      <i class="fa fa-sign-out "></i>
                      Logout
                      </a>
                    </li>
                    </ul>
                </li>
                <?php else: ?>
                <li><a href="<?php echo site_url('authcontroller/about') ?>">ABOUT</a></li>
                <li>
                  <a href="<?php echo site_url('authcontroller/login')?>">
                    LOGIN
                  </a>
                </li>
               
              <?php endif ?>
          </ul>
            <ul class="nav navbar-nav navbar-right">
             <li><a href="<?php echo site_url('AuthController/index') ?>">HOME</a></li>
             <?php if ($this->session->isLogin == true):?>
                  <li><a href="<?php echo site_url('home/dashboard')?>"> DASHBOARD</a></li>
                  <li><a href="<?php echo site_url('home/newPostLayout')?>"> NEW POST</a></li>
                  <li class="dropdown-toggle"></li>
                <?php endif ?>
            </ul>

    </div>
  </div>
</nav>

