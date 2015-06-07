<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  include 'db_connect.php';
	if ($_POST["username"])
     {
     	$username = test_input($_POST["username"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name))
       {
        $err = "Wrong username or password";
        echo "alert(".$err.");";
        
       }
     }
     if ($_POST["password"])
     {

     	$password = test_input($_POST["password"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name))
       {
        $err = "Wrong username or password";
        echo "alert(".$err.");";
        
       }
     }
		$result=mysqli_query($con,"SELECT * FROM users WHERE username='$username' AND password='$password'") or die(mysqli_error($con));
		$count=mysqli_fetch_array($result);
		if($count['username']==$username && $count['password']==$password)
		{
			$_SESSION['username']=$username;
			
			header("Location:add_project.php");
		}
		else
		{
		    echo '<script language="javascript">';
            echo 'alert("Wrong username or password")';
            echo '</script>';
            header('refresh:0;url=login.html');
		}
		
}
function test_input($data)
		{
     		$data = trim($data);
		     $data = stripslashes($data);
		     $data = htmlspecialchars($data);
		     return $data;
		}

?>