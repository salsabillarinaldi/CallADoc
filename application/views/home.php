<style>
  
    .carousel-inner img {
        width: 100%;
        min-height: 200px;
    }
    .carousel-caption {
    width:500px;
    z-index:100;
    color:#fff;
    text-align:center;
    top:50%;
    left:27%;
    bottom:auto;
    -webkit-transform:translate(0, -50%);
    -ms-transform:translate(0, -50%);
    transform:translate(0, -50%);   
    }
    
    @media (max-width: 600px) {
        .carousel-caption {
            display: none;
        }
    }
    
    html,
    body {
        height: 100%;
        margin: 0;
    }
</style>
</head>
    <div class="container">
        <div class="callout callout-danger" style="margin-top: 10px ">
        <h4>Check COVID-19!</h4>
        <p>Check symptoms and get handling if necessary .</p>
    </div>
    <h3 class="text-left">Not feeling well? Let us help you..</h3>
    <div class="row">
        <div class="col-lg-6">
            <div class="small-box bg-purple" style="">
                <div class="inner">
                    <h3 style="text-align: left; font-size: 40px;">ASK DOCTOR</h3>
                    <p style="text-align: left;">Chat with Doctor, Fast respon and Accurate<br>Chat Now!</p>
                </div>
                <div class="icon">
                    <i class="fa   fa-user-md"></i>
                </div>
                <a href="<?php echo base_url('page/indexdokter')?>" class="small-box-footer">see more! <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-6 ">
            <div class="small-box bg-green" style="">
                <div class="inner">
                    <h3 style="text-align: left;font-size: 40px;">BUY MEDICINE</h3>
                    <p style="text-align: left;">You can buy Medicine or Vitamins<br>Check Now!</p>
                </div>
                <div class="icon">
                    <i class="fa  fa-medkit"></i>
                </div>
                <a href="<?php echo base_url('page/indexobat') ?>" class="small-box-footer">see medicine! <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>


        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="<?php echo base_url('assets/img/dokter1.jpg') ?>" alt="Image">
                <div class="carousel-caption">
                    <h1 style="color: black;">Make Reservation</h1>
                   <!--  <p style="color: black;">Layanan Tanya Dokter Terbaik di Indonesia</p> -->
                </div>
            </div>

            <div class="item">
                <img src="<?php echo base_url('assets/img/dokter2.jpg') ?>" alt="Image">
                <div class="carousel-caption">
                    <h1 style="color: black;">Call A Doc</h1>
                    <p style="color: black;">Caring your heart</p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>   
    <br>
