<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div style="margin-top: 80px; ">
<div class="container">
	<h2 class="page-header">
	    <i class="fa fa-newspaper-o"></i> <?=$artikel->title?>.
	    <small class="pull-right">
	    	<i class="fa fa-paper-plane"></i> Post Date: <?=$artikel->tanggal_post?>
	    	<br>
	    	<i class="fa fa-edit"></i> Edit Date : <?=$artikel->tanggal_edit?>
	    </small>
	</h2>
	<content>
		<div class="container-fluid bg-grey">
		  <div class="row">
		    <div class="col-sm-3">
		       <img style="width:220;height:180;" src="<?php echo base_url('assets/uploads/'.$artikel->url) ?>" class="img-thumbnail"> 
		    </div>
		    <div style="margin-bottom: 10vh" class="col-sm-9">
		      <h4><h4><?=$artikel->content?></h4></h4><br>
		      </span></a>
		    </div>
		  </div>
		</div>
	</content>
</div>