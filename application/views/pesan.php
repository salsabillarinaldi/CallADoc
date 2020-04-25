<?php
if($this->session->flashdata('message')){ 
  echo '<div class="alert alert-success">'.$this->session->flashdata('message').'</div>'; 
}
?>
<h2 style="margin-top: 0;margin-bottom: 0;">Daftar Perjanjian</h2>
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
    <tbody  id="show_data">
    </tbody>
</table>

        <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Pesan</h4>
                    </div>
                    <form class="form-horizontal">
                    <div class="modal-body">
                                          
                            <input type="hidden" name="kode" id="textkode" value="">
                            <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus pesan ini?</p></div>
                                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
<script type="text/javascript">
  $(document).ready(function(){
    tampil_data_pesan(); 
    
    $('#table').dataTable();
     
    
    function tampil_data_pesan(){
        $.ajax({

            type  : 'GET',
            url   : '<?php echo base_url();?>page/datapesan/<?php echo $this->session->userdata('id')?>',
            async : true,
            dataType : 'json',
            success : function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<tr>'+
                          '<td>'+data[i].nopesan+'</td>'+
                            '<td>'+data[i].nama+'</td>'+
                                 '<td>'+data[i].subjek+'</td>'+
                                  '<td>'+data[i].pesan+'</td>'+
                                   '<td>'+data[i].tanggal+'</td>'+
                                    '<td>'+data[i].jam+'</td>'+
                            
                            '<td style="text-align:right;">'+
                                    
                            '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].nopesan+'">Hapus</a>'+
                                '</td>'+
                            '</tr>';
                }
                $('#show_data').html(html);
            }

        });
    }

    


    
    $('#show_data').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="kode"]').val(id);
        });

   
        
        $('#btn_hapus').on('click',function(){
            var kode=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('page/hapuspesan')?>",
            dataType : "JSON",
                    data : {kode: kode},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data_pesan();
                    }
                });
                return false;
            });

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
