<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Berita Duka</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.min.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/dataTables.bootstrap.min.css')?>"/>
    
    <!-- ============================================================================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <!-- <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: #ffffff !important;} .asteriskField{color: red;}</style>
  </head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">E-Media</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="<?php echo base_url().'index.php/admin'?>">Home</a></li>
      <li><a href="<?php echo base_url().'index.php/berita_utama'?>">Berita Kegiatan</a></li>
      <li><a href="<?php echo base_url().'index.php/foto_kegiatan'?>">Foto Kegiatan</a></li>
      <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url().'index.php/pengumuman'?>">Pengumuman
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url().'index.php/pengumuman'?>">Berita Upacara</a></li>
            <!-- <li><a href="<?php echo base_url().'index.php/dress_code'?>">Drees Code</a></li> -->
            <li><a href="<?php echo base_url().'index.php/pegawai_terbaik'?>">Pegawai terbaik</a></li>
            <li><a href="<?php echo base_url().'index.php/bazar'?>">Bazar</a></li>
            <li><a href="<?php echo base_url().'index.php/berita_duka'?>">Berita Duka</a></li>
            <li><a href="<?php echo base_url().'index.php/senam'?>">Senam</a></li>
            <li><a href="<?php echo base_url().'index.php/pengajian'?>">Berita Keagamaan</a></li>
          </ul>
        </li>
      <li><a href="<?php echo base_url().'index.php/live_streaming'?>">Live Streaming</a></li>
      <li><a href="<?php echo base_url().'index.php/video'?>">Video</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a target="_blank" href="<?php echo base_url('index.php/slide')?>"><span class="glyphicon glyphicon-home"></span> Lihat Slide</a></li>
      <li><a href="#"><span></span>|</a></li>
      <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Hai, <?php echo $this->session->userdata('nama_pengguna'); ?></a>
          <ul class="dropdown-menu">
      <li><a href="<?php echo base_url('index.php/admin/logout'); ?>"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
 <h3>Berita Duka</h3>
  <p>Sistem Pengelolaan Berita Lingkungan Kerja BKN Pusat</p>
   <?php if ($this->session->flashdata('pop')): ?>
     <div class="alert bg-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        <?php echo $this->session->flashdata('pop');?>
     </div>
   <?php endif; ?>
   <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo"><span class="glyphicon glyphicon-plus"></span> Tambah Berita Duka</button><br>
  <div id="demo" class="collapse">
    <div class="panel panel-default">
    <div class="panel-heading">Input Berita Duka</div>
    <div class="panel-body">
      <?php echo form_open_multipart('berita_duka/store');?>
        <div class="form-group">
          <label for="">Nama Pengumuman</label>
          <input type="text" name="nama_pengumuman" class="form-control" id="" value="Berita Duka">
        </div>
        <div class="form-group">
            <label for="">Nama Pegawai</label>
            <input type="text" class="form-control" name="nama_pegawai" required="data hasrus diisi" placeholder="Nama Pegawai">
          </div>
        <div class="form-group">
            <label for="">NIP</label>
            <input type="text" class="form-control" maxlength="18" minlength="18" name="nip" required="data hasrus diisi" placeholder="NIP">
        </div>
        <div class="form-group">
            <label for="">Jabatan</label>
            <input type="text" class="form-control" name="jabatan" required="data hasrus diisi" placeholder="Jabatan">
          </div>
        <div class="form-group">
          <label for="exampleInputFile">Gambar</label>
            <?php echo form_error('filefoto'); ?>
          <input type="file" name="foto" id="exampleInputFile">
          <span class="label label-success">Ukuran maksimal 2 MB. Format file: jpeg, jpg, dan png.</span>
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Keterangan</label>
          <textarea class="form-control" name="keterangan" rows="3" placeholder="Keterangan foto yang ditampilkan"></textarea>
        </div>
          <button type="submit" class="btn btn-info">Submit</button>
          <button type="reset" class="btn btn-warning">Clear</button>
      <?php echo form_close(); ?>
    </form>
    </div>
    <!-- <div class="panel-footer">Panel Footer</div> -->
  </div>
  </div>
</div>


      <div class="container">
        <h2>Data Berita Duka</h2>
        <?php if ($this->session->flashdata('popu')): ?>
          <div class="alert bg-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <?php echo $this->session->flashdata('popu');?>
          </div>
        <?php endif; ?>       
        <table id="p" class="table table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Pengumuman</th>
              <th>Nama Pegawai</th>
              <th>NIP</th>
              <th>Jabatan</th>
              <th>Foto</th>
              <th>Keterangan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; foreach ($berita_dukaa as $ko) { ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $ko->nama_pengumuman; ?></td>
              <td><?php echo $ko->nama_pegawai; ?></td>
              <td><?php echo $ko->nip; ?></td>
              <td><?php echo $ko->jabatan; ?></td>
              <td style="width: 30%;"><img style="width: 30%;" src="<?php echo base_url(); ?>images/<?php echo $ko->foto; ?>"></td>
              <td><?php echo $ko->keterangan; ?></td>
              <td><center><?php echo anchor('berita_duka/edit/'.$ko->id, '<button type="button" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i></button>'); ?>
                <?php echo anchor('berita_duka/delete/'.$ko->id, '<button onclick="return confirm(\'Apakah Anda Yakin Ingin menghapus Data ini ???\')" type="button" class="btn btn-danger"><span class=" glyphicon glyphicon-trash"></span></button>'); ?></center></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>

    <script src="<?php echo base_url('js/jquery-3.2.1.min.js')?>"></script>
    <script src="<?php echo base_url('js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('js/dataTables.bootstrap.min.js')?>"></script>
    
    <script type="text/javascript">
      $(document).ready(function() {
        $('#p').DataTable();
    } );
    </script>

</body>
</html>

