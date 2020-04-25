<div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img style="max-width:50px; margin-top: -13px " src="<?php echo base_url('assets/img/icon.png'); ?>" width="45px" height="45px" ></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url('page/home'); ?>">Home</a></li>
            <li><a href="<?php echo base_url('page/indexdokter'); ?>">Ask Doctor</a></li>
            <li><a href="<?php echo base_url('page/kontak'); ?>">Contact Us</a></li>
            <li><a href="<?php echo base_url('page/aboutus'); ?>">About Us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url('page/tampil_cart'); ?>"><span class="glyphicon glyphicon-shopping-cart"></span> Trolley</a></li>
            <li><a href="<?php echo base_url();?>page/pesan/<?php echo $this->session->userdata('id')?>"><span class="glyphicon glyphicon-envelope"></span> List of Aggrement</a></li>
            <li class="dropdown pull-right">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Hallo, <?php echo $this->session->userdata('nama') ?>
        <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><b>Role: <?php echo $this->session->userdata('role') ?></b></a></li>
                    <?php
            if($this->session->userdata('role') == 'Dokter'){ 
                ?>
                        <li><a href="<?php echo base_url();?>page/reservasi/<?php echo $this->session->userdata('id')?>"><b>manage aggrement</b></a></li>
                        <?php
            }
            ?>
                            <?php
            if($this->session->userdata('role') == 'Admin'){ 
                ?>
                                <li><a href="<?php echo base_url('page/dokter'); ?>"><b>Kelola Dokter</b></a></li>
                                <?php
            }
            ?>

                                    <?php
            if($this->session->userdata('role') == 'Admin'){
                ?>
                                        <li><a href="<?php echo base_url('page/obat'); ?>"><b>Kelola Obat</b></a></li>
                                        <?php
            }
            ?>
                                            <li><a href="<?php echo base_url('auth/logout') ?>">Keluar</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>