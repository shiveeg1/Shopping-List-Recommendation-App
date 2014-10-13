<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stylish Portfolio - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">


</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top">Grep_Shop</a>
            </li>
            <li>
                <a href="#top">Home</a>
            </li>
            <li>
                <a href="#about">About</a>
            </li>
            <li>
                <a href="#contact">Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1 style="color:#333678">Shopper's Stop</h1>
            <br>
            <a href="#about" class="btn btn-dark btn-lg">Shop here</a>
        </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Choose your list here!</h2>
                </div>
            </div>
            <!-- /.row -->
        <div class="col-lg-12" style="margin-left:150px;">
                        <!--p class="pull-left">Stationary</p-->
                        <?php   

	             
	                  $m = new MongoClient();
                      $db = $m->database1;
                      $collection=$db->signup1;
	                  $B=array();
	                  $P=array();
	                  $usern=array();
	                  $category=$_GET['linkname'];
	                  
	                  global $i;
	                 //if(isset($_POST['submit']))
	                  //{
	                     $cursor=$collection->find(array("category"=>$category));
	                    echo "<form action='' method='post'>";
	                    $a=array();
	                     foreach($cursor as $current)
		                 {
                             
                             if(is_array($current))
			                 {      
				                foreach($current as $current2)
			                    {   
					                if(is_array($current2))
				                    {    
						                foreach($current2 as $current3)
					                    {   
					                  		 if(is_array($current3))
							                 {   
					
									                //echo "</br>";
									                //echo "<input type='checkbox' name='Item[]' value='".$current3['item']."'>".$current3['item']; 
									                array_push($a,$current3['item']);
							                  }
									
						                 }
						
					                    }
				                    }
			                    }
			                 }
		                 //}
		                 $a=array_unique($a);
		                 echo "<br/>";
		                 
		                 for($i=0;$i<=count($a);$i++){
		                    
		                    if($a[$i]!=""){
		                        echo '<div class="col-md-4">';
                                echo '<div class="checkbox">';
                                        echo "<input type='checkbox' name='Item[]' value='".$a[$i]."'><h4><strong>".$a[$i]."</strong></h4>"; 
                                echo    '</div>';
                                echo '</div>';
                                }
		                 }
	
	
		                     
           echo'</div>';  
           echo "<br/>";
		   echo '<center><button name="submit1" type="button btn-lg" class="btn btn-info">Submit</button></center>';
		   echo "</form>";
		?>                              
          </div>
        <!-- /.container --> 
      </div>           
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Shop Recommendations</h2>
                    
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    
    <!-- Portfolio -->
    <?php
    if(isset($_POST['submit1']))
		  {
			$cursor=$collection->find();
			$lat2=$_GET['lat'];
    	    $longt2=$_GET['longt'];
		     foreach($cursor as $current)
		    {    
			     $lat1=$current['latitude'];
                 $longt1=$current['longitude'];
                 $theta = $longt1 - $longt2;
                 $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
	             $dist = acos($dist);
	             $dist = rad2deg($dist);
	             $miles = $dist * 60 * 1.1515;
	             $distance=$miles * 1.609344*1000;  
	  	 if(is_array($current))
			 {      	$cnt=0;				  
				foreach($current as $current2)
			    {   
					if(is_array($current2))
				    {   

						foreach($current2 as $current3)
					    {   
					  		 if(is_array($current3))
							 {     
							      
									foreach($_POST['Item'] as $value1)
										{  
												if($current3['item']==$value1)
												{    
												   if($cnt==0)
												   {  
												     echo '<div class="col-lg-6 text-center" id="showtable">';
                                                     echo'<h2 col-sm-3>'.$current["username"].'</h2>';
                                                     echo'<h2 col-sm-3>Distance: '.round($distance).' m</h2>';
												      echo '<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">';
                                                        echo'<thead>';
                                                            echo'<tr>';
                                                                echo'<th>SNo.</th>';
                                                                echo'<th>Brand</th>';
                                                                echo'<th>Price</th>';
                                                            echo'</tr>';
                                                        echo'</thead>';
												   }
												    $cnt=$cnt+1;
												   echo "<tr>"."<td style='font-size:125%'>".$current3["item"]."</td>"."<td style='font-size:125%'>".$current3["brand"]."</td>"."<td style='font-size:125%'>".$current3["price"]."</td>"."</tr>";

												}
			                             } 
                             } 
							 
							
                        }
                    } 
               } 
			   } 
			  
			   	echo "</table>";
                echo"</div>";			   	
           			   
			}
		
	    }
		?>

    
    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>

</html>
