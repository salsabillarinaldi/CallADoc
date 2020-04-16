<div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/img/icon.png') ?>" style="max-width:50px; margin-top:-12px" width="42px" height="42px" /></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url('page/home'); ?>">Home</a></li>
             <?php
            // Cek role user
            if($this->session->userdata('role') == 'admin'){ // Jika role-nya admin
                ?>
                <li><a href="<?php echo base_url('page/dokter'); ?>">Doctor</a></li>
                <?php
            }
            ?>

            <?php
            // Cek role user
            if($this->session->userdata('role') == 'admin'){ // Jika role-nya admin
                ?>
                <li><a href="<?php echo base_url('page/obat'); ?>">Medicine</a></li>
                <?php
            }
            ?>

            <li><a href="<?php echo base_url('page/kontak'); ?>">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
         <li class="dropdown pull-right">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Hello, <?php echo $this->session->userdata('nama') ?>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"><?php echo $this->session->userdata('role') ?></a></li>
          <li><a href="<?php echo base_url('auth/logout') ?>">Logout</a></li>
        </ul>
      </li>
    </ul>
    </div><!--/.nav-collapse -->
</div>
