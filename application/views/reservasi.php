<?php
if($this->session->flashdata('message')){ 
  echo '<div class="alert alert-success">'.$this->session->flashdata('message').'</div>'; 
}
?>
    <h2 style="margin-top: 0;margin-bottom: 0;">Data Perjanjian</h2>
    <div class="clearfix"></div>
    <hr>
    <table class="table table-bordered" id="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nid</th>
                <th>Nama Dokter</th>
                <th>Subjek</th>
                <th>Pengirim</th>
                <th>Pesan</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th></th>
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
                            DO0
                            <?php echo $d->nid ?>
                        </td>
                        <td>
                            <?php echo $d->nama ?>
                        </td>
                        <td>
                            <?php echo $d->subjek ?>
                        </td>
                        <td>
                            <?php echo $d->pengirim ?>
                        </td>
                        <td>
                            <?php echo $d->pesan ?>
                        </td>
                        <td>
                            <?php echo $d->tanggal ?>
                        </td>
                        <td>
                            <?php echo $d->jam ?>
                        </td>
                        <td>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#pesan<?php echo $d->noreservasi ?>">Balas</button>
                            <a type="button" class="btn btn-danger" href="<?php echo base_url('page/hapusreservasi/'.$d->nid.'/'.$d->noreservasi); ?>" onClick="return confirm('Apakah Anda Yakin?')">Mark As Done</a></td>
                    </form>
                </tr>
                <?php } ?>
        </tbody>
    </table>
    </div>
    </div>

    <?php $no=1; foreach ($data as $d ) {?>
        <div class="modal fade" id="pesan<?php echo $d->noreservasi ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="box-header">
                            <i class="fa fa-envelope"></i>
                            <h3 class="box-title">Buat Reservasi</h3>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="<?php echo base_url('page/kirimpesan/'.$d->nid); ?>">
                                <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="" name="idpengirim" value="<?php echo $d->idpengirim?>" readonly>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Email To:</label>
                                    <input type="text" class="form-control" name="nama" placeholder="nama" value="<?php echo $d->pengirim?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Subject</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Subject" name="subjek" value="Appointment" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Pengirim</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Pengirim" name="pengirim" value="<?php echo $this->session->userdata('nama') ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Pesan & Info Kontak</label>
                                    <textarea class="textarea" placeholder="Pesan dan kontak yang bisa di hubungi" name="pesan" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;
                  "></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="sel1">Tanggal:</label>
                                    <br>
                                    <input id="datepickerr" width="270" name="tanggal" value="<?php echo $d->tanggal?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="sel1">Jam:</label>
                                    <select class="form-control" id="jam" name="jam" value="<?php echo $d->jam?>" readonly>
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
                $('#datepickerr').datepicker({
                    uiLibrary: 'bootstrap'
                });
            </script>

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>