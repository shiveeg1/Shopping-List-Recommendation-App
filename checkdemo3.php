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
<body bgcolor="LIGHTGRAY">
<link href="csslogin.php">
<form>
</form>
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
                echo "<input type='checkbox' name='Item[]' value='".$a[$i]."'>".$a[$i]; 
                echo "</br>";
                }
		 }
	
	
		     echo "<br/>";
			 echo '<input type="submit" name="submit1" value="submit">';
			 echo "</form>";
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
												     echo "<table border=1 align=center bgcolor='yellow'>";
													 echo "<tr>";
													 echo "<td colspan='3'>".$current['username']."</td>";
													 echo "<td colspan='3'>Distance = ".$distance."(m)</td>";
													  echo "</tr>";
													 echo "</table>";
													 echo "<br/>";
												      echo "<table border=1 align=center id=customers>";
													   
													  
													  echo "<tr>";
													  echo "<th>"."Item Name"."</th>";
													  echo "<th>"."Brand"."</th>";
													  echo "<th>"."Price"."</th>";
													  echo "</tr>";
														

												   }
												    $cnt=$cnt+1;
												   echo "<tr>"."<td>".$current3["item"]."</td>"."<td>".$current3["brand"]."</td>"."<td>".$current3["price"]."</td>"."</tr>";

												}
			                             } 
                             } 
							 
							
                        }
                    } 
               } 
			   } 
			  
			   	echo "</table>";
                echo "<br/>";				
           			   
			}
		
	    }
		
		
?>
</body>
</html>
