<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="../slide/style.css" rel="stylesheet">
</head>
<body>

<div class="container" style="padding-top: 15px; padding-right:30px; padding-left: 30px; padding-bottom: 50px; width: 100%">
        <div class="row" style="align-content: center; margin-bottom: 10px; background-color: dodgerblue;">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="height: 50px; margin-top: 0px; margin-bottom: 0px; padding-bottom: 10px; padding-top: 10px;">
              <!-- <div class="col-xs-12" style="width: 1336px; height: 60px;"> -->
              <p style="text-align: center; font-size: 26px; font-family: monospace; "><b> E - M E D I A </b></p>
            </div>
          </div>


          <div class="row" style="align-content: center; margin-bottom: 10px;">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="padding-bottom: 5px; padding-top: 5px; padding-right: 5px; padding-left: 5px;">
                <h2 class="text-center" style="margin-top: 0px; margin-bottom: 0px;">Berita Upacara</h2>
                <div class="table-responsive table-striped table table-condensed" style="margin-bottom: 0px;">
                <table class="table-responsive table-striped table table-condensed" style="font-size: 12px; font-family: georgia;">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Kegiatan</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Tempat</th>
                        <!-- <th>coba</th> -->
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no=1; foreach ($upacara as $u) { ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $u->nama_kegiatan ?></td>
                        <td><?php echo $u->date ?></td>
                        <td><?php echo $u->jam_mulai ?> s/d <?php echo $u->jam_selesai ?></td>
                        <td><?php echo $u->tempat_kegiatan ?></td>
                        <!-- <td>asasasasasa</td> -->
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
            </div>
          </div>
            <!-- <div class="col-xs-4" style="">
                <h2 class="text-center" style="margin-top: 0px; margin-bottom: 0px;">Foto</h2>
                <p>CSS is used for describing the presentation of web pages. The CSS tutorial section will help you learn the essentials of CSS, so that you can fine control the style and layout of your HTML.</p>
                <p><a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank" class="btn btn-success">Learn More &raquo;</a></p>
            </div> -->
            <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="width: 439px; height: 251px; padding-top: 5px; padding-bottom: 5px; padding-right: 5px; padding-left: 5px;"> -->
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style=" padding-top: 5px; padding-bottom: 5px; padding-right: 5px; padding-left: 5px;">
              <h2 class="text-center" style="margin-top: 0px; margin-bottom: 0px">Foto</h2>
              <div style="width: 100%;" id="myCarousel" class="carousel slide"  data-ride="carousel"  >
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" >

                  <div class="item active" style="width: 100%;">
                    <img src="pic1.jpg" alt="Los Angeles" style="width: 500px; height: 206px; vertical-align: center;">
                    <div class="carousel-caption">
                      <h3>Los Angeles</h3>
                      <p>LA is always so much fun!</p>
                    </div>
                  </div>

                  <div class="item">
                    <img src="pic2.jpg" alt="Chicago" style="width: 500px; height: 206px; vertical-align: center;">
                    <div class="carousel-caption">
                      <h3>Chicago</h3>
                      <p>Thank you, Chicago!</p>
                    </div>
                  </div>
                
                  <div class="item">
                    <img src="pic3.jpg" alt="New York" style="width: 500px; height: 206px; vertical-align: center;">
                    <div class="carousel-caption">
                      <h3>New York</h3>
                      <p>We love the Big Apple!</p>
                    </div>
                  </div>
              
                </div>

                <!-- Left and right controls -->
                 <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a> 
              </div>
            </div>


            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="padding-bottom: 5px; padding-top: 5px; padding-right: 5px; padding-left: 5px;">
                <h2 class="text-center" style="margin-top: 0px; margin-bottom: 0px;">Berita Upacara</h2>
                <div class="table-responsive table-striped table table-condensed" style="margin-bottom: 0px;">
                <table class="table table-condensed table-responsive table-striped" style="font-family: georgia; font-size: 12px;">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Kegiatan</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Tempat</th>
                        <!-- <th>coba</th> -->
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@exam.com</td>
                        <td>aaaaaaa</td>
                        <!-- <td>asasasasasa</td> -->
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>mary@exam.com</td>
                        <td>adaddada</td>
                        <!-- <td>asasasasas</td> -->
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>july@exam.com</td>
                        <td>asasasasa</td>
                        <!-- <td>asasasas</td> -->
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>july@exam.com</td>
                        <td>asasasasa</td>
                        <!-- <td>asasasas</td> -->
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>july@exam.com</td>
                        <td>asasasasa</td>
                        <!-- <td>asasasas</td> -->
                      </tr>
                    </tbody>
                  </table>
            </div>
          </div>
        </div>

        <div class="row" style="align-content: center; margin-bottom: 10px;">
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" style="padding-bottom: 5px; padding-top: 5px; padding-right: 5px; padding-left: 5px;">
                <h2 class="text-center" style="margin-top: 0px; margin-bottom: 0px;">Berita Kegiatan</h2>
                <div class="table-responsive table-striped table table-condensed" style="margin-bottom: 0px;">
                <table class="table table-condensed table-responsive table-striped" style="font-family: georgia; font-size: 12px;">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Kegiatan</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Tempat</th>
                        <!-- <th>coba</th> -->
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@exam.com</td>
                        <td>aaaaaaa</td>
                        <!-- <td>asasasasasa</td> -->
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>mary@exam.com</td>
                        <td>adaddada</td>
                        <!-- <td>asasasasas</td> -->
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>july@exam.com</td>
                        <td>asasasasa</td>
                        <!-- <td>asasasas</td> -->
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>july@exam.com</td>
                        <td>asasasasa</td>
                        <!-- <td>asasasas</td> -->
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>july@exam.com</td>
                        <td>asasasasa</td>
                        <!-- <td>asasasas</td> -->
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>
            <!-- <div class="col-xs-4">
                <h2>CSS</h2>
                <p>CSS is used for describing the presentation of web pages. The CSS tutorial section will help you learn the essentials of CSS, so that you can fine control the style and layout of your HTML document.</p>
                <p><a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank" class="btn btn-success">Learn More &raquo;</a></p>
            </div> -->
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="padding-bottom: 5px; padding-top: 5px; padding-right: 5px; padding-left: 5px; ">
                <h2 class="text-center" style="margin-top: 0px; margin-bottom: 0px;">Bazar</h2>
                <div class="table-responsive table-striped table table-condensed" style="margin-bottom: 0px;">
                <table class="table table-condensed table-responsive table-striped" style="font-family: georgia; font-size: 12px;">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Kegiatan</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Tempat</th>
                        <!-- <th>coba</th> -->
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@exam.com</td>
                        <td>aaaaaaa</td>
                        <!-- <td>asasasasasa</td> -->
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>mary@exam.com</td>
                        <td>adaddada</td>
                        <!-- <td>asasasasas</td> -->
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>july@exam.com</td>
                        <td>asasasasa</td>
                        <!-- <td>asasasas</td> -->
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>july@exam.com</td>
                        <td>asasasasa</td>
                        <!-- <td>asasasas</td> -->
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>july@exam.com</td>
                        <td>asasasasa</td>
                        <!-- <td>asasasas</td> -->
                      </tr>
                    </tbody>
                  </table>
            </div>
          </div>
        </div>
        <div class="row" style="align-content: center; background-color: dodgerblue;">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="height: 50px;">
            <marquee>Ini Adalah Running Text</marquee>
          </div>
        </div>
</div>

</body>
</html>