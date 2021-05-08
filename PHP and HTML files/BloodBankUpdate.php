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
	
<h1><center>Number has been updated</center></h1>

<ul>
<nav class="w3-bar w3-black">
  <li><a href="HomePage.html" class="w3-button w3-bar-item">Home</a></li>
  <li><a href="BloodBankPage.php" class="w3-button w3-bar-item">Back to Blood Bank Info</a></li>
</nav>
</ul>


</body>
</html>

<?php      
    include('connection.php');  
    $name = $_POST['_name'];  
    $number = $_POST['_number'];  
      
        //to prevent from mysqli injection  
        $name = stripcslashes($name);  
        $number = stripcslashes($number);  
        $name = mysqli_real_escape_string($con, $name);  
        $number = mysqli_real_escape_string($con, $number);  
      
      $sql ="update Blood_Bank set PhoneNumber = '$number' where BloodBank = '$name'";
      $query = mysqli_query($con, $sql);
?>  