<!DOCTYPE html>
<html lang="en">
<head>
  <title>BKN || E-media</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="/css/style.css" rel="stylesheet">
<style>
body{
  overflow: hidden;
}
/*#home {
    background: url(../images/background/oo.png) no-repeat;
    width: 438px;
    height: 338px;*/
}
</style>
</head>
<body style="width: 100%; height: 100%; background-image: url('../images/background/1.jpg')">


<?php date_default_timezone_set('Asia/Jakarta'); ?>
<div class="container" style="padding-top: 10px; padding-right:30px; padding-left: 30px; padding-bottom: 0px; width: 100%">
        <div class="row" style="align-content: center; margin-bottom: 10px; ">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="height: 50px; margin-top: 0px; margin-bottom: 0px; padding-bottom: 10px; padding-top: 10px; ">
              <!-- <div class="col-xs-12" style="width: 1336px; height: 60px;"> -->
                
              <p style="font-weight: bold;"><img src="../images/background/12.png" alt="logo" height="39" width="110" style="align-content: center;">
              <?php
              /* script menentukan hari */  
               $array_hr= array(1=>"Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
               $hr = $array_hr[date('N')];

              /* script menentukan tanggal */    
              $tgl= date('j');
              /* script menentukan bulan */ 
                $array_bln = array(1=>"Januari","Februari","Maret", "April", "Mei","Juni","Juli","Agustus","September","Oktober", "November","Desember");
                $bln = $array_bln[date('n')];
              /* script menentukan tahun */ 
              $thn = date('Y');
              /* script perintah keluaran*/ 
               echo $hr . ", " . $tgl . " " . $bln . " " . $thn . " | " . date('H:i')." WIB " ; 
               ?></p>
            </div>
          </div>


          <div class="row" style="align-content: center; margin-bottom: 10px;">
            <div id="home" class="col-xs-6 col-sm-6 col-md-6 col-lg-6"  style="min-width:438.66px; min-height: 338px; padding-bottom: 5px; padding-top: 5px; padding-right: 5px; padding-left: 5px; background-image: url('../images/background/fr.png');"> 
                <h3 class="text-center" style="margin-top: 0px; margin-bottom: 7px;">AGENDA KEGIATAN</h3>
                <div class="table-responsive  table-condensed" style="margin-bottom: 0px;">
                <?php if ($beritama == null) {
                  echo '<br><br><br><br><br>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="alert alert-warning alert-dismissible fade in" role="alert">
                              <p><center><strong>TIDAK ADA AGENDA KEGIATAN</strong></center></p>
                           </div>
                        </div>';
                }else{ ?>
                <table class="table-responsive table table-condensed table-striped" style="font-family: sans-serif; font-size: 12px;">
                    <tbody>
                      <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Kegiatan</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Tempat</th>
                      </tr>
                    </thead>
                    <?php $no=1; foreach ($beritama as $e ) { ?>               
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $e->nama_kegiatan ?></td>
                        <td><?php echo $e->date ?> s/d <?php echo $e->datee ?></td>
                        <td><?php echo $e->jam_mulai ?> s/d <?php echo $e->jam_selesai ?> WIB</td>
                        <td><?php echo $e->tempat_kegiatan ?></td>
                      </tr>
                      <?php } } ?>
                    </tbody>
                  </table>

                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="min-width:438.66px; min-height: 338px; padding-top: 5px; padding-bottom: 5px; padding-right: 5px; padding-left: 5px; background-image: url('../images/background/frame5.png');">
              <h3 class="text-center" style="margin-top: 0px; margin-bottom: 0px"></h3>

              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    </ol>
                    <div class="carousel-inner">

                        <?php 
                        $no = 1;
                        foreach ($fotokeg as $slide) { 
                        if ($no == 1) {
                          $active = 'active';
                        }else{
                          $active = '';
                        }
                        ?>
                        

                          <div class="item <?php echo $active;?>" style="width:100%; ">
                            <center><img src="<?php echo base_url(); ?>images/<?php echo $slide->foto ?>" class="img-responsive" alt="Los Angeles"; style="width: 620px; height: 300px; vertical-align: center; margin-top: 12px;"></center>
                            <div class="carousel-caption">
                              <h3><?php echo $slide->keterangan ?></h3>
                            </div>
                          </div>  
                        
                        <?php 
                        $no++;
                        }
                        ?>

                    </div>
                    <a class="" href="#myCarousel" data-slide="prev">
                    </a>
                    <a class="" href="#myCarousel" data-slide="next">
                    </a>
                  </div>
                </div>
            </div>

        <div class="row" style="align-content: center; margin-bottom: 10px;">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="min-width:438.66px; min-height: 338px; padding-bottom: 5px; padding-top: 5px; padding-right: 5px; padding-left: 5px; background-color: #80ffe5; background-image:url('../images/background/frame5.png')">
                <h3 class="text-center" style="margin-top: 0px; margin-bottom: 14px;">PEGAWAI TERBAIK</h3>
                <div class="table-responsive table-condensed" style="margin-bottom: 0px;">
                  <?php if ($terbaik == null) {
                  echo '<br><br><br><br><br>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="alert alert-warning alert-dismissible fade in" role="alert">
                              <p><center><strong>TIDAK ADA AGENDA KEGIATAN</strong></center></p>
                           </div>
                        </div>';
                }else{ ?>

                <?php $no=1; foreach ($terbaik as $u) { ?>
                <center><img src="<?php echo base_url(); ?>images/<?php echo $u->foto ?>" class="img-thumbnail" alt="Cinque Terre" width="160" height="100">
                  <div class="table-responsive table-condensed" style="margin-bottom: 0px;">
                  <table class="table-condensed table-responsive " style="font-family: georgia; font-size: 12px;">
                     
                      <tr>
                        <td>NIP</td>
                        <td>:</td>
                        <td><?php echo $u->nip ?></td>
                      </tr>
                      <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?php echo $u->nama_pegawai ?></td>
                      </tr>
                      <tr>
                        <td>Keterangan</td>
                        <td>:</td>
                        <td><?php echo $u->keterangan ?></td>
                      </tr>
                      <?php } } ?>                    
                  </table>
                  </div>
                </center>
            </div>
          </div>

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style=" min-width:438.66px; min-height: 338px; padding-bottom: 5px; padding-top: 5px; padding-right: 5px; padding-left: 5px; background-image: url('../images/background/frame5.png');">
                <h3 class="text-center" style="margin-top: 0px; margin-bottom: 10px;">BERITA DUKA</h3>
                <div class="table-responsive  table-condensed" style="margin-bottom: 0px;">
                <?php if ($duka == null) {
                  echo '<br><br><br><br><br>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="alert alert-warning alert-dismissible fade in" role="alert">
                              <p><center><strong>TIDAK ADA </strong></center></p>
                           </div>
                        </div>';
                }else{ ?>
                
                <?php $no=1; foreach ($duka as $z ) { ?>   

                <center><img src="<?php echo base_url(); ?>images/<?php echo $z->foto ?>" class="img-circle" alt="Cinque Terre" width="210" height="200">
                  <div class="table-responsive table-condensed" style="margin-bottom: 0px;">
                  <table class="table-condensed table-responsive " style="font-family: georgia; font-size: 12px;">
                      <tr>
                        <td>NIP</td>
                        <td>:</td>
                        <td><?php echo $z->nip ?></td>
                      </tr>
                      <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?php echo $z->nama_pegawai ?></td>
                      </tr>
                      <tr>
                        <td>Keterangan</td>
                        <td>:</td>
                        <td><?php echo $z->keterangan ?></td>
                      </tr>
                      <?php } } ?>
                  </table>
                  </div>
                </center>
            </div>
          </div>
        </div>
</div>

</body>
</html>