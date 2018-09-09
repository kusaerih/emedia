<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Foto Kegiatan</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.min.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/dataTables.bootstrap.min.css')?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: #ffffff !important;} .asteriskField{color: red;}</style>
  </head>
<body background="../images/background/aa.png">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">E-Media</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="<?php echo base_url().'index.php/admin'?>">Home</a></li>
      <li><a href="<?php echo base_url().'index.php/berita_utama'?>">Berita Kegiatan</a></li>
      <li class="active"><a href="<?php echo base_url().'index.php/foto_kegiatan'?>">Foto Kegiatan</a></li>
      <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url().'index.php/pengumuman'?>">Pengumuman
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url().'index.php/pengumuman'?>">Berita Upacara</a></li>
            <!-- <li><a href="#">Drees Code</a></li> -->
            <li><a href="#">Pegawai terbaik</a></li>
            <li><a href="#">Bazar</a></li>
            <li><a href="#">Berita Duka</a></li>
            <li><a href="#">Senam</a></li>
            <li><a href="#">Pengajian</a></li>
          </ul>
        </li>
      <!-- <li><a href="<?php echo base_url().'index.php/pengumuman'?>">Pengumuman</a></li> -->
      <li><a href="<?php echo base_url().'index.php/live_streaming'?>">Live Streaming</a></li>
      <li><a href="<?php echo base_url().'index.php/video'?>">Video</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo base_url('index.php/slide')?>"><span class="glyphicon glyphicon-home"></span> Lihat Slide</a></li>
      <li><a href="#"><span></span>|</a></li>
      <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Hai, <?php echo $this->session->userdata('nama_pengguna'); ?></a>
          <ul class="dropdown-menu">
      <li><a href="<?php echo base_url('index.php/admin/logout'); ?>"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  
 <div class="container">
  <h3>Edit Foto Kegiatan</h3>
   <p>Sistem Pengelolaan Berita Lingkungan Kerja BKN Pusat</p>
    <?php if ($this->session->flashdata('pesan')): ?>
    <div class="alert bg-success">
       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
         <?php echo $this->session->flashdata('pesan');?>
    </div>
    <?php endif; ?>
    <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#demo"><span class="glyphicon glyphicon-pencil"></span> Update Foto Kegiatan</button>
    <?php echo anchor(site_url('foto_kegiatan'), 'Back', 'class="btn btn-warning"'); ?>
    <div id="demo" class="collapse">
  <div class="panel panel-success">
     <div class="panel-heading">Edit Form Foto Kegiatan</div>
       <div class="panel-body">
        <?php foreach ($imagess as $p) { ?> 
         <!-- <form action="<?php echo base_url().'index.php/produk_bkn/update' ?>" method="post"> -->
         <?php echo form_open_multipart('foto_kegiatan/update');?>
           <div class="form-group">
              <label for="">Nama Kegiatan</label>
              <input type="hidden" name="id" value="<?php echo $p->id ?>">
              <input type="text" class="form-control" name="nama_kegiatan" value="<?php echo $p->nama_kegiatan ?>">
           </div>
      <!-- ========================================================== -->
      <div class="form-group">
          <label for="exampleInputFile">Foto</label>
            <?php echo form_error('filefoto'); ?><br>
          <img style="width: 10%;" src="<?php echo base_url('images') ?>/<?php echo $p->foto ?>">
          <input type="file" name="foto" id="exampleInputFile" value="<?php echo $p->foto ?>">
          <span class="label label-success">Ukuran maksimal 2 MB. Format file: jpeg, jpg, dan png.</span>
      </div>
      <!-- ============================================================= -->
            <div class="form-group">
              <label for="">Keterangan</label>
              <input type="text" class="form-control" name="keterangan" value="<?php echo $p->keterangan ?>">
            </div>
              <button type="submit" class="btn btn-info">Update</button>
           </div>
          <?php echo form_close(); ?> 
         <!-- <?php } ?> -->
       </div>
      </div>
     </div>
    </div>

    <script src="<?php echo base_url('js/jquery-3.2.1.min.js')?>"></script>
    <script src="<?php echo base_url('js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('js/dataTables.bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
</body>
</html>