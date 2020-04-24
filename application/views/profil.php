<div class="container">
    <h3 class=""><span class="glyphicon glyphicon-user"></span>Edit Profile</h3>
      <hr>
	<div class="row">
      <div class="col-md-3">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6><?php echo $this->session->userdata('role')?></h6>
          
        </div>
      </div>
      
      
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <p>Silahkan Edit Profil Anda</p>
          <?php
if($this->session->flashdata('message')){ 
  echo '<hr>'.$this->session->flashdata('message');
}
?>
        </div>
        <h3>Info Pribadi</h3>
        
        <form class="form-horizontal" method="post" action="<?php echo base_url();?>page/editprofil" accept-charset="utf-8">
           <input type="hidden" value="<?php echo $this->session->userdata('id')?>" name="id">
          <div class="form-group">
            <label class="col-lg-3 control-label">Nama:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $this->session->userdata('nama')?>" name="nama">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Alamat:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $this->session->userdata('alamat')?>" name="alamat">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">No Hp:</label>
            <div class="col-lg-8">
              <input class="form-control" type="number" value="<?php echo $this->session->userdata('nohp')?>" name="nohp">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Password:</label>
            <div class="col-lg-8">
              <input class="form-control" type="password" name="password" value="<?php echo $this->session->userdata('password')?>">
            </div>
          </div>
          <button style="position: relative;left: 730px;" type="submit">Done</button>
        </form>
      </div>
  </div>
</div>
<hr>