<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div style="margin-top: 100px; margin-left:20vh; ">

<?php 
            foreach ($artikel as $val): 
            if ($val->status != 0):
         ?>
<!-- Container (About Section) -->

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-3">
       <img style="width:170;height:130;" src="<?php echo base_url('assets/uploads/'.$val->url) ?>" class="img-thumbnail"> 
    </div>
    <div style="margin-bottom: 10vh" class="col-sm-9">
      <h2><strong><?=$val->title?><strong></h2>
      <h4><h4><?=$val->content?></h4></h4><br>
      <a class="btn btn-primary " href="<?php echo site_url('authcontroller/artikel/'.$val->no)?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
  </div>
</div>
 <?php 
         endif;
         endforeach; 
      ?>