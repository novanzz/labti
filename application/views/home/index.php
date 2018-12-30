<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div style="margin-top: 130px;">
<h1 class="text-center">
    Daftar Posting
</h1>
<div class="col-md-12 text-right" style="margin-bottom: 20px;">
  <a href="<?php echo site_url('Home/newPostLayout') ?>" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true">   </i>  Buat Baru</a>
</div>

<table class="table table-stripe table-bordered">
  <thead>
    <tr>
      <th class="text-center">No</th>
      <th class="text-center">Judul</th>
      <th class="text-center">Karegori</th>
      <th class="text-center">Foto</th>
      <th class="text-center">Tanggal Posting</th>
      <th class="text-center">Tanggal Edit</th>
      <th class="text-center">Status</th>
      <th class="text-center">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $nomor = 1; ?>
    <?php foreach ($artikel as $val): ?>
    <tr>
      <td  class="text-center"><?=$nomor?></td>
      <td><?=$val->title?></td>
      <td><?=$val->category?></td>
      <td> <img style="width:140;height:100;" src="<?php echo base_url('assets/uploads/'.$val->url) ?>" class="img-thumbnail"> </td>
      <td class="text-center"><?=$val->tanggal_post?></td>
      <td class="text-center"><?=$val->tanggal_edit?></td>
      <td class="text-center">
      <?php if ($val->status == 1):?>
        <a href="<?php echo site_url('home/updateStatus/'.$val->no.'/'.$val->status)?>" aria-hidden="true">
          <i class="fa fa-toggle-on fa-3x"></i>
        </a>
      <?php else: ?>
        <a href="<?php echo site_url('home/updateStatus/'.$val->no.'/'.$val->status)?>" aria-hidden="true">
          <i class="fa fa-toggle-off fa-3x"></i>
        </a>
      <?php endif ?>
      </td>
      <td class="text-center">
        <a href="<?php echo site_url('home/selectArtikelbyId/'.$val->no)?>" class="btn btn-warning"><i class=" fa fa-edit"></i></a>
        <a href="<?php echo site_url('home/deleteArtikel/'.$val->no)?>" class="btn btn-danger"><i class=" fa fa-trash"></i></a>
      </td>
      </tr>
    <?php 
    $nomor = $nomor + 1;
    endforeach ?>
  </tbody>
</table>
</div>