<style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    /* Add a gray background color and some padding to the footer */
    
    footer {
        padding: 25px;
    }
    
    .carousel-inner img {
        width: 100%;
        /* Set width to 100% */
        min-height: 200px;
    }
    /* Hide the carousel text when the screen is less than 600 pixels wide */
    
    @media (max-width: 600px) {
        .carousel-caption {
            display: none;
        }
    }
    
    body {}
</style>
</head>

<body>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="<?php echo base_url('assets/img/la.jpg') ?>" alt="Image">
                <div class="carousel-caption">
                    <h3>CallADoc</h3>
                    <p>We always with you.</p>
                </div>
            </div>

            <div class="item">
                <img src="<?php echo base_url('assets/img/chicago.jpg') ?>" alt="Image">
                <div class="carousel-caption">
                    <h3>CallADoc</h3>
                    <p>You one and only.</p>
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

    <div class="container text-center">
        <h3 style="font-family: gillsans;">Not feeling well? Let us help you..</h3>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <img src="https://ak6.picdn.net/shutterstock/videos/27704356/thumb/1.jpg?ip=x480" class="img-responsive" style="width:100%" alt="Image">
                <p>Favourite Doctor</p>
            </div>
            <div class="col-sm-4">
                <img src="https://ak4.picdn.net/shutterstock/videos/3984064/thumb/1.jpg" class="img-responsive" style="width:480px;height:190px;" alt="Image">
                <p>Favourite Scene</p>
            </div>
            <div class="col-sm-4">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3 style="text-align: left; font-size: 30px;">Ask the Doctor</h3>
                        <p style="text-align: left;">Chat with the dokter.</p>
                    </div>
                    <div class="icon">
                        <i class="fa   fa-user-md"></i>
                    </div>
                    <a href="<?php echo base_url('page/indexdokter')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3 style="text-align: left;font-size: 30px;">Buy a Medicine</h3>
                        <p style="text-align: left;">Buy a medicine dan vitamins.</p>
                    </div>
                    <div class="icon">
                        <i class="fa  fa-medkit"></i>
                    </div>
                    <a href="<?php echo base_url('page/indexobat') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <br>

    <footer class="container-fluid ">
        <div class="callout callout-danger" style="margin-top: 10px ">
            <h4>Check COVID-19!</h4>
            <p>Check symptoms and get handling if necessary .</p>
        </div>
    </footer>