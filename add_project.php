<?php session_start();
    if(empty($_SESSION['username'])){
        header('Location:login.html');
    }?>
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
                            <a href="logout.php"><b>Log Out</b></a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
    <section>
      <div class="container">
        <div class="row">
         <div class="col-md-6 col-md-offset-3">
            <h3 align="center">Upload Project</h1>
            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="add_project_backend.php">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-1 control-label">Title</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="inputEmail3"  name="title">
                         </div>
                            
                 </div>
                 <br>
                 <label for="inputEmail3" class="col-sm-1 control-label">Description</label>
                 <textarea class="form-control" rows="5" name="description"></textarea>
                 <br>
                 <div class="form-group">
                 
                <label for="inputEmail3" class="col-sm-1 control-label">Subject</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="inputEmail3"  name="subject">
                         </div>
                
                </div>
                 <br>
                 <div class="form-group">
                 <label for="inputEmail3" class="col-sm-1 control-label">Required File</label>
                 <div class="col-sm-12">
                <input type="file" id="exampleInputFile" name="required_file">
                <p class="help-block">Make it ZIP file.</p>
                </div>
                </div>
                <br>
                  <div class="form-group">
                 <label for="inputEmail3" class="col-sm-1 control-label">Solution File</label>
                 <div class="col-sm-12">
                <input type="file" id="exampleInputFile" name="solution_file">
                <p class="help-block">Make it ZIP file.</p>
                </div>
                </div>
                <br>
                 <div class="form-group">
                    <label for="inputEmail3" class="col-sm-1 control-label">Price($)</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="inputEmail3" name="price">
                         </div>
                            
                 </div>
                 <br>
                  <input type="submit" class="btn btn-default">
            </div>
            </form>
    </div>
    </div>
    </div>
    </section>

        <!-- Full Width Image Header with Logo -->
        <!-- Image backgrounds are set within the full-width-pics.css file. -->
      


        <!-- Fixed Height Image Aside -->
        <!-- Image backgrounds are set within the full-width-pics.css file. -->
       

        <!-- Content Section -->
       

        <!-- Footer -->
       
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
