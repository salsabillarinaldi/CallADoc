<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Call A Doc</title>

    <!-- Load File CSS Bootstrap  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!-- Load File CSS Bootstrap  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <!-- Load File Jquery  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Load File Datatables  -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/css/jquery.dataTables.css">
    <!-- Load File Datatables  -->
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/js/jquery.dataTables.js"></script>
    <!-- Load File JS Bootstrap-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <!--FontAwesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!--FontAwesome-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Style Penting -->
    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/dist/css/AdminLTE.min.css">
    <!-- Google Font Wajib -->
    <link rel="stylesheet " href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic ">
    <!-- AdminLTE App -->
    <script src="https://adminlte.io/themes/AdminLTE/dist/js/adminlte.min.js "></script>
    <!-- DatePicker -->
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <style>
        html,
        body {
            padding-top: 30px;
            background-color: white;
            height: 100%;
            margin: 0;
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
        
        .index-content a:hover {
            color: black;
            text-decoration: none;
        }
        
        .index-content {
            margin-bottom: 20px;
            padding: 50px 0px;
        }
        
        .index-content .row {
            margin-top: 20px;
        }
        
        .index-content a {
            color: black;
        }
        
        .index-content .card {
            background-color: #FFFFFF;
            padding: 0;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            box-shadow: 0 4px 5px 0 rgba(0, 0, 0, 0.14), 0 1px 10px 0 rgba(0, 0, 0, 0.12), 0 2px 4px -1px rgba(0, 0, 0, 0.3);
        }
        
        .index-content .card:hover {
            box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.3);
            color: black;
        }
        
        .index-content .card img {
            width: 100%;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
        }
        
        .index-content .card h4 {
            margin: 20px;
        }
        
        .index-content .card p {
            margin: 20px;
            opacity: 0.65;
        }
        
        .index-content .blue-button {
            width: 100px;
            -webkit-transition: background-color 1s, color 1s;
            /* For Safari 3.1 to 6.0 */
            transition: background-color 1s, color 1s;
            min-height: 20px;
            background-color: #002E5B;
            color: #ffffff;
            border-radius: 4px;
            text-align: center;
            font-weight: lighter;
            margin: 0px 20px 15px 20px;
            padding: 5px 0px;
            display: inline-block;
        }
        
        .index-content .blue-button:hover {
            background-color: #dadada;
            color: #002E5B;
        }
        
        @media (max-width: 768px) {
            .index-content .col-lg-4 {
                margin-top: 20px;
            }
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
</body>

</html>