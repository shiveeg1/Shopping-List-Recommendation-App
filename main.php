<?php
	 
	  $result=0;
      $m = new MongoClient();
	  $db=$m->database1;
	  $collection=$db->createCollection("signup1");
	  
	  
	  
	  if(isset($_POST['submit']))
	  {
	    $document=array(
	             "username"=>$_POST['username'],
				 "password"=>$_POST['password'],
				 "location"=>$_POST['location'],
			     "category"=>$_POST['category'],
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
