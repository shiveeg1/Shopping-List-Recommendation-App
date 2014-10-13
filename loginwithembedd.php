<html>
 <head>

<style>	
body {
  background-image:url("gray5.jpg");; 
-webkit-background-size: cover;
-moz-background-size: cover;
background-size: cover;
}
</style>
</head>
    <body>
	 	<!--a href="shopkeeperhp.html"><img src="img/HOME3.jpg"  height="42" width="42" align="right"></a!-->
	<link  href="csslogin.css" rel="stylesheet">
<form class="form-4" action="" method="post">
				    <h1>Login</h1>
				    <p>
				        <label for="login">Username or email</label>
				        <input type="text" name="username" placeholder="Username or email">
				    </p>
				    <p>
				        <label for="password">Password</label>
				        <input type="password" name='password' placeholder="Password"> 
				    </p>

				    <p>
				        <input type="submit" name="submit" value="Continue">
				    </p>       
				</form>
	</body>
     </html>
	 <?php
	  $result=0;
      $m = new MongoClient();
	  $db=$m->database1;
	   $collection = $db->createCollection("signup1");
       session_start();
	   if(isset($_POST['submit']))
	   {
	  $qry=array("username"=>$_POST['username'],"password"=>$_POST['password']);
	  $result=$collection->findOne($qry);
          $_SESSION['user']=$_POST['username'];
		  $_SESSION['pass']=$_POST['password'];
		  $_SESSION['result']=$result;
	  //echo $result;
	  if($result)
	{
		echo "<script type='text/javascript'>alert('Login successful.')</script>";

	echo "<script type='text/javascript'> window.location=\"shopkeeperhp.php\";</script>";
	}
	else
	{
	echo "<script type='text/javascript'>alert('Login not successful.')</script>";
	   
    }
	}
	
 ?>
