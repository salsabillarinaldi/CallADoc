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
            <th>Nama Dokter</th>
            <th>Subjek</th>
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
                        <?php echo $d->nama ?>
                    </td>
                    <td>
                        <?php echo $d->subjek ?>
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
                    <td><a type="button" class="btn btn-danger" href="<?php echo base_url('page/hapuspesan/'.$d->idpengirim.'/'.$d->nopesan); ?>" onClick="return confirm('Apakah Anda Yakin?')">Hapus</a></td>
                </form>
            </tr>
            <?php } ?>
    </tbody>
</table>
</div>
</div>



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
