<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	

    <title>Landing Page - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<!--?
include ('F:/dbproject/eveningbackup/landing-page/php/login2.php');
?-->
</head>

<body "Background2">

<script type="text/javascript">
function setNumber(){
	return true;
}
</script>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://localhost/loginwithembedd.php">Welcome!!!</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="aboutus.html">About</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
					
					<li>
					<!--a href="http://localhost/login2.php" onclick="window.open(this.href,'_self');window.open('#','_blank');">
					Click Here
					</a-->
						 <!--a href="http://localhost/login2.php" target="test login">Log in</a--> 
						 <?php $flag=0;?>
					    <a href="http://localhost/loginwithembedd.php" onclick="<?php $flag=1; ?>">Log in</a>
						<!--a HREF="http://localhost/login2.php" onClick="return targetopener(this,true,true)">log in</a-->
					</li>
					<li>
					
					    <a onclick="getLocation();">Sign up</a>
					</li>
					<script>
                        //var x = document.getElementById("demo");
                        function getLocation() {
                            if (navigator.geolocation) {
                                navigator.geolocation.getCurrentPosition(showPosition);
                            } else {
                                x.innerHTML = "Geolocation is not supported by this browser.";
                            }
                        }
                        function showPosition(position) {
                            //x.innerHTML = "Latitude: " + position.coords.latitude +
                            //"<br>Longitude: " + position.coords.longitude;
                            var lat=0;
                            var longt=0;
                            lat= position.coords.latitude;
                            longt=position.coords.longitude;
                            if (lat !=0 && longt !=0) {
                                window.location.href = "http://localhost/finalsignup1.php?lat=" + lat + "&longt=" + longt;
                            } else 
                                exit();

                        }
                    </script>      
					<!--li>
					    <a href="localhost\login2.php">Sign in</a>
						
					</li-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header -->
    <div class="intro-header">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Grep_Shop</h1>
                        <hr class="intro-divider">
                        <!--ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                            </li>
                            <li>
                                <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                            </li>
                        </ul-->
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container 
		
                           <!--img class="img-responsive" src="SHOPPING LIST.pptx" alt=""-->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->
    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <?php
                    if ($flag==1)
					{
					    echo "<a href='http://localhost/itemwithembedd.php'><h2>Insert records::</h2></a>";
					}
					else
					{
					    echo "<label><h2>Insert Records::</h2></label>";
					}
					?>
                    <!--h2 class="section-heading">Insert records::</h2-->
                    <!--p class="lead">A special thanks to <a target="_blank" href="http://join.deathtothestockphoto.com/">Death to the Stock Photo</a> for providing the photographs that you see in this template. Visit their website to become a member.</p-->
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/insert3.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
					<a href='http://localhost/finalupdate.php'><h2>Update records::</h2></a>
					
					<!--a href="http://localhost/finalupdate.php"><h2>Update records::<h2></a-->
                    <!--h2 class="section-heading">Update records::</h2-->
                    <!--p class="lead">Turn your 2D designs into high quality, 3D product shots in seconds using free Photoshop actions by <a target="_blank" href="http://www.psdcovers.com/">PSDCovers</a>! Visit their website to download some of their awesome, free photoshop actions!</p-->
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="img/update.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
					<a href='http://localhost/deletewithembedd.php'><h2>Delete records::</h2></a>
					<!--a href="http://localhost/deletewithembedd.php"><h2>Delete records::</h2></a-->
                    <!--h2 class="section-heading">Delete records::</h2-->
                    <!--p class="lead">This template features the 'Lato' font, part of the <a target="_blank" href="http://www.google.com/fonts">Google Web Font library</a>, as well as <a target="_blank" href="http://fontawesome.io">icons from Font Awesome</a>.</p-->
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/delete1.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Grep_Shop</h2>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->

    

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
