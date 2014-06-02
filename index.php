<!DOCTYPE html>
<html lang="en" ng-app="injection">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Play Forrest Crusader, a new game coming to iOS">
        <meta name="author" content="Andrew Paterson">
        <title>Home | Forrest Crusader</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
        <script type="text/javascript" src="Javascript/angular.js"></script>
        <script type="text/javascript" src="Javascript/injection.js"></script>
    </head>
    <!--/head-->
    <body>
        <noscript>
            <h1>You need javascript enabled to use this page</h1>
        </noscript>
        <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo" height="29" width="180"></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="making.php">The Making</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="privacy.php">Privacy Policy</a></li>
                        <li><a href="contact-us.php">Contact</a></li>
                        <li><a href="credits.php">Credits</a></li>
                    </ul>
                </div>
            </div>
        </header>
        <!--/header-->
        <section id="main-slider" class="no-margin">
            <div class="carousel slide wet-asphalt">
                <ol class="carousel-indicators">
                    <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#main-slider" data-slide-to="1"></li>
                    <li data-target="#main-slider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="carousel-content centered">
                                        <h2 class="boxed animation animated-item-1">A Game Filled With Fun and Adventure</h2>
                                        <p class="boxed animation animated-item-2">Travel the land of Arbor, questing to take your place fighting Decay.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.item-->
                    <div class="item" style="background-image: url(images/slider/bg2.jpg)">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="carousel-content center centered">
                                        <h2 class="boxed animation animated-item-1">A Challenge For All Players</h2>
                                        <p class="boxed animation animated-item-2">See how long it takes you to finish the game.</p>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.item-->
                    <div class="item" style="background-image: url(images/slider/bg3.jpg)">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="carousel-content centered">
                                        <h2 class="boxed animation animated-item-1">A Free Game Made to Show What's Possible</h2>
                                        <p class="boxed animation animated-item-2">Use the guided tutorial to build your own version.</p>
                                        <a class="boxed btn btn-md animation animated-item-3" href="making.php">Learn More</a>
                                    </div>
                                </div>
                                <div class="col-sm-6 hidden-xs animation animated-item-4">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.item-->
                </div>
                <!--/.carousel-inner-->
            </div>
            <!--/.carousel-->
            <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
            </a>
            <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
            </a>
        </section>
        <!--/#main-slider-->
        <section id="services" class="emerald">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-6">
                        <div class="media" align="center">
                            <div align="center">
                                <i class="icon-apple icon-md"></i>
                            </div>
                            <div class="media-body" align="center">
                                <h3 class="media-heading"><a href="https://itunes.apple.com/us/artist/karl-paterson/id691385321">Find Us On The App Store</a></h3>
                                <p>We currently have two apps, Space Platypus and Fish Dash</p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->
                </div>
            </div>
        </section>
        <!--/#services-->
        <section id="character-descriptions" class="sun-flower">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 center">
                        <h2>Description of Main Characters</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div style="color: black">
                            <h4 class="center" style="color: black">Forrest</h4>
                            <p style="text-indent: 25px;">Our intrepid adventurer from Succulent Spring, Forrest is a shy, timid person. Chosen by his pears to be the meekest around him, he sets off on his quest to Pith to challenge the other contenders.  Whether he will succeed in claiming his crown and taking on Decay is up to you!</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div style="color: black">
                            <h4 class="center" style="color: black">Rose</h4>
                            <p style="text-indent: 25px;">The champion</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div style="color: black">
                            <h4 class="center" style="color: black">Decay</h4>
                            <p style="text-indent: 25px;"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/#recent-works-->
        <section id="Development-Video" class="belize-hole">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="center">Sneak Preview</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-1">
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-10">
                        <video src="sneakPeak.mp4" width="100%"controls></video>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-1">
                    </div>
                </div>
            </div>
        </section>
        <section id="testimonial" class="alizarin">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="center">
                            <h2>Funny Dialog Quotes</h2>
                        </div>
                        <div class="gap"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <blockquote>
                                    <p>Run, Forrest, Run! They're Right Behind You!</p>
                                    <small><cite title="Source Title">Rose</cite></small>
                                </blockquote>
                                <blockquote>
                                    <p>Oh No, The Forest! Forrest, Get To The Chopper!</p>
                                    <small><cite title="Source Title">Blade</cite></small>
                                </blockquote>
                            </div>
                            <div class="col-md-6">
                                <blockquote>
                                    <p>Gotta Love Me, I'm a Fungi!</p>
                                    <small><cite title="Source Title">Rot Squad Captain Shroom</cite></small>
                                </blockquote>
                                <blockquote>
                                    <p>I Love the Smell of Lava in the Morning!</p>
                                    <small><cite title="Source Title">Spike</cite></small>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/#testimonial-->
        <section id="bottom" class="wet-asphalt">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <h4>About Us</h4>
                        <p>We like to make fun, interesting games, whether they require 2 weeks of work or 2 years, we want to give people a great experience.</p>
                        <p>Learn more about us <a href="about-us.php">here</a></p>
                    </div>
                    <!--/.col-md-3-->
                    <div class="col-md-4 col-sm-6">
                        <h4>Company</h4>
                        <div>
                            <ul class="arrow">
                                <li><a href="faq.php">Faq</a></li>
                                <li><a href="contact-us.php">Contact Us</a></li>
                                <li><a href="privacy.php">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--/.col-md-3-->
                    <div class="col-md-4 col-sm-6">
                        <h4>Newsletter</h4>
                        <form name="newsletter" role="form" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                            <div class="input-group">
                                <input name="email" id="email" type="email" class="form-control" autocomplete="off" placeholder="Enter your email">
                                <span class="input-group-btn">
                                <input class="btn btn-danger" type="submit" name="submit" value="Go!"></input>
                                </span>
                            </div>
                        </form>
                    </div>
                    <!--/.col-md-3-->
                </div>
            </div>
        </section>
        <!--/#bottom-->
        <footer id="footer" class="midnight-blue">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        &copy; 2014 Andrew Paterson
                    </div>
                    <div class="col-sm-6">
                        <ul class="pull-right">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about-us.php">About Us</a></li>
                            <li><a href="faq.php">Faq</a></li>
                            <li><a href="contact-us.php">Contact Us</a></li>
                            <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--/#footer-->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
<?php
    if (isset($_POST['submit'])){
        //header('Content-type: application/json');
        $status = array(
            'type'=>'success',
            'message'=>'Email sent!'
        );
        $email = @trim(stripslashes($_POST['email']));
        $email_from = $email;
        $email_to = 'Andrewp97@me.com';
        $body = 'Email: ' . $email . " Would Like to sign up for the newsletter";
        $success = @mail($email_to, "Newsletter Sign Up", $body, 'From: <'.$email_from.'>');
        die;
    }
    ?>