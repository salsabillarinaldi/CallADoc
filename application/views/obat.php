        <div class="pull-right">
   <a href="<?php echo base_url('page/home/'); ?>"><button type="button" class="btn btn-primary">Back</button></a>
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
            <th></th>
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
              <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $d->id_obat ?>"><i class="fas fa-shopping-cart"></i></button></td>
              <!--BUTTON HAPUS --- ISI LENGKAPI BUTTON INI -->
            </form>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

<!-- Modal Edit Dokter -->
        <!-- /.col -->
        <div class="col-xs-6">
          <p class="lead">Amount Due 2/22/2014</p>

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Subtotal:</th>
                <td>$250.30</td>
              </tr>
              <tr>
                <th>Tax (9.3%)</th>
                <td>$10.34</td>
              </tr>
              <tr>
                <th>Shipping:</th>
                <td>$5.80</td>
              </tr>
              <tr>
                <th>Total:</th>
                <td>$265.24</td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
          <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
          </button>
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button>
        </div>
      </div>
    </section>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        </div>
        </form>
      </div>
    </div>
  </div>
<?php } ?>


</body>
  <script type="text/javascript">
    $(document).ready( function () {
        $('#table').DataTable();
    } );
  </script>
</html>
