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
</head>
<?php

session_start();
$m = new MongoClient();
      $db = $m->database1;
      $collection=$db->signup1;
echo $_SESSION['var1'];
echo $_SESSION['itemvar'];
print_r ($_SESSION['itemvar']);
$cursor=$collection->find(array("category"=>$_SESSION['var1']));
//print_r ($cursor);
    foreach($cursor as $current)
		 {
             //print_r ($current);
             echo "==============";
             echo "<br/>";
			 if(is_array($current))
			 {      					   

			      echo "<table border=1 align=center id=customers>";
					echo "<tr>";
						echo "<th>"."Item Name"."</th>";
							echo "<th>"."Brand"."</th>";
					echo "<th>"."Price"."</th>";
						echo "</tr>";

				foreach($current as $current2)
			    {   
					if(is_array($current2))
				    {   

						foreach($current2 as $current3)
					    {   
					  		 if(is_array($current3))
							 {     
							       //echo "<br/>".$current['username'];
									foreach($_SESSION['itemvar'] as $value1)
										{   
												if($current3['item']==$value1)
												{
												   echo "<tr>"."<td>".$current3["item"]."</td>"."<td>".$current3["brand"]."</td>"."<td>".$current3["price"]."</td>"."</tr>";

												}
			                             } 
                             }
                        }
                    } 
               } 
		    }
           			   
	    }
	?>
</html>
