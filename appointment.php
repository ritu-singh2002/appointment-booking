<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="gmt";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['booking']))
{	
	 $full_name = $_POST['full_name'];
	 $email = $_POST['email'];
	 $gender = $_POST['gender'];
	 $date = $_POST['date'];
	 $slot = $_POST['slot'];

	 $sql_query = "INSERT INTO appointment (Full_Name, Email, Gender, Date, Time_Slot)
	 VALUES ('$full_name','$email','$gender','$date','$slot')";

	 if($conn->query($sql_query) == true){
        echo "Successfully inserted";}
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>