<div class="list-group">
           <a href="<?php echo base_url()?>page/tampil_cart" class="list-group-item"><strong><i class="glyphicon glyphicon-shopping-cart"></i> KERANJANG BELANJA</strong></a>
          <?php 
      
        $cart= $this->cart->contents();

// If cart is empty, this will show below message.
      if(empty($cart)) {
        ?>
                <a class="list-group-item">Keranjang Belanja Kosong</a>
                <?php
      }
      else
        {
          $grand_total = 0;
          foreach ($cart as $item)
            {
              $grand_total+=$item['subtotal'];
        ?>
                <a class="list-group-item"><?php echo $item['name']; ?> (<?php echo $item['qty']; ?> x <?php echo number_format($item['price'],0,",","."); ?>)=<?php echo number_format($item['subtotal'],0,",","."); ?></a>
                <?php 
            }
        ?>

                <?php   
        }
 ?>
      </div>
<div class="pull-right">
        <a href="<?php echo base_url('page/home/'); ?>">
            <button type="button" class="btn btn-primary">Back</button>
        </a>
    </div>
       
<h2>Daftar Obat</h2>
<hr>
<table class="table table-bordered" id="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Gambar Obat</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
<?php $no=1;
    foreach ($data as $row) {
?>
     <tr>
                
                <form method="post" action="<?php echo base_url();?>page/tambah" method="post" accept-charset="utf-8">
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
                  <input type="hidden" name="id" value="<?php echo $row['id_produk']; ?>" />
                  <input type="hidden" name="nama" value="<?php echo $row['nama_produk']; ?>" />
                  <input type="hidden" name="harga" value="<?php echo $row['harga']; ?>" />
                  <input type="hidden" name="gambar" value="<?php echo $row['gambar']; ?>" />
                  <input type="hidden" name="qty" value="1" />
                  <button type="submit" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-shopping-cart"></i> Beli</button>
              </td>
                </div>
                </form>
            </tr>
            <?php
    }
?>
        </tbody>
    </table>
              </div>
            </div>
              <script type="text/javascript">
            $(document).ready(function() {
                $('#table').DataTable();
            });
        </script>
        <br>
