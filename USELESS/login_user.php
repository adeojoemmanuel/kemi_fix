<?PHP

$servername = "localhost";
	$Username = "root";
	$Password = "";
    $dbname = "login_user";
    mysql_connect($host,$Username,$Password);
    mysql_select_db($dbname);

    if(isset($_GET['Username'])){
        $username=$_GET['Username'];
        $password=$_GET['Password'];

        $sql="select * from login_user where Username='".$Username."' AND Password'".$Password."'  limit 1";
        $result=mysql_query($sql);

        if(mysql_num_rows($result)==1){
            echo "you have successfully logged in";
            exit();
        }
        else{
            echo "you have enetered an incorrect password";
            exit(); 
        }
    }

	/*$con = mysqli_connect($servername,$username,$password,$dbname);
	if(!$con)
	{
		die("Error : ".mysqli_connect_error());
	}

	if($con)
	{
		echo "Database Connected Succesfully";
	}


	$username = $_GET['rusername'];
	$pass = $_GET['renterPass'];

	// Database Connection code
	
	if($pass1== $pass1)
	{
		$sql = "INSERT INTO `login_user`(`username`, `password`) VALUES('$username`,$pass');";
		if(mysqli_query($con,$sql))
		{
			header("Location: admin.php");
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
	
	mysqli_close($con);*/
	
?>