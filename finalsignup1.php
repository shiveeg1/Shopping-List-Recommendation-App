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
</head>
<script type="text/javascript">
function validate()
{
   if(document.myform.password.value.length<6)
   {
      alert('Enter correct password(Minimum length 6)');
	  return false;
   }
  if(document.myform.password.value!=document.myform.confpassword.value)
	  {
      alert('Enter correct password');
	  return false;
   }
   if(document.myform.location.value=="")
   {
      alert('Enter location');
	  return false;
   }
   if(document.myform.category.value==-1)
   {
      alert('Enter category');
	  return false;
   }
   if(!document.myform.tos.checked){alert("Please check the terms and conditions");
 return false; } 
  return true;
}
</script>
    <body>
		   	<!--a href="shopkeeperhp.html"><img src="img/HOME3.jpg"  height="42" width="42" 
align="right"></a!-->
	<link  href="csslogin.css" rel="stylesheet">
<form name="myform" class="form-4" action="" method="post">
				    <h1>Sign up</h1>
				    <p>
				        <label for="username">shop Name</label>
				        <input type="text" name="username" placeholder="Shop Name" required>
				    </p>
				    <p>
				        <label for="password">Password</label>
				        <input type="password" name='password' placeholder="Password" required> 
				    </p>
					<p>
						<label for="confirm password">Confirm Password</label>
					    <input type="password" name="confpassword"  placeholder="Confirm Password..." required>
					</p>
					<p>
						<label for="Address">Address</label>
						<input type="text" name="address"  placeholder="Address..." required >
					</p>
					<p>
						<label for="Location">Location</label>	
						<input type="text" name="location"  placeholder="location..." requred>
					</p>
  
					<p>
					<div>
					category:&nbsp &nbsp &nbsp 
					<!--select name="Category"-->
					<select name="category" id="category">
					<option  value="-1">[Choose Yours]</option>
					<option  value="Stationary">Stationary</option>
					<option value="Clothing">Clothing</option>
					<option value="Grocery">Grocery</option>
					</select><br/>
					</div>
					</p>
					
					<p>
					<input type="checkbox" name="tos"/>&nbsp &nbsp &nbsp &nbsp Accept the <a href="">Terms of service</a>
					<!--label for="tos">Accept the <a href="">Terms of service</a></label-->
					</p>
					
				    <p>
				        <input type="submit" name="submit" value="Continue" onclick="validate();">
				    </p> 
				     
				</form>
	</body>
     </html>
     
     <?php
	 
	  $result=0;
      $m = new MongoClient();
	  $db=$m->database1;
	  $collection=$db->createCollection("signup1");
	  
	  
	  $lat=$_GET['lat'];
	  $longt=$_GET['longt'];
	  if(isset($_POST['submit']))
	  {
	    $document=array(
	             "username"=>$_POST['username'],
				 "password"=>$_POST['password'],
				 "location"=>$_POST['location'],
			     "category"=>$_POST['category'],
			     "latitude"=>$lat,
			     "longitude"=>$longt,
				 "Item"=>array()
	 );
	  if($_POST['username']!="" && $_POST['password']!="")
	{       
	      $qry=array("username"=>$_POST['username'],"password"=>$_POST['password']);
	     $result=$collection->findOne($qry);
		 
		 if($result)
		 {
		    echo "<script type='text/javascript'>alert('Username or password already exist.')</script>";
			
		 }
		 else
		 {
			 $collection->insert($document);
			 echo "<script type='text/javascript'>alert('Congratulations!You have 
successfully Signed up.')</script>";
				echo "<script type='text/javascript'> window.location=\"shopkeeperhp.php\";</script>";

		  }
			 
	  }
	 }
 ?>
