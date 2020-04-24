<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Call A Doc</title>

    <!-- Load File CSS Bootstrap  -->
    <!--<link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!--ADMIN LTE-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
     <!-- Font Awesome -->
    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href=https://adminlte.io/themes/AdminLTE/dist/css/skins/_all-skins.min.css">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- FastClick -->
    <script src="https://adminlte.io/themes/AdminLTE/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="https://adminlte.io/themes/AdminLTE/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="https://adminlte.io/themes/AdminLTE/dist/js/demo.js"></script>
    <!-- iCheck -->
    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/plugins/iCheck/square/blue.css">
    <script src="https://adminlte.io/themes/AdminLTE/plugins/iCheck/icheck.min.js"></script>
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <script src="https://adminlte.io/themes/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

    <style>
    body {
        min-height: 2000px;
        padding-top: 70px;
    }
    .footer {
            padding: 50px 0 20px 0;
            background-color: #35404f;
            color: #878c94;
            position: absolute;
            left: 0;
            width: 100%;
        }
        
        .footer .title {
            text-align: left;
            color: #fff;
            font-size: 25   px;
        }
        
        .footer .social-icon {
            padding: 0px;
            margin: 0px;
        }
        
        .footer .social-icon a {
            display: inline-block;
            color: #fff;
            font-size: 25px;
            padding: 5px;
        }
        
        .footer .acount-icon a {
            display: block;
            color: #fff;
            font-size: 18px;
            padding: 5px;
            text-decoration: none;
        }
        
        .footer .acount-icon .fa {
            margin-right: 25px;
        }
        
        .footer .category a {
            text-decoration: none;
            color: #fff;
            display: inline-block;
            padding: 5px 20px;
            margin: 1px;
            border-radius: 4px;
            margin-top: 6px;
            background-color: #660000;
        }
        
        .footer .payment {
            margin: 0px;
            padding: 0px;
            list-style-type: none
        }
        
        .footer .payment li {
            list-style-type: none
        }
        
        .footer .payment li a {
            text-decoration: none;
            display: inline-block;
            color: #fff;
            float: left;
            font-size: 25px;
            padding: 10px 10px;
        }
    </style>
</head>

<body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-light" style="background-color:#E2FCFC">
        <?php
        /*
        * Variabel $headernya diambil dari core MY_Controller
        * (application/core/MY_Controller.php)
        * */
        echo $headernya;
        ?>
    </nav>

    <div class="container">
        <?php
        /*
        * Variabel $contentnya diambil dari core MY_Controller
        * (application/core/MY_Controller.php)
        * */
        echo $contentnya;
        ?>
    </div>
    <br />
    <br />
    <br />
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h4 class="title">Call A Doc</h4>
                    <p>Call A Doc is a Web-based Application that provides services to buy medicines and ask the Doctor.</p>
                    <span class="acount-icon"> 
                        <a href="<?php echo base_url('page/aboutus'); ?>">About us</a>
                        <a href="<?php echo base_url('page/kontak'); ?>">Contact us</a>
                    </span>

                    <ul class="social-icon">
                        <a href="#" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#" class="social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#" class="social"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        <a href="#" class="social"><i class="fa fa-google" aria-hidden="true"></i></a>
                        <a href="#" class="social"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h4 class="title">Lainnya</h4>
                    <span class="acount-icon">          
            <a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i>Terms and Conditions</a>
            <a href="#"><i class="fa fa-lock" aria-hidden="true"></i>Privacy</a>
            <a href="#"><i class="fa fa-stethoscope" aria-hidden="true"></i>Join the Doctor's team</a>
            <a href="#"><i class="fa fa-globe" aria-hidden="true"></i>Language</a>           
          </span>
                </div>
                <div class="col-sm-3">
                    <h4 class="title">Chategory</h4>
                    <div class="category">
                        <a href="<?php echo base_url('page/indexobat'); ?>">Medicine</a>
                        <a href="<?php echo base_url('page/indexdokter'); ?>">Doctor</a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <h4 class="title">Payment Methods</h4>
                    <ul class="payment">
                        <li><a href="#"><i class="fa fa-cc-amex" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-credit-card" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-paypal" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-visa" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <hr>

            <div class="row text-center"> Copyright © 2020, CallADoc. All Rights Reserved.</div>
        </div>

    </footer>
    <!-- Load file Javascript Bootstrap & jQuery -->
    <!--<script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>-->
</body>
</html>
