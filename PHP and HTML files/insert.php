<?php

	$con = mysqli_connect('localhost','root','');
	$db = mysqli_select_db($con, 'BloodBank');
 

if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$_name = mysqli_real_escape_string($con, $_REQUEST['_name']);
$phone_number = mysqli_real_escape_string($con, $_REQUEST['phone_number']);
$_adress = mysqli_real_escape_string($con, $_REQUEST['_adress']);
$_ssn = mysqli_real_escape_string($con, $_REQUEST['_ssn']);
$blood_type = mysqli_real_escape_string($con, $_REQUEST['blood_type']);
$birth_day = mysqli_real_escape_string($con, $_REQUEST['birth_day']);
$patient_ID = mysqli_real_escape_string($con, $_REQUEST['patient_ID']);

$sql = "INSERT INTO Patient_Data (Name, PhoneNumber, Address, ssn, bloodtype, birthdate, ID) VALUES ('$_name', '$phone_number', '$_adress', '$_ssn', '$blood_type', '$birth_day', '$patient_ID')";
if(mysqli_query($con, $sql)){
    echo "New Patient Data saved successfully.";
    
} else{
    echo "ERROR: Could not able to execute query. " . mysqli_error($con);
}
 

mysqli_close($con);
?>
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
	




<h1><center>Enter Your New Patient Data</h1></center>

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
</nav>
</ul>
<title>Add Record Form</title>
</head>
<body>
<form action="insert.php" method="post">
    <p>
        <label for="name">Name:</label>
        <input type="text" name="_name" id="name">
    </p>
    <p>
        <label for="phonenumber">Phone Number:</label>
        <input type="text" name="phone_number" id="phonenumber">
    </p>
    <p>
        <label for="Address">Address:</label>
        <input type="text" name="_adress" id="Address">
    </p>
     <p>
        <label for="ssn">SSN:</label>
        <input type="text" name="_ssn" id="ssn">
    </p>
 	<p>
        <label for="bloodtype">Blood Type:</label>
        <input type="text" name="blood_type" id="bloodtype">
    </p>
    <p>
        <label for="birthday">Birth Day:(YYYY-MM-DD)</label>
        <input type="text" name="birth_day" id="birthday">
    </p>
    <p>
        <label for="patientID">Patient ID:</label>
        <input type="text" name="patient_ID" id="patientID">
    </p>

    <input type="submit" value="Submit">
</form>
</body>
<body>
</body>
</html>