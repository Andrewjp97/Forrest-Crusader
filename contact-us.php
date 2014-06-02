<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Contact Us | Forrest Crusader</title>
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
</head><!--/head-->
<body>
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img height="29" width="200" src="images/logo.png" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="making.php">The Making</a></li>
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                    
                       
                            
                            <li><a href="privacy.php">Privacy Policy</a></li>
                            
                        
                    
                    <li class="active"><a href="contact-us.php">Contact</a></li>
                                        <li><a href="credits.php">Credits</a></li>

                </ul>
            </div>
        </div>
    </header><!--/header-->

    <section id="title" class="nephritis">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Contact Us</h1>
                    <p style="text-indent: 25px;">We would be happy to help you</p>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->    

    <section id="contact-page" class="container">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <h4>Contact Form</h4>
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input id="fname" name="fname" type="text" class="form-control" required="required" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <input name="lname" type="text" class="form-control" required="required" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" required="required" placeholder="Email address">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-lg"></input>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
                        </div>
                    </div>
                </form>
            </div><!--/.col-sm-8-->
        </div>
    </section><!--/#contact-page-->

    <section id="bottom" class="wet-asphalt">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <h4>About Us</h4>
                    <p>We like to make fun, interesting games, whether they require 2 weeks of work or 2 years, we want to give people a great experience.</p>
                    <p>Learn more about us <a href="about-us.php">here</a></p>
                </div><!--/.col-md-3-->

                <div class="col-md-4 col-sm-6">
                    <h4>Company</h4>
                    <div>
                        <ul class="arrow">
                            
                            <li><a href="faq.php">Faq</a></li>
                            <li><a href="contact-us.php">Conatct Us</a></li>
                            <li><a href="privacy.php">Privacy Policy</a></li>
                           
                        </ul>
                    </div>                    
                </div><!--/.col-md-3-->

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
                </div> <!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

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
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>