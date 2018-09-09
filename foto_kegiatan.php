<body background="../images/background/aa.png">
<div class="container">
  <br>
  <br>
  <br>
  <br>
  <h3>Foto Kegiatan</h3>
  <p>Sistem Pengelolaan Berita Lingkungan Kerja BKN Pusat</p>

<?php if ($this->session->flashdata('pesann')): ?>
   <div class="alert bg-info">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
         <?php echo $this->session->flashdata('pesann');?>
      </div>
         <?php endif; ?> 
<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo"><span class="glyphicon glyphicon-plus"></span> Tambah Foto Kegiatan</button>
<div id="demo" class="collapse">
<div class="panel panel-default">
  <div class="panel-heading">Input Form Foto Kegiatan</div>  
    <div class="panel-body">
      <?php echo form_open_multipart('foto_kegiatan/store');?>
        <div class="form-group">
          <label for="">Nama Foto Kegiatan</label>
          <input type="text" name="nama_kegiatan" class="form-control" id="" placeholder="Nama Foto Kegiatan">
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
    </div>
  </div>
 </div>
</div>
</div>
 <div class="container">
   <h2>Data Foto Kegiatan</h2> 
   <?php if ($this->session->flashdata('pesan')): ?>
   <div class="alert bg-danger">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
         <?php echo $this->session->flashdata('pesan');?>
      </div>
         <?php endif; ?>      
     <table id="t" class="table table-hover">
        <thead>
           <tr>
              <th>No</th>
              <th>Nama Foto Kegiatan</th>
              <th>Foto</th>
              <th>Keterangan</th>
              <th>Aksi</th>
           </tr>
        </thead>
          <tbody>
            <?php $no = 1; foreach ($imagess as $p) 
              { 
            ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $p->nama_kegiatan; ?></td>
              <td style="width: 30%;"><img style="width: 30%;" src="<?php echo base_url();?>images/<?php echo $p->foto; ?>"></td>
              <td><?php echo $p->keterangan; ?></td>
              <td><center><?php echo anchor('foto_kegiatan/edit/'.$p->id, '<button type="button" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i></button>'); ?>
                <?php echo anchor('foto_kegiatan/delete/'.$p->id, '<button onclick="return confirm(\'Apakah Anda Yakin Ingin menghapus Data ini ???\')" type="button" class="btn btn-danger"><span class=" glyphicon glyphicon-trash"></span></button>'); ?>
                <?php echo anchor('foto_kegiatan/do_download/'.$p->foto, '<button type="button" class="btn btn-default"><i class="glyphicon glyphicon-download"></i></button>'); ?>
                </center></td>
            </tr>
          <?php } ?>
          </tbody>
          
        </table>
      </div>
    </body>