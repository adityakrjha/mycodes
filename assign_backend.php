<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    	include 'db_connect.php';
    	$file_name_attached = "";
    	$success_upload_req = 1;
    	 if (isset($_POST["subject"]))
        {   
            $subject = test_input($_POST["subject"]); 
        }
         if (isset($_POST["question_title"]))
        {   
            $question_title = test_input($_POST["question_title"]); 
        }
        if (isset($_POST["deadline"]))
        {   
            $deadline = test_input($_POST["deadline"]); 
        }
         if (isset($_POST["price"]))
        {   
            $price = test_input($_POST["price"]); 
        }
          if (isset($_POST["email"]))
        {   
            $email = test_input($_POST["email"]); 
        }
          if (isset($_POST["mob_no"]))
        {   
            $mob_no = test_input($_POST["mob_no"]); 
        }

        if(!empty($_FILES["file_attached"]["name"]))
        {
            $target_dir = "client_attachment/";
            $file_name_req = basename($_FILES["file_attached"]["name"]);
            $target_file = $target_dir . $file_name_req;
            if (file_exists($target_file)) {
                $err = "File allready present with same name";
            }
            
            else if (move_uploaded_file($_FILES["file_attached"]["tmp_name"], $target_file)) {
                
                    $success_upload_req = 1;
                   
                }
                else
                {
                	echo "failed";
                    $success_upload_req = 0;   
                }
        }
        else
        {
        	$file_name_req = "";
        }

        
        if($success_upload_req == 0)
        {
            echo "alert('Failed to upload the file');";
        }
        else{
        	$question_title = mysqli_real_escape_string($con,$question_title);
         	$subject = mysqli_real_escape_string($con,$subject);
         	$result = mysqli_query($con,"INSERT INTO request (subject,que_title,deadline,price,file_attached,email,mob_no)
        VALUES ('$subject','$question_title','$deadline','$price','$file_name_req','$email','$mob_no')");
        if($result)
        {
        	echo "saved in database";
        	require("mail/class.phpmailer.php");
			$mail = new PHPMailer();

			$mail->Host = "smtp.gmail.com";  // specify main and backup server
			$mail->IsSMTP();                                      // set mailer to use SMTP
			$mail->SMTPAuth = true;     // turn on SMTP authentication
			$mail->Username = "calltutors2015@gmail.com";  // SMTP username
			$mail->Password = "callutkarsh"; // SMTP password
			$mail->Port = 465;
 			$mail->Mailer = "smtp";
			$mail->SMTPSecure = 'ssl';
			$mail->From = "calltutors2015@gmail.com";
			$mail->FromName = "Utkarsh";
			$mail->AddAddress($email, "Utkarsh");

			$mail->WordWrap = 50;                                 // set word wrap to 50 characters
			//$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
			//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
			$mail->IsHTML(true);                                  // set email format to HTML

			$mail->Subject = "Calltutors.com";
			$mail->Body    = "Thank you for you assignment submission, Our team will contact you soon!</b><br><br>Regards,<br><a href='http://www.calltutors.com'>CallTutors</a>";
			//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

			if(!$mail->Send())
			{
   				echo "Message could not be sent. <p>";
   				echo "Mailer Error: " . $mail->ErrorInfo;
   				exit;
			}

			echo "Message has been sent";



			$mail1 = new PHPMailer();

			$mail1->Host = "smtp.gmail.com";  // specify main and backup server
			$mail1->IsSMTP();                                      // set mailer to use SMTP
			$mail1->SMTPAuth = true;     // turn on SMTP authentication
			$mail1->Username = "calltutors2015@gmail.com";  // SMTP username
			$mail1->Password = "callutkarsh"; // SMTP password
			$mail1->Port = 465;
 			$mail1->Mailer = "smtp";
			$mail1->SMTPSecure = 'ssl';
			$mail1->From = "calltutors2015@gmail.com";
			$mail1->FromName = "Utkarsh";
			$mail1->AddAddress("utkarsh578@gmail.com", "Utkarsh");

			$mail1->WordWrap = 50;                                 // set word wrap to 50 characters
			$mail1->AddAttachment("client_attachment/".$file_name_req);         // add attachments
			    // optional name
			$mail1->IsHTML(true);                                  // set email format to HTML

			$mail1->Subject = "Calltutors.com";
			$mail1->Body    = "<p>Request From a client
								<br>
								<p><h4>Subject:</h4>".$subject."<br>
								<p><h4>Question Title:</h4>".$question_title."<br>
								<p><h4>Deadline:</h4>".$deadline."<br>
								<p><h4>Expected Price:</h4>".$price."<br>
								<p><h4>Email:</h4>".$email."<br>
								<p><h4>Contact No:</h4>".$mob_no."<br><br>
								Bellow files are attached"

			;
			//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

			if(!$mail1->Send())
			{
   				echo "Message could not be sent. <p>";
   				echo "Mailer Error: " . $mail1->ErrorInfo;
   				exit;
			}

			echo "Message has been sent";
        }
        else
        {
        	echo "Not stored in database";
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