<html>
	<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}


li a:hover {
  background-color: red;
  color: white;
}
</style>
<body>
	
<ul>
<nav class="w3-bar w3-black">
  <li><a href="HomePage.html" class="w3-button w3-bar-item">Home</a></li>
</nav>
</ul>


</body>
</html>

<?php      
    include('connection.php');  
    $type = $_POST['type'];  
      
      
        //to prevent from mysqli injection  
        $type = stripcslashes($type);  
        $type = mysqli_real_escape_string($con, $type);  
        
      
        $sql = "select * from BLood_Data where BloodType ='$type' and Disease = 'perfect'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count >= 1){  
        	echo "<h1><center> Patient Infromation </center></h1>";  
        	echo "<h2> Disease-free Match </h2>";
        	echo "<br>";  
        	$sql ="select * from BLood_Data where BloodType ='$type' and Disease = 'perfect'";
        	
          $bid = $row['BID'];
          $q = "select name from Donor_Data where ID = '$bid'";
          $query = mysqli_query($con, $q);
          
   

        	while($row = mysqli_fetch_Assoc
			($query)){
        		foreach($row as $result){
				if($result == null){ 
				 $result='NULL';
				}
			 
				echo $result ;

			}
			echo "<br>";
			
		}
			
        }  
        else{  
            echo "No matches found";  
        }     
?>  