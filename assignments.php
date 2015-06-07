    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <title>Assignment Help, Homework Help, Online Tutors - calltutors.com</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

       
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/full-width-pics.css" rel="stylesheet">
        <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">

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
    <section style="padding:5px;">
      <div class="container">
        <div class="row">
         <div class="col-md-6 col-md-offset-3">
            <h3 align="center">Ask For An Assignment</h3>
            <hr class="divider">
            <form class="form-horizontal" enctype="multipart/form-data" action="assign_backend.php" method="post">
    <div class="form-group has-feedback">
        <label for="inputEmail" class="control-label col-xs-2">Subject</label>
        <div class="col-xs-10">
            <input type="text" class="form-control" id="inputEmail" placeholder="Subject" name="subject" required>
            <i class="icon-file-text-alt form-control-feedback"></i>
        </div>
    </div>
    <div class="form-group has-feedback">
        <label for="inputPassword" class="control-label col-xs-2">Question Title</label>
        <div class="col-xs-10">
            <textarea class="form-control" rows="4" name="question_title" required></textarea>
        </div>
    </div>
        
    <div class="form-group">
            <label for="inputEmail" class="control-label col-xs-2">Deadline</label>
            <div class="col-xs-10">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" placeholder="Deadline" name="deadline" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    </div>
                </div>
    </div>
    <div class="form-group has-feedback">
        <label for="inputPassword" class="control-label col-xs-2">Expected Price</label>
        <div class="col-xs-10">
            <input type="number" class="form-control" id="inputPassword" placeholder="Expected Price" name="price">
            <i class="icon-dollar form-control-feedback"></i>
        </div>
    </div>

    <div class="form-group has-feedback">
        <label for="inputEmail" class="control-label col-xs-2">Attatchment</label>
        <div class="col-xs-10">
            <input type="file" class="filestyle" data-icon="false" name="file_attached" placeholder="ZIP File">
        </div>
    </div>
    <div class="form-group has-feedback">
        <label for="inputEmail" class="control-label col-xs-2">Email</label>
        <div class="col-xs-10">
            <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
    </div>
    <div class="form-group has-feedback">
        <label for="inputEmail" class="control-label col-xs-2">Mobile No</label>
        <div class="col-xs-10">
            <input type="text" class="form-control" id="inputEmail" placeholder="Country Code-Mobile No" name="mob_no" required>
            <i class="icon-mobile-phone form-control-feedback"></i>
        </div>
    </div>
    <center>
    <input type="submit" class="btn btn-default" value="Ask Asignment">
    </center>
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
       
    
                <!-- /.navbar-collapse -->
  

        <!-- jQuery -->
       
        <script src="js/jquery-1.8.3.min.js"></script>
        <script src="js/bootstrap-datetimepicker.min.js"></script>
        <script src="js/locales/bootstrap-datetimepicker.fr.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap-filestyle.min.js"></script>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });

        </script>
        <script type="text/javascript">
             $(function () {
                $(":file").filestyle({icon: false});
                });
        </script>
            

    </body>

    </html>
