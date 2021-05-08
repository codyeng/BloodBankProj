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
	

<h1><center>Blood Bank Information Page</h1></center>

<style>
body {
  background-image: url('Blood_drop.png');
  background-repeat: no-repeat;
  background-attachment: scroll ; 
  background-size: 100% 100%;
}
</style>
<ul>
<nav class="w3-bar w3-black">
  <li><a href="HomePage.html" class="w3-button w3-bar-item">Home</a></li>
  <li><a href="UpdateNumber.php" class="w3-button w3-bar-item">Update Phone Number</a></li>
  
</nav>
</ul>

<body>
</body>
</html>

<?php      
    include('connection.php');  
 
      
          echo "<h1> Blood Bank Infromation </h1>";  
          echo "<h2> Bank Name | Address | Phone Number | Donor Names </h2>";
          echo "<br>";  
          $sql ="select * from Blood_Bank";
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
      
      
?>  