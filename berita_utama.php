<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Berita Kegiatan</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.min.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/src/clockpicker.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/src/standalone.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/dataTables.bootstrap.min.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dist/bootstrap-clockpicker.min.css')?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: #ffffff !important;} .asteriskField{color: red;}</style>
  </head>
<body background="../images/background/aa.png">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">E-Media</a>
    </div>
        <ul class="nav navbar-nav">
          <li><a href="<?php echo base_url().'index.php/admin'?>">Home</a></li>
          <li class="active"><a href="<?php echo base_url().'index.php/berita_utama'?>">Berita Kegiatan</a></li>
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
          <!-- <li><a href="<?php echo base_url().'index.php/pengumuman'?>">Pengumuman</a></li> -->
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
 <h3>Berita Kegiatan</h3>
  <p class="well" align="center">Sistem Pengelolaan Berita Lingkungan Kerja Akamigas Balongan</p>
   <?php if ($this->session->flashdata('success')): ?>
     <div class="alert bg-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        <?php echo $this->session->flashdata('success'); ?>
     </div>
   <?php endif; ?>
   <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo"><span class="glyphicon glyphicon-plus"></span> Tambah Berita Utama</button><br>
  <div id="demo" class="collapse">
<div class="panel panel-default">
 <div class="panel-heading">Input Form Berita Kegiatan</div>
  <div class="panel-body">
   <form action="<?php echo base_url().'index.php/berita_utama/tambah_aksi'; ?>" method="post">
    <div class="form-group">
      <label for="">Nama Kegiatan</label>
      <input type="text" class="form-control" name="nama_kegiatan" placeholder="Nama Kegiatan" required="data hasrus diisi">
    </div>
    <div class="bootstrap-iso">
      <div class="row">
        <div class="col-md-12">
          <form method="post">
            <label class="control-label " for="date">Tanggal Mulai</label>
              <div class="input-group">          
               <input class="form-control" name="date" required="data harus diisi" placeholder="YYYY-MM-DD" type="text">
                <span class="input-group-addon">
               <span class="glyphicon glyphicon-calendar"></span>
              </span>
            </div>     
          </div>
         </div>
       </div>
       <br>
       <div class="bootstrap-iso">
        <div class="row">
          <div class="col-md-12">
            <form method="post"> 
              <label class="control-label" for="datee">Tanggal Selesai</label>
                <div class="input-group">          
                 <input class="form-control" name="datee" required="data harus diisi" placeholder="YYYY-MM-DD" type="text">
                  <span class="input-group-addon">
                 <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>     
            </div>
           </div>
         </div>
       <br>
    <label class="input-group clockpicker" for="clockpicker">Jam Mulai</label>
      <div class="input-group clockpicker" data-placement="left" data-align="top" data-autoclose="true">  
       <input type="text" class="form-control" name="jam_mulai" value="00:00">
        <span class="input-group-addon">
       <span class="glyphicon glyphicon-time"></span>
      </span>
    </div>
    <br>
    <label class="control-label " for="date">Jam Selesai</label>
      <div class="input-group clockpicker" data-placement="left" data-align="top" data-autoclose="true">
       <input type="text" class="form-control" name="jam_selesai" value="00:00">
        <span class="input-group-addon">
       <span class="glyphicon glyphicon-time"></span>
      </span>
    </div>
    <br>
    <div class="form-group">
        <label for="">Tempat Kegiatan</label>
        <input type="text" class="form-control" name="tempat_kegiatan" required="data hasrus diisi" placeholder="Tempat Kegiatan">
    </div>
    <div class="form-group">
        <label for="">PIC</label>
        <input type="text" class="form-control" name="pic" required="data hasrus diisi" placeholder="PIC">
    </div>
        <button type="submit" class="btn btn-info">Submit</button>
        <button type="reset" class="btn btn-warning">Clear</button>
        </form>
       </div>
      </div>
     </div>
    </div>
</div>

<div class="container">
  <h2>Data Berita Kegiatan</h2>  
    <?php if ($this->session->flashdata('pesann')): ?>
      <div class="alert bg-danger">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
         <?php echo $this->session->flashdata('pesann');?>
      </div>
         <?php endif; ?>
<table id="berita_utamaaa" class="table table-hover table-condensed">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Kegiatan</th>
      <th>Tanggal Mulai</th>
      <th>Tanggal Selesai</th>
      <th>Jam Mulai</th>
      <th>Jam Selesai</th>
      <th>Tempat Kegiatan</th>
      <th>PIC</th>
      <th><center>Aksi</center></th>
    </tr>
  </thead>


<tbody>
<?php $no = 1; 
foreach ($berita_utamaa as $k) {
if ($no%2 == 0) {
   $color = 'info';
 }else{
  $color = 'success';
 } ?>
  <tr class="<?php echo $color ?>">
    <td><?php echo $no++ ?></td>
    <td><?php echo $k->nama_kegiatan; ?></td>
    <td><?php echo $k->date; ?></td>
    <td><?php echo $k->datee; ?></td>
    <td><?php echo $k->jam_mulai; ?></td>
    <td><?php echo $k->jam_selesai; ?></td>
    <td><?php echo $k->tempat_kegiatan; ?></td>
    <td><?php echo $k->pic; ?></td>
    <td><center><?php echo anchor('berita_utama/edit/'.$k->id, '<button type="button" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i></button>'); ?>
                <?php echo anchor('berita_utama/hapus/'.$k->id, '<button onclick="return confirm(\'Apakah Anda Yakin Ingin menghapus Data ini ???\')" type="button" class="btn btn-danger"><span class=" glyphicon glyphicon-trash"></span></button>'); ?></center></td>
  </tr>
<?php } ?>
</tbody>

</table>
</div>
    <script src="<?php echo base_url('js/jquery-3.2.1.min.js')?>"></script>
    <script src="<?php echo base_url('js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('js/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/src/clockpicker.js')?>"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
      <script>
            $(document).ready(function(){
                var date_input=$('input[name="date"]'); //our date input has the name "date"
                var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                date_input.datepicker({
                    format: 'yyyy-mm-dd',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                    startDate: '-0d',
                    // endDate: '+4w',
                    // minDate: 0,
                    // daysOfWeekDisabled: [0, 6],
                    //startDate: +2m,
                    //minDate: 0,
                    // datesDisabled: ['2017-09-01'],
                })
            })
      </script>
      <script>
            $(document).ready(function(){
                var date_input=$('input[name="datee"]'); //our date input has the name "date"
                var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                date_input.datepicker({
                    format: 'yyyy-mm-dd',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                    startDate: '-0d',
                    // endDate: '+4w',
                    // minDate: 0,
                    // daysOfWeekDisabled: [0, 6],
                    //startDate: +2m,
                    //minDate: 0,
                    // datesDisabled: ['2017-09-01'],
                })
            })
      </script>

      <script type="text/javascript">
        $(document).ready(function() 
        {
          $('#berita_utamaaa').DataTable();  
        } );
      </script>

      <script type="text/javascript">
      $('.clockpicker').clockpicker({
                placement: 'bottom',
                align: 'left'
              });
      </script>
</body>
</html>