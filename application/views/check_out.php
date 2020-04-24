<h2>Check Out</h2>
<hr>
<?php
    if ($cart = $this->cart->contents())
        {
 ?>
   

    <form class="form-horizontal" action="<?php echo base_url()?>page/proses_order" method="post" name="frmCO" id="frmCO">
     <input type="hidden" name="email" value="<?php echo $this->session->userdata('nama') ?>@gmail.com" />
    <input type="hidden" name="nama" value="<?php echo $this->session->userdata('nama') ?>" />
    <input type="hidden" name="alamat" value="<?php echo $this->session->userdata('alamat') ?>" />
    <input type="hidden" name="telp" value="<?php echo $this->session->userdata('nohp') ?>" />
        <div class="modal-body">
            <!-- isi form ini -->
            <section class="invoice">
                <!-- title row -->
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="page-header">
            <i class="fa fa-hospital-o"></i> Call A Doc, Inc.
            <small class="pull-right">Date: <?php echo date('d / M / y');?></small>
          </h2>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- info row -->
                <div class="row invoice-info">
                    <div class="col-sm-4 invoice-col">
                        From
                        <address>
            <strong>Call A Doc, Inc.</strong><br>
            Jl.Telekomunikasi No.1 Bandung<br>
            Email: admin@CallADoc.com
          </address>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 invoice-col">
                        To
                        <address>
            <strong><?php echo $this->session->userdata('nama') ?></strong><br>
            <?php echo $this->session->userdata('alamat') ?><br>
            Phone: <?php echo $this->session->userdata('nohp') ?><br>
            Email: <?php echo $this->session->userdata('nama') ?>@gmail.com
          </address>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 invoice-col">
                        <b>Invoice #00<?php
                            echo(rand(10,100));
                            ?></b>
                        <br>
                        <br>
                        <b>Order ID:ODR<?php
                            echo(rand(10,100));
                            ?></b></b>
                        <br>
                        <b>Payment Due:</b>
                        <?php echo date('d / M / y');?>
                            <br>
                            <b>Account:</b>TCID
                            <?php echo $this->session->userdata('id') ?>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- Table row -->
                <div class="row">
                    <div class="col-xs-6s-12 table-responsive">
                        <table class="table table-striped">
                            <tr id="main_heading">
                                <td width="2%">No</td>
                                <td width="10%">Gambar</td>
                                <td width="33%">Item</td>
                                <td width="17%">Harga</td>
                                <td width="8%">Qty</td>
                                <td width="20%">Jumlah</td>
                            </tr>
                            <?php
// Create form and send all values in "web/update_cart" function.
$grand_total = 0;
$i = 1;

foreach ($cart as $item):
$grand_total = $grand_total + $item['subtotal'];
?>

                                <tr>
                                    <td>
                                        <?php echo $i++; ?>
                                    </td>
                                    <td><img class="img-responsive" src="<?php echo base_url() . 'assets/images/'.$item['gambar']; ?>" /></td>
                                    <td>
                                        <?php echo $item['name']; ?>
                                    </td>
                                    <td>
                                        <?php echo number_format($item['price'], 0,",","."); ?>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control input-sm" name="" value="<?php echo $item['qty'];?>" disabled />
                                    </td>
                                    <td>
                                        <?php echo number_format($item['subtotal'], 0,",",".") ?>
                                    </td>
                                    <?php endforeach; ?>
                                </tr>
                                <tr>
                                </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <!-- accepted payments column -->
                    <div class="col-xs-6">
                        <p class="lead">Payment Methods:</p>
                        <img src="https://adminlte.io/themes/AdminLTE/dist/img/credit/visa.png" alt="Visa">
                        <img src="https://adminlte.io/themes/AdminLTE/dist/img/credit/mastercard.png" alt="Mastercard">
                        <img src="https://adminlte.io/themes/AdminLTE/dist/img/credit/american-express.png" alt="American Express">
                        <img src="https://adminlte.io/themes/AdminLTE/dist/img/credit/paypal2.png" alt="Paypal">

                        <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                            Lakukan pembayaran dengan tepat waktu.
                        </p>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-6">
                        <p class="lead">Amount Due
                            <?php echo date('d / M / y');?>
                        </p>

                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th style="width:50%">Subtotal:</th>
                                    <td>Rp.
                                        <?php echo  $grand_total;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Ongkir:</th>
                                    <td>FREE</td>
                                </tr>
                                <tr>
                                    <th>Total:</th>
                                    <td>
                                        Rp.
                                        <?php echo $grand_total?>
                                    </td>
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
                        <button type="submit" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
                        </button>
                        <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
                            <i class="fa fa-download"></i> Generate PDF
                        </button>
                    </div>
                </div>
            </section>
        </div>
    </form>
    <?php
        }
    else
        {
            echo "<h3>Keranjang Belanja masih kosong</h3>"; 
        }   
?>

        <!--End Modal-->
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