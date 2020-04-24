<div class="pull-right">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah Dokter</button>
</div>

<h2 style="margin-top: 0;margin-bottom: 0;">Data Dokter</h2>
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
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; foreach ($data as $d ) {?>
            <tr>
                <form action="">
                    <td>
                        <?php echo $no++ ?>
                    </td>
                    <td>
                        DO0<?php echo $d->id ?>
                    </td>
                    <td>
                        <?php echo $d->nama ?>
                    </td>
                    <td>
                        <?php echo $d->alamat ?>
                    </td>

                    <td>
                        <?php echo $d->nama_spesialis ?>
                    </td>
                    <td>
                        <img src="<?=base_url()?>assets/Foto/<?=$d->foto?>" style="width:150px; height:150px;" alt="foto">
                    </td>
                    
                    <td>
                         <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $d->id ?>"><i class="fas fa-user-edit"></i></button>
                        <a type="button" class="btn btn-danger" href="<?php echo base_url('Page/hapusdokter/'.$d->id); ?>" onClick="return confirm('Apakah Anda Yakin?')"><i class="fas fa-user-times"></i></a></td>
                </form>
            </tr>
            <?php } ?>
    </tbody>
</table>
</div>
</div>



<?php $no=1; foreach ($data as $d ) {?>
    <div class="modal fade" id="edit<?php echo $d->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <center>
                        <h2>EDIT DATA DOKTER </h2></center>
                </div>
                <div class="modal-body">
                    
                    <form method="post" action="<?php echo base_url('page/editdokter/'); ?>" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="Nid" name="nid" value="<?php echo $d->id ?>" required>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Nama</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="nama" value="<?php echo $d->nama ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Alamat</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Alamat" name="alamat" value="<?php echo $d->alamat ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Spesialis</label>
                            <select class="form-control" id="formGroupExampleInput2" name="id_spesialis" required>
                            
                                <?php foreach ($dataJ as $c ): ?>
                                    <option value="<?php echo $c->id_spesialis; ?>">
                                        <?php echo $c->nama_spesialis;  ?>
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

        
        <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <center>
                            <h2>TAMBAH DATA DOKTER</h2></center>
                    </div>
                    <div class="modal-body">
                        <!-- isi form ini -->
                        <form method="POST" action="<?php echo base_url('auth/registerdokter/'); ?>" enctype="multipart/form-data">
                            <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="Role" name="role" value="Dokter" required>
                           <div class="form-group">
                                <label for="formGroupExampleInput">Name</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Alamat</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Alamat" name="alamat" required>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">No Hp</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="No Hp" name="nohp" required>
                            </div>
                             <div class="form-group">
                                <label for="formGroupExampleInput">Username</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Username" name="username" required>
                            </div>
                             <div class="form-group">
                                <label for="formGroupExampleInput">Password</label>
                                <input type="password" class="form-control" id="formGroupExampleInput" placeholder="Password" name="password" required>
                            </div>
                             <div class="form-group">
                                <label for="formGroupExampleInput">Re Password</label>
                                <input type="password" class="form-control" id="formGroupExampleInput" placeholder="Re Password" name="re-password" required>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Spesialis</label>
                                <select class="form-control" id="formGroupExampleInput2" name="id_spesialis" required>
                                    <?php foreach ($dataJ as $c ): ?>
                                        <option value="<?php echo $c->id_spesialis; ?>">
                                            <?php echo $c->nama_spesialis;  ?>
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