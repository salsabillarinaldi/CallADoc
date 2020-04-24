 <div class="pull-right">
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit1">Add Doctor</button>
</div>

<h2 style="margin-top: 0;margin-bottom: 0;">DOCTOR DATA</h2>
<div class="clearfix"></div>
<hr/>

                
     
      <table class="table table-bordered" id="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Id Dokter</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Spesialis</th>
            <th>Edit</th>
            <th>Hapus</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; foreach ($data as $d ) {?>
          <tr>
        <!--HINT UNTUK MENGHAPUS USER KALIAN DAPAT MENGGUNAKAN FORM, MENGGUNAKAN ANCHOR ATAU HREF PADA BUTTON-->
            <form action="">
              <td><?php echo $no++ ?></td>
              <td><?php echo $d->nid ?></td>
              <td><?php echo $d->nama ?></td>
              <td><?php echo $d->alamat ?></td>
              <td><?php echo $d->nama_spesialis ?></td>

              <!--BUTTON EDIT Dokter-->
              <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $d->nid ?>"><i class="fas fa-user-edit"></i></button></td>
              <!--BUTTON HAPUS --- ISI LENGKAPI BUTTON INI -->
              <td><a type="button" class="btn btn-danger"  href="<?php echo base_url('Page/hapusdokter/'.$d->nid); ?>" onClick="return confirm('Apakah Anda Yakin?')" ><i class="fas fa-user-times"></i></a></td>
            </form>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

<!-- Modal Edit Dokter -->

<?php $no=1; foreach ($data as $d ) {?>
  <div class="modal fade" id="edit<?php echo $d->nid ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <center><h2>EDIT DATA DOKTER <?php echo $d->nid ?> </h2></center>
        </div>
        <div class="modal-body">
        <!-- isi form ini -->
        <form method="post" action="<?php echo base_url('page/editdokter/'); ?>">
        <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="Nid" name="nid" value="<?php echo $d->nid ?>"  required>
          <div class="form-group">
            <label for="formGroupExampleInput">Nama</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="nama"  value="<?php echo $d->nama ?>" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Alamat</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Alamat" name="alamat" value="<?php echo $d->alamat ?>" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Spesialis</label>
            <select class="form-control" id="formGroupExampleInput2" name="id_spesialis" required>
            <!--<option value="<?php echo '1'; ?>" selected><?php echo $d->nama_spesialis;  ?></option>-->
            <?php foreach ($dataJ as $c ): ?>
                <option value="<?php echo $c->id_spesialis; ?>"><?php echo $c->nama_spesialis;  ?></option>
            <?php endforeach; ?>
            </select>            
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
        </div>
        </form>
      </div>
    </div>
  </div>
<?php } ?>

<!-- Modal Tambah Dokter -->
<div class="modal fade" id="edit1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <center><h2>TAMBAH DATA DOKTER</h2></center>
      </div>
      <div class="modal-body">
      <!-- isi form ini -->
      <form method="POST" action="<?php echo base_url('Page/tambahdokter/'); ?>">
        <div class="form-group">
          <label for="formGroupExampleInput">NID</label>
          <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Nid" name="nid" required >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Nama</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="nama"required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Alamat</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Alamat" name="alamat" required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Spesialis</label>
          <select class="form-control" id="formGroupExampleInput2" name="id_spesialis" required>
          <?php foreach ($dataJ as $c ): ?>
            <option value="<?php echo $c->id_spesialis; ?>"><?php echo $c->nama_spesialis;  ?></option>
          <?php endforeach; ?>
          </select>            
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
      </form>
      </div>
    </div>
 


</body>
  <script type="text/javascript">
    $(document).ready( function () {
        $('#table').DataTable();
    } );
  </script>
</html>
