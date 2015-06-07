<?php
    if(isset($_GET["id"]))
    {
        $project_id = $_GET["id"];
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Assignment Help, Homework Help, Online Tutors - calltutors.com</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Full Width Pics - Start Bootstrap Template</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/full-width-pics.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   <a class="navbar-brand" href="#"><b>Call Tutors</b></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                   <ul class="nav navbar-nav">
                        <li>
                            <a href="#"><b>About</b></a>
                        </li>
                        <li>
                            <a href="#"><b>Services</b></a>
                        </li>
                        <li>
                            <a href="#"><b>Contact</b></a>
                        </li>
                        <li>
                            <a href="login.html"><b>Login</b></a>
                        </li>
                        <li>
                            <a href="search_response.php"><b>Search</b></a>
                        </li>
                        <li>
                            <a href="assignments.php"><b>Ask For Assignments</b></a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

      <form class="form-inline" action="search_response.php" method="post">
      <br><br>
      <center>
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" style="width:700px" name="search_text">
    </div>
    <button type="submit" class="btn btn-default">Search</button>
	
		</center>
      </form>

	 <section class="main" style='margin-left:20px;padding:10px;'>
     <?php
              $con=mysqli_connect("localhost","root","evm","calltutors");
 
             if (mysqli_connect_errno())
            {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            $result=mysqli_query($con,"SELECT * FROM projects where id=".$project_id."") or die(mysqli_error($con));
            $count=mysqli_fetch_array($result);
        ?>
      <hr class="divider">
      <div align="right">
     <button type="button" class="btn btn-primary" href="dfdf.html"><?php echo "<a href='download.php?id=".$count["id"]."&file=1'style=color:white;>"; ?>Download Required File</a></button>
     <button type="button" class="btn btn-primary"><?php echo  "<a href='download.php?id=".$count["id"]."&file=2' style=color:white;>"; ?>Download Solution File</a></button>
     </div>
      <center>
          <h2>Title:</h2>
          <?php
            echo "<p>".$count["title"]."</p><br>";
            echo "<h3>Subject:</h3><br>";
            echo "<p>".$count["subject"]."</p><br>";
            echo "<h3>Description:</h3><br>";
            echo "<p style='height:200px;width:500px;'>".$count["description"]."</p><br>";
            echo "<span class='label label-primary'>Price: $".$count["price"]."</pan><br>";
          ?>
        
      </center>

    
        <!-- Full Width Image Header with Logo -->
        <!-- Image backgrounds are set within the full-width-pics.css file. -->
      

        <!-- Fixed Height Image Aside -->
        <!-- Image backgrounds are set within the full-width-pics.css file. -->
       

        <!-- Content Section -->
       

        <!-- Footer -->
         </section>
       
       
    \
    <div class="navbar navbar-inverse" style="background:black;height:40px;margin-bottom:-5px;">
        <div class="container">
             <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#">Disclaimer</a>
                        </li>
                        <li>
                            <a href="#">Copyright </a>
                        </li>
                        <li>
                            <a href="#">Careers</a>
                        </li>
                       
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
    </div>
    </div>
   

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <script>
        function sendResponse()
        {
            var searchData = {search:$('#exampleInputName2').val()};
            $.post('data_response.php',searchData,function(data){
                for(var i in data){
                    console.log(data[i]['username']);
                }
            });
        }
        </script>

    </body>

    </html>


