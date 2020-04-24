      <div class="pull-right">
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit1">Tambah Obat</button>
</div>

<h2 style="margin-top: 0;margin-bottom: 0;">Data Obat</h2>
<div class="clearfix"></div>
<hr/>
      <table class="table table-bordered" id="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Id Obat</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Jenis</th>
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
              <td><?php echo $d->id_obat ?></td>
              <td><?php echo $d->namaobat ?></td>
              <td><?php echo $d->harga ?></td>
              <td><?php echo $d->nama_jenis ?></td>

              <!--BUTTON EDIT Dokter-->
              <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $d->id_obat ?>"><i class="fas fa-user-edit"></i></button></td>
              <!--BUTTON HAPUS --- ISI LENGKAPI BUTTON INI -->
              <td><a type="button" class="btn btn-danger"  href="<?php echo base_url('page/hapusobat/'.$d->id_obat); ?>" onClick="return confirm('Apakah Anda Yakin?')" ><i class="fas fa-user-times"></i></a></td>
            </form>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

<!-- Modal Edit Dokter -->

<?php $no=1; foreach ($data as $d ) {?>
<div class="modal fade" id="edit<?php echo $d->id_obat?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <center><h2>EDIT DATA OBAT <?php echo $d->id_obat ?> </h2></center>
        </div>
        <div class="modal-body">
        <!-- isi form ini -->
        <form method="post" action="<?php echo base_url('page/editobat/'); ?>">
        <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="Id Obat" name="id_obat" value="<?php echo $d->id_obat ?>"  required>
          <div class="form-group">
            <label for="formGroupExampleInput">Nama Obat</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Obat" name="namaobat"  value="<?php echo $d->namaobat ?>" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Harga Obat</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Harga Obat" name="harga"  value="<?php echo $d->harga ?>" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Jenis Obat</label>
            <select class="form-control" id="formGroupExampleInput2" name="id_jenis" required>
            <!--<option value="<?php echo '1'; ?>" selected><?php echo $d->nama_spesialis;  ?></option>-->
            <?php foreach ($dataJ as $c ): ?>
                <option value="<?php echo $c->id_jenis; ?>"><?php echo $c->nama_jenis;  ?></option>
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
      <center><h2>TAMBAH DATA OBAT</h2></center>
      </div>
      <div class="modal-body">
      <!-- isi form ini -->
      <form method="POST" action="<?php echo base_url('page/tambahobat/'); ?>">
        <div class="form-group">
          <label for="formGroupExampleInput">Id Obat</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Id Obat" name="id_obat" required >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Nama Obat</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="namaobat"required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Harga Obat</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Harga Obat" name="harga"required>
          </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Jenis Obat</label>
          <select class="form-control" id="formGroupExampleInput2" name="id_jenis" required>
          <?php foreach ($dataJ as $c ): ?>
            <option value="<?php echo $c->id_jenis; ?>"><?php echo $c->nama_jenis;  ?></option>
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
