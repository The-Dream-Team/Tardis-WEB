<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "includes/config.php" ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.png">

    <title><?php echo $masterTitle ?> - Home</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/extras.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=""><img src="img/textlogo2.png" width="99"/></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#howtoplay">How to Play</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">High Scores <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#scorestop10">Top 10 </a></li>
                        <li><a href="#scorestop20">Top 20 </a></li>
                        <li><a href="#scorestop100">Top 100</a></li>
                    </ul>
                </li>
                <li><a href="http://37.187.75.63:8080">Jenkins</a></li>
                <li><a href="#faq">FAQ</span></a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>


<!-- Carousel
================================================== -->
<div id="Carousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#Carousel" data-slide-to="0" class="active"></li>
        <li data-target="#Carousel" data-slide-to="1"></li>
        <li data-target="#Carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <img src="img/slide1.png" alt="Slide 1">

            <div class="container">
                <div class="carousel-caption">
                    <img src="img/textlogo.png" alt="textlogo">
                </div>
            </div>
        </div>
        <div class="item">
            <img src="img/slide1.png" alt="Slide 2">

            <div class="container">
                <div class="carousel-caption" style="margin-bottom: 50px;">
                    <img src="img/textdownload.png" alt="Download Game text">

                    <p></p>

                    <p><a class="btn btn-lg btn-success" href="#downloadbutton" role="button"><span
                                class="glyphicon glyphicon-download-alt"></span></a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="img/slide1.png" alt="Slide 3">

            <div class="container">
                <div class="carousel-caption">
                    <h1></h1>

                    <p></p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#Carousel" data-slide="prev"><span
            class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#Carousel" data-slide="next"><span
            class="glyphicon glyphicon-chevron-right"></span></a>
</div>
<!-- /.carousel -->

<!-- Jumbotron -->
<div class="jumbotron">
    <div class="container">
        <h1>Under Construction</h1>
        <p>This site is currently under construction and is not representative of the final product.</p>
    </div>
</div>

<!-- /.Jumbotron -->

<div class="container">

    <div class="row">
        <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
    </div>

    <hr>

</div>
<!-- /.container -->

<div id="footer">
    <div class="container">
        <p class="text-muted">&copy; 2014 The Dream Team. All rights reserved.</p>
    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/holder.js"></script>
</body>
</html>
