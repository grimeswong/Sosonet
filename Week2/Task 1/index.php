<?php
  $posts = array();
  $posts[0] = array('name' => 'Tom', 'img' => '../img/tom.png', 'comment' => 'He left his toy on the way', 'date' => '1-Jul-2017');
  $posts[1] = array('name' => 'Batman', 'img' => '../img/batman.jpeg', 'comment' => 'Beat it', 'date' => '5-Jul-2017');
  $posts[2] = array('name' => 'Peter', 'img' => '../img/peter.jpeg', 'comment' => 'i believe I can fly', 'date' => '7-Jul-2017');

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Social Network</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    <!-- Bootstrap core css (cdn) -->
        <link rel="stylesheet" href="../style.css" type="text/css">  <!-- reminder: braces must be inside the dobule quote -->
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
                    <?php 
                    foreach ($posts as $post) { ?>
                    
                    <div class="row posts">
                        <div class="col-sm-3">
                            <img class="avatar" src= "<?= $post['img'] ?>" alt="Image is not available"></img>
                        </div>
                        
                        <div class="col-sm-9">
                            <p><h3><?= $post['name'] ?></h3></p>
                            <p><?= $post['date'] ?></p>
                            <p><?= $post['comment'] ?></p>
                        </div>
                    </div>
                    <?php }
                    ?>
                </div>
            </div> <!-- end of row maincontent-->
        </div> <!-- end of container -->
        
    </body>
</html>