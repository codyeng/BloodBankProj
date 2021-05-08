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
    $username = $_POST['_name'];  
    $password = $_POST['_ssn'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from Donor_Data where name = '$username' and ssn = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
        	echo "<h1><center> Donor Infromation </center></h1>";  
        	echo "<h2> ID | Name | Phone Number | Address | SSN | Birth Date | Blood Type </h2>";
        	echo "<br>";  
        	$sql ="select * from Donor_Data where name = '$username' and ssn = '$password'";
        	$query = mysqli_query($con, $sql);
        	

        	while($row = mysqli_fetch_Assoc
			($query)){
        		foreach($row as $result){
				if($result == null){ 
				 $result='NULL';
				}
			
				echo $result . ' | ';

			}
			echo "<br>";
			
		}
			
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  