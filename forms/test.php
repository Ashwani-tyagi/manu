<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "ashwani";

$con = mysqli_connect($server,$username,$password,$db);

if ($con){
    //echo "connection successful";
}
else
{
    echo "connection failed";
}
?>

<?php 
if (isset($_POST['submit'])) {
	$First_Name = $_POST["First_Name"];
	$Last_Name = $_POST['Last_Name'];
	$Email = $_POST['Email'];
	$DOB = $_POST['DOB'];
	$mobile_no = $_POST['mobile_no'];
	$Designation = $_POST['Designation'];
	$Gender = $_POST['Gender'];
	$Hobbies = $_POST['Hobbies'];
	
	$sql = "INSERT INTO user_info (First_Name, Last_Name, Email, DOB, mobile_no, Designation, Gender,Hobbies) VALUES ('".$First_Name."','".$Last_Name."', '".$Email."', '".$DOB."','".$mobile_no."','".$Designation."','".$Gender."','".$Hobbies."')";

	if (mysqli_query($con, $sql)) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Form</title>
</head>
<body>
	<form action="test.php" method="POST">
		First Name:-   <input type="text" name="First_Name" required="" /><br>
		Last Name:-   <input type="text" name="Last_Name" required /><br>
		Email :-   <input type="text" name="Email" required /><br>
		Date Of Birth:-   <input type="text" name="DOB" required /><br>
		Mobile:-   <input type="text" name="mobile_no" required /><br>
		Designation:-   <input type="text" name="Designation" required /><br>
		Gender:-   <input type="radio" name="Gender" value="Male" />Male
		           <input type="radio" name="Gender" value="Female" />Female<br>
       	Hobbies:-<select name="Hobbies">  
                   <option value="">--Select--</option>
                   <option value="playing">playing cricket</option>
                   <option value="listening">listening music</option> 
                   <option value="swimming">swimming</option>
                   <option value="running">running</option>
               </select><br>
		           <input type="submit" name="submit" value="Submit"/>
	</form>


	
</body>
</html>