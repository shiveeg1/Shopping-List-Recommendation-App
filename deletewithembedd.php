<html>
<head>
 
<style>	
body {
  background-image:url("gray5.jpg"); 
-webkit-background-size: cover;
-moz-background-size: cover;
background-size: cover;
}
#category{
 width:200px;   
}
</style>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	

   

    <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">


</head>
<body>
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
                <!--a class="navbar-brand" href="http://localhost/loginwithembedd.php">Welcome!!!</a-->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   
					<!--a href="http://localhost/login2.php" onclick="window.open(this.href,'_self');window.open('#','_blank');">
					Click Here
					</a-->
					<li>
						 <!--a href="http://localhost/login2.php" target="test login">Log in</a--> 
					    <a href="#">Log out</a>
						<!--a HREF="http://localhost/login2.php" onClick="return targetopener(this,true,true)">log in</a-->
					</li>
					<li>
					
					    <a href="shopkeeperhp.php">Home</a>
					</li>
					<li>
					
					    <a href="arraydemo2.php">View</a>
					</li>
					<!--li>
					    <a href="localhost\login2.php">Sign in</a>
						
					</li-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

  <link href="csslogin.css" rel="stylesheet">

  <a href="arraydemo2.php"><button align="right">View entries</button></a>
  
<form class="form-4" action="" method="post" >
   
	
<!--/form-->

	 <!--form action="" method="post"-->

  <fieldset>
    <h1>Delete an item....</h1>
				    <p>
				        
				        <input type="text" name="itemname" placeholder="Item Name.." required>
				    </p>
				    <p>
				        
				        <input type="text" name="brand" placeholder="Brand..." required> 
				    </p>
					<p>
						
					    <input type="text" name="price"  placeholder="Price...." required>
					</p>
					<p>
				        <input type="submit" name="reset" value="Next">
				    </p>  
					  </fieldset>
  <!--button class="btn" type="submit" name="submit1">Finish</button-->
  </form>


  <?php
     // include ('signup.php');
	 session_start();
      $m = new MongoClient();
	  $db = $m->database1;
	  $collection = $db->createCollection("signup1");
	   $result=0;
	   $b=0;
	   $p=0;
	   $i=0;
	  
	    $qry=array("username"=>$_SESSION['user'],"password"=>$_SESSION['pass']);
	  $result=$collection->findOne($qry);
	  //print_r($result);
	  
	  
	 /* foreach($result as $result1)
	  {
	      foreach($result1 as $result2)
		  { 
		    print_r($result2['item']);
		  }
	  }		*/
	   
	  if(isset($_POST['reset']))
	{	   
	   $i=$_POST['itemname'];
		  $b=$_POST['brand'];
		  $p=$_POST['price'];
	  $q2=$collection->find(array("username"=>$_SESSION['user'],"Item.item"=>$i,"Item.brand"=>$b,"Item.price"=>$p))->count();
	   if($q2)
	   {
	     
			   $collection->update(array("username"=>$_SESSION['user']),array('$pull'=>array("Item"=>array('item'=>$i,'brand'=>$b,'price'=>$p))));
	
	           echo "<script type='text/javascript'>alert('Entry deleted successfully!')</script>";
			   echo "<a href=\"arraydemo2.php\">";
	           echo "view detail";
	           echo "</a>";
	     }
		else
		{
		  echo "<script type='text/javascript'>alert('Entry does not exist!')</script>";

		}

	}
	    
?>
</body>
</html>