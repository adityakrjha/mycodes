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
      <hr class="divider">


      <?php
      include 'db_connect.php';
      $page = 0;
      $offset  = 0;
      if($_GET["page"])
      {
      	$page = $_GET["page"];
      	$offset = $page*10;
      }
      $search_text = "";
      if($_POST["search_text"])
      {
      	$search_text = $_POST["search_text"];
      }
      	
        
		$result=mysqli_query($con,"SELECT id,title,subject,price,left(description,150) FROM projects where title LIKE '%".$search_text."%' OR subject LIKE '%".$search_text."%' LIMIT 10 OFFSET ".$offset."") or die(mysqli_error($con));
		/*echo "<table class="."'table table-striped'".">";
		echo "<th>ID</th>";
		echo "<th>Title</th>";
		echo "<th>Subject</th>";
		echo "<th>Download</th>";
		echo "<th>Price($)</th>";*/
		$sno = 1;
		while($count=mysqli_fetch_array($result))
		{
			echo "<article class='listing posting-listing'>";
			echo "<div class='desc'>";
            echo " <div class='foot' style='color:grey;'><i>".$count["subject"]."</i></div>";
			echo "<h3><a href='project.php?id=".$count["id"]."'>".$count["title"]."</a></h3>";
			echo "<p>".$count["left(description,150)"]." <b>...</b> </p>";
			echo "</div>";
		
			echo "</article>";
			echo "<div align='right' style='margin-right:100px;'><button type='button' class='btn btn-primary'><a href='project.php?id=".$count["id"]."' style='color:white;'>Price $".$count["price"]."</a></button></div>";
			echo "<hr class='divider'>";
			/*echo "<tr>";
			echo "<td>".$sno++."</td>";
			echo "<td>".$count['title']."</td>";
			echo "<td>".$count['subject']."</td>";
			echo "<td><a href="."'project_name.php?id=".$count['id']."'>Download</td>";
			echo "<td>".$count['price']."</td>";
			echo "</td>";*/
		}
		echo "</table>";
		$next_page = $page+1;
        $previou_page = $page-1;
	
?>
        <!-- Full Width Image Header with Logo -->
        <!-- Image backgrounds are set within the full-width-pics.css file. -->
      

        <!-- Fixed Height Image Aside -->
        <!-- Image backgrounds are set within the full-width-pics.css file. -->
       

        <!-- Content Section -->
       

        <!-- Footer -->
        <center>
            <nav>
            <ul class="pager">
                <li><?php echo "<a href='search_response.php?page=".$previou_page."'>"; ?>Previous</a></li>
                <li><?php echo "<a href='search_response.php?page=".$next_page."'>"; ?>Next</a></li>
            </ul>
            </nav>
        <br><br>
        </center>
         </section>
        <div class="navbar-fixed-bottom">
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


