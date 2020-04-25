<?php
// Cek apakah terdapat session nama message
if($this->session->flashdata('message')){ // Jika ada
  echo '<div class="alert alert-success">'.$this->session->flashdata('message').'</div>'; // Tampilkan pesannya
}
?>
    <div class="pull-right">
        <a href="<?php echo base_url('page/home/'); ?>">
            <button type="button" class="btn btn-primary">Back</button>
        </a>
    </div>

    <h2 style="margin-top: 0;margin-bottom: 0;">Ask Doctor</h2>
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
                <th></th>

            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach ($data as $d ) {?>
                <tr>
                    <!--HINT UNTUK MENGHAPUS USER KALIAN DAPAT MENGGUNAKAN FORM, MENGGUNAKAN ANCHOR ATAU HREF PADA BUTTON-->
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
                        <td><img src="<?=base_url()?>assets/Foto/<?=$d->foto?>" style="width:150px; height:150px;" alt="foto"></td>

                        <!--BUTTON EDIT Dokter-->
                        <td>
                            <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#edit<?php echo $d->id ?>"><i class="fas fa-envelope"></i></button>
                        </td>
                        <!--BUTTON HAPUS --- ISI LENGKAPI BUTTON INI -->
                    </form>
                </tr>
                <?php } ?>
        </tbody>
    </table>
    </div>
    </div>

    <!-- Modal Edit Dokter -->

    <?php $no=1; foreach ($data as $d ) {?>
        <div class="modal fade" id="edit<?php echo $d->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="box-header">
                            <i class="fa fa-envelope"></i>
                            <h3 class="box-title">Buat Reservasi</h3>
                        </div>
                        <div class="modal-body">
                            <!-- isi form ini -->
                            <form method="post" action="<?php echo base_url('page/tambahreservasi'); ?>">
                                 <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="Subject" name="nid" value="<?php echo $d->id ?>" readonly>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Email To:</label>
                                    <input type="text" class="form-control" name="nama" placeholder="" value="<?php echo $d->nama?>"  readonly>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Subject</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Subject" name="subjek" value="Appointment" readonly="">
                                </div>
                                 <div class="form-group">
                                    <label for="formGroupExampleInput">Pengirim</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Pengirim" name="pengirim" value="<?php echo $this->session->userdata('nama') ?>" readonly>
                                </div>
                                <div>
                                     <label for="formGroupExampleInput">Pesan & Info Kontak</label>
                                    <textarea class="textarea" placeholder="Pesan dan kontak yang bisa di hubungi"  name="pesan" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;
                  "></textarea>
                                </div>
                                <label for="sel1">Tanggal:</label>
                                 <input id="datepicker" width="270" name="tanggal" />
                                <div class="form-group">
  <label for="sel1">Jam:</label>
  <select class="form-control" id="sel1" name="jam">
    <option>14.00</option>
    <option>15.00</option>
    <option>16.00</option>
    <option>20.00</option>
  </select>
</div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="margin-right: 3px;">Cancel</button>

                            <button type="submit" class="pull-right btn btn-default" id="sendEmail">Send
                                <i class="fa fa-arrow-circle-right"></i></button>
                        
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <?php } ?>

            <script type="text/javascript">
                $(document).ready(function() {
                    $('#table').DataTable();
                });
                $('#datepicker').datepicker({
            uiLibrary: 'bootstrap'
        });
            </script>
            <br>
            <br>