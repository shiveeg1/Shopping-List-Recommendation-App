<html>
<head>
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    width: 50%;
    border-collapse: collapse;
}

#customers td, #customers th {
    font-size: 1em;
    border: 1px solid #98bf21;
    padding: 3px 7px 2px 7px;
}

#customers td {
    font-size: 1.1em;
    text-align: left;
    padding-top: 5px;
    padding-bottom: 4px;
    background-color: #EAF2D3;
    color: green;
}

#customers th {
    color: #000000;
    background-color: #A7C942;
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
					    <a href="itemwithembedd.php">Insert</a>
						<!--a HREF="http://localhost/login2.php" onClick="return targetopener(this,true,true)">log in</a-->
					</li>
					<li>
					 <a href="deletewithembedd.php">Delete</a>
					    
					</li>
					<li>
					
					    <a href="finalupdate.php">Update</a>
					</li>
					<li>
					<a href="shopkeeperhp.php">Home</a>
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
	<br/>
	<br/>
	<br/>
<link href="csslogin.php">
<?php   
session_start();
      $m = new MongoClient();
      $db = $m->database1;
      $collection=$db->signup1;
      $qry=array("username"=>$_SESSION['user'],"password"=>$_SESSION['pass']);
	  $result=$collection->findOne($qry);
	  //echo $_GET['username'];
	  if($result)
	  {
      $cursor=$collection->find(array("username"=>$_SESSION['user']),array("_id"=>0,"Item"=>1));
	  //var_dump($cursor->getnext());
	  echo "<b><center>".$_SESSION['user']."</center></b>";
	  echo "<table border=1 align=center id=customers>";
	echo "<tr>";
	echo "<th>"."Item Name"."</th>";
	echo "<th>"."Brand"."</th>";
	echo "<th>"."Price"."</th>";
	 echo "</tr>";

	   foreach($cursor as $current){
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
					   echo "<tr>"."<td>".$current3["item"]."</td>"."<td>".$current3["brand"]."</td>"."<td>".$current3["price"]."</td>"."</tr>";
					  }
				}
					
					   
				}
			  }
			}
			

			
            }
			echo "</table>";
	}		
	 
?>
</body>
</html>