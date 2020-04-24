<!DOCTYPE html>
<html lang="en">

<head>
    <title>Call A Doc Homepage</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600&amp;subset=latin-ext" rel="stylesheet">

    <!-- CSS -->
    <link href=" <?php echo site_url('assets/splash/main.css') ?>" rel="stylesheet">

    <!-- JS -->

    <script src="<?php echo site_url('assets/splash/jquery-1.12.0.min.js') ?>"></script>
    <style type="text/css">
        body {
            font-family: calibri;
        }
    </style>
</head>

<body>
    <div class="site" id="page">

        <!-- Options headline effects: .rotate | .slide | .zoom | .push | .clip -->
        <section class="hero-section hero-section--image clearfix clip">
            <div class="hero-section__wrap">
                <div class="hero-section__option">
                    <img src="<?php echo site_url('assets/img/homepage.jpg') ?>" alt="Hero section image">
                </div>

                <!-- .hero-section__option -->

                <div class="container">
                    <div class="row">
                        <div class="offset-lg-2 col-lg-8">
                            <div class="title-01 title-01--11 text-center">
                                <h2 class="title__heading">
                                        <span>Not </span>
                                        <strong class="hero-section__words">
                                            <span class="title__effect is-visible">Well?</span>
                                            <span class="title__effect">Healthy?</span>
                                            <span class="title__effect">Fit?</span>
                                        </strong>
                                    </h2>
                                <div class="title__description">Caring your health with Call A Doc! <br /> The solution for your healthy care. </div>

                                <!-- Options btn color: .btn-success | .btn-info | .btn-warning | .btn-danger | .btn-primary -->
                                <div class="title__action"><a href="<?php echo site_url('auth/loginindex') ?>" class="btn btn-success">Login or Register</a></div>
                            </div>
                            <!-- .title-01 -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="<?php echo site_url('assets/splash/animate-headline.js') ?>"></script>

</body>

</html>