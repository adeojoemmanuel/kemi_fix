<?PHP

$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "AGRI-FRIV";
	$con = mysqli_connect($servername,$username,$password,$dbname);
	if(!$con)
	{
		die("Error : ".mysqli_connect_error());
	}

	if($con)
	{
		echo "Database Connected Succesfully";
	}


	$firstname = $_GET['rfirstname'];
	$surname = $_GET['rsurname'];
	$email = $_GET['remail'];
	$gender = $_GET['rgender'];
	$pass1 = $_GET['renterPass'];
	$pass2 = $_GET['rconfirmPass'];
	// Database Connection code
	
	if($pass1 == $pass2)
	{
		$sql = "INSERT INTO `users`(`firstname`,`surname`, `email`, `gender`, `password`) VALUES('$firstname','$surname','$email','$gender','$pass1');";
		if(mysqli_query($con,$sql))
		{
			header("Location: index.php");
			echo "Registration Done Successfully...";
		}
		else
		{
			echo "Something went Wrong...";
		}
	}else
	{
		echo "Password Not matched....";
	}
	
	mysqli_close($con);
?>