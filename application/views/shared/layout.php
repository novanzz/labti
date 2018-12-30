<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html>
<head><title><?php echo $title; ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font-awesome.min.css"/>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/summernote.css')?>">  
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/sweetalert.css')?>">

<style type="text/css">
    /*Font with internet*/
    @import url('https://fonts.googleapis.com/css?family=Pacifico');

    /* Header dan footer */
      .navbar {
          margin-bottom: 0;
          background-color: #2d2d30;
          border: 0;
          font-size: 15px !important;
          letter-spacing: 3px;
          padding-bottom: 8px;
          opacity: 1.0;

      }
      .navbar li a, .navbar  {
          color: #d5d5d5 !important;
      }
      .navbar-brand{
          padding-left: 40px;
          letter-spacing: 5px;
        color: #d5d5d5 !important;
        font-family: 'Pacifico', cursive;
        font-size: 25px;
    }
      .navbar-nav li a:hover {
          color: #fff !important;
      }
      .navbar-nav li.active a {
          color: #fff !important;
          background-color: #29292c !important;
      }
      .navbar-default .navbar-toggle {
          border-color: transparent;
      }
      footer {
          background-color: #2d2d30;
          color: #f5f5f5;
          padding: 32px;
          margin-top: 40px;
      }
      footer a {
          color: #f5f5f5;
      }
      footer a:hover {
          color: #777;
          text-decoration: none;
      }
    /*login*/
    #contLogin{
        margin: auto;
        margin-top: 100px;
        width: 50%;
        box-shadow: 0 0 10px black;

    }
    #form{
        margin:auto;
        width: 100%;

    }

</style>
</head>
<Body class="hold-transition skin-blue sidebar-mini">

  <header class="main-header">
    <?php $this->load->view('shared/header'); ?>
  </header>

  <main class="container" style="min-height: 83%;">
    <?php $this->load->view($page); ?>
  </main>

  <footer class="text-center">
    <?php $this->load->view('shared/footer'); ?>
  </footer>

  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"/></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.js"/></script>
  <script type="text/javascript" src="<?=base_url('assets/js/summernote.min.js')?>"></script>
  <script type="text/javascript" src="<?=base_url('assets/js/sweetalert-dev.js')?>"></script>

  <script type="text/javascript">
      $(document).ready(function() {
        $('#editor').summernote ({
            height: 150,
                minHeight: null,   
                maxHeight: null,           
                focus: true,  
                toolbar: [
                ["style", ["style"]],
                ["font", ["bold", "underline", "clear"]],
                ["fontname", ["fontname"]],
                ["color", ["color"]],
                ["para", ["ul", "ol", "paragraph"]],
                ["table", ["table"]],
                ["insert", ["link", "video","picture"]],
                ["view", ["fullscreen", "codeview", "help"]]
            ],
        });

    });
  </script>
    <script type="text/javascript">
        function function_delete(id) {
            swal({
              title: "Are you sure?",
              text: "You will delete this data.",
              type: "warning",
              showCancelButton: true,
              confirmButtonColor: "#DD6B55",
              confirmButtonText: "Yes, delete it!",
              cancelButtonText: "No, cancel please!",
              closeOnConfirm: false,
              closeOnCancel: false
            },
            function(isConfirm){
              if (isConfirm){
                swal({
                  title:"Deleted!",
                  text: "Your data file has been delete.",
                  type: "success",
                  showCancelButton: false,
                  confirmButtonColor: "#DD6B55",
                  confirmButtonText: "oke",
                  closeOnConfirm: false,
                },
                function(isConfirm){
                  if (isConfirm){
                    window.location.href = "<?=base_url('home/deleteArtikel/')?>"+id;
                   }
                });
              } else {
                swal("Cancelled", "Your data file is safe :)", "error");
              }
            });
        }
    </script>
  

</Body>

</html>