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
	

<h1><center>Update Page</h1></center>



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
  <li><a href="BloodBankPage.php" class="w3-button w3-bar-item">Back to Blood Bank Info</a></li>
</nav>
</ul>

<h3>Please enter update information</h3>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
</head>
<body>
    <form method="post" action="BloodBankUpdate.php" >
        <table border="1" >
            <tr>
                <td><label for="_name">Blood Bank Name:</label></td>
                <td><input type="text" 

                  name="_name" id="_name"></td>
            </tr>
            <tr>
                <td><label for="_number">New Phone Number:</label></td>
                <td><input name="_number" 

                  type="text" id="_number"></input></td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit"/>
                <td><input type="reset" value="Reset"/>
            </tr>
        </table>
    </form>
</body>
</html>



<body>
</body>