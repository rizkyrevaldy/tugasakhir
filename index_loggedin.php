<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>kuliahGan</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/global.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="color/default.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <!-- Preloader -->
    <div id="preloader">
        <div id="load"></div>
    </div>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php">
                    <h1>kuliahGan</h1>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#intro">Home</a></li>
                    <li><a href="home.php">Forums</a></li>
                    <li><a href="about_us.php">About Us</a></li>
                    <li><a href="#">New Thread</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hi, User!<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="profile_page.php">Profile</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Section: intro -->
    <section id="intro" class="intro">

        <div class="slogan">
            <h2>Hai Gan! <span class="text_color"></span> </h2>
            <h4>Mau nanya apa hari ini?</h4>
        </div>
        <div class="container">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search topics or keyword...">
                <span class="input-group-btn">
                    <button class="btn btn-search" type="button"><i class="fa fa-search fa-fw"></i> Search</button>
                </span>
            </div>
        </div>
        <div class="page-scroll">
            <h1></h1>
            <h2></h2>
            <a href="#latest" class="btn btn-circle">
                <i class="fa fa-angle-double-down animated"></i>
            </a>
        </div>
    </section>
    <!-- /Section: intro -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" />
    <section id="latest" class="latest">
        <div class="latest-threads">
            <h3>Latest Threads</h3>
        </div>
        <div class="thread-container">
            <div class="well">
                <div class="media">
                    <div class="media-body">
                        <h4 class="media-heading"><a class="links" href="thread.php">PHP 101</a></h4>
                        <h6 class="user-thread">By Adit</h6>
                        <p class="text-justify">PHP itu apa sih?</p>

                        <ul class="list-inline list-unstyled">
                            <li><span><i class="glyphicon glyphicon-user"></i> @adit </span></li>
                            <li>|</li>
                            <li><span><i class="glyphicon glyphicon-time"></i> Created 2 days, 8 hours </span></li>
                            <li>|</li>
                            <li><span><i class="glyphicon glyphicon-time"></i> Last edited 2 days, 8 hours </span></li>
                            <li>|</li>
                            <span><i class="glyphicon glyphicon-comment"></i> 3 replies</span>
                            <li>|</li>
                            <li>
                                <!-- Use Font Awesome http://fortawesome.github.io/Font-Awesome/ -->
                                <span><i class="fa fa-facebook-square"></i></span>
                                <span><i class="fa fa-twitter-square"></i></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="well">
                <div class="media">
                    <div class="media-body">
                        <h4 class="media-heading"><a class="links" href="thread.php">Java</a></h4>
                        <h6 class="user-thread">By Aldy</h6>
                        <p class="text-justify">Java itu apa sih?</p>

                        <ul class="list-inline list-unstyled">
                            <li><span><i class="glyphicon glyphicon-user"></i> @aldy </span></li>
                            <li>|</li>
                            <li><span><i class="glyphicon glyphicon-time"></i> Created 2 days, 8 hours </span></li>
                            <li>|</li>
                            <li><span><i class="glyphicon glyphicon-time"></i> Last edited 2 days, 8 hours </span></li>
                            <li>|</li>
                            <span><i class="glyphicon glyphicon-comment"></i> 2 replies</span>
                            <li>|</li>
                            <li>
                                <!-- Use Font Awesome http://fortawesome.github.io/Font-Awesome/ -->
                                <span><i class="fa fa-facebook-square"></i></span>
                                <span><i class="fa fa-twitter-square"></i></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Section: contact -->

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="wow shake" data-wow-delay="0.4s">
                            <div class="page-scroll marginbot-30">
                                <a href="#intro" id="totop" class="btn btn-circle">
                                    <i class="fa fa-angle-double-up animated"></i>
                                </a>
                            </div>
                        </div>
                        <div class="credits">
                            <p><span class="glyphicon glyphicon-copyright-mark"></span>kuliahGan Team</p>
                            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>

    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.scrollTo.js"></script>
    <script src="js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>

</body>

</html>