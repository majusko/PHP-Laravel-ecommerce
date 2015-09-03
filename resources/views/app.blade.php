    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fabriano Slovensko</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{URL::asset('font-awesome/css/font-awesome.min.css')}}" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/animate.min.css')}}" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/creative.css')}}" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Otvor navigáciu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">Fabriano</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href="#">O Nás</a>
                </li>
                <li>
                    <a class="page-scroll" href="#">Produkty</a>
                </li>
                <li>
                    <a class="page-scroll" href="#">Kontakt</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

@yield('content');

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">Naše kotakty</h2>
                <hr class="primary">
                <p>Nenašiel si čo potrebuješ? Neváhaj nás kontaktovať</p>
            </div>
            <div class="col-lg-4 col-lg-offset-2 text-center">
                <i class="fa fa-phone fa-3x wow bounceIn"></i>
                <p>123-456-6789</p>
            </div>
            <div class="col-lg-4 text-center">
                <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                <p><a href="mailto:your-email@your-domain.com">davidkapusta@dkramovanie.sk</a></p>
            </div>
        </div>
    </div>
</section>

<!-- jQuery -->
<script src="{{URL::asset('js/jquery.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>

<!-- Plugin JavaScript -->
<script src="{{URL::asset('js/jquery.easing.min.js')}}"></script>
<script src="{{URL::asset('js/jquery.fittext.js')}}"></script>
<script src="{{URL::asset('js/wow.min.js')}}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{URL::asset('js/creative.js')}}"></script>

</body>

</html>