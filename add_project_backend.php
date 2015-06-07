<?php session_start();
    if(!isset($_SESSION['username'])){
        header('Location:login.html');
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        include 'db_connect.php';
        $file_name_req = "";
        $file_name_sol = "";
        $success_upload_req = 1;
        $success_upload_sol = 1;
        if (isset($_POST["title"]))
        {   
            $title = test_input($_POST["title"]); 
        }
         if (isset($_POST["description"]))
        {   
            $description = test_input($_POST["description"]); 
           
        }
         if (isset($_POST["subject"]))
        {   
            $subject = test_input($_POST["subject"]); 
        }
         if (isset($_POST["price"]))
        {   
            $price = test_input($_POST["price"]); 
        }

        if(!empty($_FILES["required_file"]["name"]))
        {
            $target_dir = "req_file/";
           $arr = explode(".", $_FILES["required_file"]["name"]);
            $req_file_hash = sha1(basename($_FILES["required_file"]["name"])).".".$arr[1];
            $target_file = $target_dir . $req_file_hash;
            if (file_exists($target_file)) {
                $err = "File allready present with same name";
            }
            
            else if (move_uploaded_file($_FILES["required_file"]["tmp_name"], $target_file)) {
                
                    $success_upload_req = 1;
                }
                else
                {
                    $success_upload_req = 0;   
                }
                $file_name_req = basename($_FILES["required_file"]["name"]);
        }
       if(!empty($_FILES["solution_file"]["name"]))
        {
            $target_dir = "sol_file/";
            $arr = explode(".", $_FILES["solution_file"]["name"]);
            $sol_file_hash = sha1(basename($_FILES["solution_file"]["name"])).".".$arr[1];
            $target_file = $target_dir . $sol_file_hash;
            if (file_exists($target_file)) {
                $err = "File allready present with same name";
            }
            
             else if (move_uploaded_file($_FILES["solution_file"]["tmp_name"], $target_file)) {
                
                    $success_upload_sol = 1;
                }
                 else
                {
                    $success_upload_sol = 0;   
                }
                $file_name_sol = basename($_FILES["solution_file"]["name"]);
        }
         
        if($success_upload_sol == 0 || $success_upload_req == 0)
        {
            echo "alert('Failed to upload the file');";
        }
        else{
        $description = mysqli_real_escape_string($con,$description);
         $title = mysqli_real_escape_string($con,$title);
        $result = mysqli_query($con,"INSERT INTO projects (title,description,subject,required_file,solution_file,price,required_file_hash,solution_file_hash)
        VALUES ('$title','$description','$subject','$file_name_req','$file_name_sol','$price','$req_file_hash','$sol_file_hash')");
        if($result)
        {
            $url="add_project.php";
            echo '<script language="javascript">';
            echo 'alert("Project uploaded and saved")';
            echo '</script>';
            echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
           //header('refresh:0;url=add_project.php');
        }

        
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