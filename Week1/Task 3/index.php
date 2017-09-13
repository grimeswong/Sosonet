<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Social Network</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    <!-- Bootstrap core css (cdn) -->
        <link rel="stylesheet" href="style.css" type="text/css" media = "screen and (min-width:768px)">  <!-- reminder: braces must be inside the dobule quote 
        <!-- <link rel="stylesheet" href="mobile.css" type="text/css" media = "(max-device-width:767px)">  <!-- reminder: braces must be inside the dobule quote -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>    <!-- jQuery linking cdn files -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> <!-- jQuery linking cdn files -->
    </head>
    
    <body>
        <!-- Grimes Navigation bar -->
        <nav class="navbar navbar-inverse"> <!-- inverse=black theme, fixed-top=nav fix on top -->
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <!-- collapse button -->
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                    </button>
                    <a class="navbar-brand" href="index.php">Soical Network</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav nav-pills navbar-nav navbar-right">  <!-- nav style = pills, right aligned -->
                      <li role="presentation"><a href="#">Photos</a></li>
                      <li role="presentation"><a href="#">Friends</a></li>
                      <li role="presentation"><a href="#">Login</a></li>
                    </ul>
                </div>
            </div> <!-- end navbar container -->
        </nav> <!-- end navbar -->
        
        <div class="container" id="maincontent">
            <div class="row" >
                <div class="col-sm-4">
                    <div class="name"><label>Name: </label><br><input type="text" placeholder="Enter your name"></div>
                    <!--<div class="message"><label>Message: </label><br><input id="messagetextfield" type="text" row="4" placeholder="Enter new message"></div>-->
                    <div class="message"><label>Message: </label><br><textarea id="messagetextarea" name="messagebox" rows="4" placeholder="Enter new message"></textarea></div>
                </div>
                
                <div class="col-sm-8">
                    <h3>Grimes Wong</h3>
                    <div class="row posts" id="post1">
                        <div class="col-sm-3">Image</div>
                        <div class="col-sm-9">
                            <p>Date Time</p>
                            <p>Message</p>
                        </div>
                    </div>
                    <div class="row posts" id="post2">
                        <div class="col-sm-3">Image</div>
                        <div class="col-sm-9">
                            <p>Date Time</p>
                            <p>Message</p>
                        </div>
                    </div>
                    <div class="row posts" id="post3">
                        <div class="col-sm-3">Image</div>
                        <div class="col-sm-9">
                            <p>Date Time</p>
                            <p>Message</p>
                        </div>
                    </div>
                </div>
            </div> <!-- end of row maincontent-->
        </div> <!-- end of container -->
        
        
        
    </body>
</html>