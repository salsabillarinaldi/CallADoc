  <div class="pull-right">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah Obat</button>
</div>

<h2 style="margin-top: 0;margin-bottom: 0;">Data Obat</h2>
<div class="clearfix"></div>
<hr/>
<table class="table table-bordered" id="table">
    <thead>
        <tr>
             <th>No</th>
            <th>Gambar Obat</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Deskripsi Obat</th>
            <th>Aksi</th>
           
        </tr>
    </thead>
    <tbody>
        <?php $no=1; foreach ($data as $row ) {?>
            <tr>
              
                <form action="">
                     <td>
                        <?php echo $no++ ?>
                    </td>
                    <td>
                        <img width="250px" height="250px" src="<?php echo base_url() . 'assets/images/'.$row['gambar']; ?>">
                    </td>
                    <td>
                        <?php echo $row['nama_produk'];?>
                    </td>
                    <td>
                        Rp. <?php echo number_format($row['harga'],0,",",".");?>
                    </td>
                    <td>
                        <?php echo $row['deskripsi'];?>
                    </td>
                
                    <td>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $row['id_produk'];?>"><i class="fas fa-user-edit"></i></button>&nbsp;
                        <a type="button" class="btn btn-danger" href="    <?php echo base_url();?>page/hapusobat/<?php echo$row['id_produk'];?>" onClick="return confirm('Apakah Anda Yakin?')"><i class="fa fa-user-times"></i></a></td>
                </form>
            </tr>
            <?php } ?>
    </tbody>
</table>
</div>
</div>



<?php $no=1; foreach ($data as $d ) {?>
    <div class="modal fade" id="edit<?php echo$d['id_produk'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <center>
                        <h2>EDIT DATA OBAT</h2></center>
                </div>
                <div class="modal-body">
                    
                    <form method="post" action="<?php echo base_url('page/editobat/'); ?>">
                        <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="Id Obat" name="id_obat" value="<?php echo$d['id_produk'];?>" required>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Nama Obat</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Obat" name="namaobat" value="<?php echo$d['nama_produk'];?>" required>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Harga Obat</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Harga Obat" name="harga" value="<?php echo$d['harga'];?>" required>
                        </div>
                         <div class="form-group">
                            <label for="formGroupExampleInput">Deskripsi Obat</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Harga Obat" name="deskripsi" value="<?php echo$d['deskripsi'];?>" required>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Jenis Obat</label>
                            <select class="form-control" id="formGroupExampleInput2" name="id_jenis" required>
                                
                                <?php foreach ($dataJ as $c ): ?>
                                    <option value="<?php echo$c['id'];?>">
                                       <?php echo$c['nama_kategori'];?>
                                    </option>
                                    <?php endforeach; ?>
                            </select>
                        </div>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><b>Profile Picture</b></span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto" name="foto" accept='image/*' required>
                                <label class="custom-file-label text-left" for="foto">Choose file</label>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    <input type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
                </div>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>

    
        <div class="modal fade" id="tambah" tabindex="-x1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <center>
                            <h2>TAMBAH DATA OBAT</h2></center>
                    </div>
                    <div class="modal-body">
                        
                        <form method="POST" action="<?php echo base_url('page/tambahobat/'); ?>" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Nama Obat</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="namaobat" required>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Harga Obat</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Harga Obat" name="harga" required>
                            </div>
                             <div class="form-group">
                                <label for="formGroupExampleInput">Deskripsi Obat</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Deskripsi" name="deskripsi" required>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Jenis Obat</label>
                                <select class="form-control" id="formGroupExampleInput2" name="id_jenis" required>
                                    <?php foreach ($dataJ as $c ): ?>
                                    <option value="<?php echo$c['id'];?>">
                                       <?php echo$c['nama_kategori'];?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                              <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><b>Profile Picture</b></span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto" name="foto" accept='image/*' required>
                                <label class="custom-file-label text-left" for="foto">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <input type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
                        </form>
                    </div>
                </div>
                </form>
            </div>
        </div>
        </div>
        </div>
        </div>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#table').DataTable();
            });
        </script>
        <br>
        <br>