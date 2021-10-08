
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog Website</title>

    <meta name="description" content="N.Agency - Responisve Landing Page for Agency">
    <meta name="keywords" content="">
    <meta name="author" content="tabthemes">

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS Files For Plugin -->
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/font-awesome/font-awesome.min.css" rel="stylesheet">
    <link href="/css/magnific-popup.css" rel="stylesheet" />
    <link href="/css/YTPlayer.css" rel="stylesheet" />
    <link rel="stylesheet" href="/inc/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/inc/owlcarousel/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/inc/revolution/css/settings.css" />
    <link rel="stylesheet" href="/inc/revolution/css/layrs.css" />
    <link rel="stylesheet" href="/inc/revolution/css/navigation.css" />

    <!-- Custom CSS -->
    <link href="/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="blog_index" data-spy="scroll" data-target=".navbar-fixed-top" data-offset="100">


<!-- Preloader -->
<div id="preloader">
    <div id="spinner"></div>
</div>
<!-- End Preloader-->


<!-- Start Navigation -->
@include('admin.layout.Agencylayout.header');
<!-- End Navigation -->

<!-- Section Title Blog -->
<div class="section-title-bg text-center m-bottom-40">
    <h2 class="wow fadeInDown no-margin" data-wow-duration="1s" data-wow-delay="0.6s"><strong>Our Blog</strong></h2>
    <div class="divider-center-small wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s"></div>
    <p class="section-subtitle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">We write quality content regularly. check them out!</p>
</div>


<!--BLog single section-->
<section class="blog-index">

    <!--Container-->
    <div class="container clearfix">
        <div class="row">


        @yield('Content');



        </div> <!-- /.row -->
    </div> <!-- /.container -->

</section><!--End blog single section-->


<!-- Start Footer -->
@include('admin.layout.Agencylayout.footer');
<!-- End Footer -->


<!-- Back to top -->
<a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-up"></i></a>
<!-- /Back to top -->


<!-- jQuery -->
<script src="/js/jquery.min.js"></script>

<!-- Bootstrap -->
<script src="/bootstrap/js/bootstrap.min.js"></script>

<!-- Components Plugin -->
<script src="/js/jquery.easing.1.3.js"></script>
<script src="/js/smooth-scroll.js"></script>
<script src="/js/jquery.appear.js"></script>
<script src="/js/jquery.countTo.js"></script>
<script src="/js/jquery.stellar.min.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/imagesloaded.pkgd.min.js"></script>
<script src="/js/isotope.pkgd.min.js"></script>
<script src="/js/jquery.mb.YTPlayer.js"></script>
<script src="/js/retina.min.js"></script>
<script src="/js/wow.min.js"></script>
<script src="/inc/owlcarousel/js/owl.carousel.min.js"></script>

<!-- Custom Plugin -->
<script src="/js/custom.js"></script>

</body>
</html>
