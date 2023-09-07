<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>ADMIN DASHBOARD</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">

                    <img src="assets/img/logo.PNG" />
                </a>

            </div>

            <div class="right-div">
                <a href="logout.php" class="btn btn-info pull-right">LOGOUT</a>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                        
                        <li><a href="ABOUT.php" class="menu-top-active">DASHBOARD</a></li>
                        <li><a href="VIEWELECTION.php">DECLARATION</a></li>
                        
                          <li><a href="VIEWPOST.php">ELECTION DETAILS</a></li>
                         <li><a href="VIEWCANDIDATE.php">APPROVAL</a></li>
                            
                          
                           <li><a href="VIEWDEP.php">DEPARTMENT</a></li>
                            <li><a href="VIEWBATCH.php">BATCH</a></li>
                           
                            <li><a href="ACCCAND.php">CANDIDATES</a></li>
                             <li><a href="VIEWVOTER.php">VOTERSLIST</a></li>
                              <li>
                                <a href="VOTERS_REPORT.php" >REPORTS </a>
                                <li><a href="VIEW_SETTINGS.php">SETTINGS</a></li>
                            </li>
                             <li><a href="RESULT.php">RESULT</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    