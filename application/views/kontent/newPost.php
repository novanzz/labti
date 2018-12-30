<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
   <div class="row"  style="margin-top:70px">
      <h1 class="text-center">Buat Baru</h1>
      <div class="col-md-8 col-md-offset-2">
         <form action="<?php echo site_url('Home/postArtikel')?>" method="post"  enctype="multipart/form-data">
            <div class="form-group">
               <label for="judul">Judul :</label>
               <input class="form-control" id="judul" name="title" placeholder="Masukan Judul">
            </div>
            <div class="form-group">
               <label for="kategori">Kategori :</label>
               <input class="form-control" id="kategori" name="category" placeholder="Masukan Kategori">
            </div>
            <div class="form-group">
               <label for="konten">Konten :</label>
               <textarea id="editor" class="form-control" rows="5" name="content" placeholder="Masukan Kontent" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
            </div>
            <label>Foto Cover:</label>
            <div class="text-right">
               <input type="file" name="gambar" class="form-control" required>
               <a href="<?php echo site_url('Home/dashboard')?>" class="btn btn-danger">Kembali</a>
               <button type="submit" class="btn btn-primary">Posting</button>
            </div>
         </form>
      </div>
   </div>
   <hr>
</div>