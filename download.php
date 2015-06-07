<?php
	
include 'db_connect.php';
$id = $_GET["id"];
$download_type = $_GET["file"];
if($download_type=='1')
{
	$path = 'http://calltutors.com/req_file/';
}
else
{
	$path = 'http://calltutors.com/sol_file/';
}
 
$result=mysqli_query($con,"SELECT * FROM projects where id=".$id."") or die(mysqli_error($con));
$count=mysqli_fetch_array($result);
if($download_type=='1')
{
	$file = $count["required_file_hash"];
	$output_filename = $count["required_file"];
}
else
{
	$file = $count["solution_file_hash"];
	$output_filename = $count["solution_file"];
}
$fullfile = $path.$file;

//header('Content-Description: File Transfer');
    header('Content-Type: application/force-download');
    header("Content-Disposition: attachment; filename=\"" . basename($output_filename) . "\";");
    header('Content-Transfer-Encoding: binary');
    //header('Content-Length: ' . filesize($file));
    ob_clean();
    flush();
    readfile($path.$file); //showing the path to the server where the file is to be download
    exit();
?>