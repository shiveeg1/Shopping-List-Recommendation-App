<html>
<body>
<link href="login.css" rel="stylesheet">
<h2>Log in</h2>
<div>
<form action="" method="post">

  <fieldset class="account-info">
    <label>
      Username
      <input type="text" name="user">
    </label>
    <label>
      Password
      <input type="password" name="pass">
    </label>
  </fieldset>
  <fieldset class="account-action">
    <input class="btn" type="submit" name="submit" value="Login">
    <label>
      <input type="checkbox" name="remember"> Stay signed in
    </label>
  </fieldset>
  
</form>
 </div>
 <?php
	  $result=0;
      $m = new MongoClient();
	  $db=$m->mydb1;
	  $login=$db->login;
	  $qry=array("username"=>$_POST['user'],"password"=>$_POST['pass']);
	  $result=$login->findOne($qry);
	  //echo $result;
	  if($result)
	{
	echo "you have successfully logged in \t".$_POST ['user'];
	}
	else
	{
	   echo 'Login not successfull';
	}
	
 ?>
</body>
</html>.
