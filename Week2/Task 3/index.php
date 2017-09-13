<?php

  
/*** if create post object here, uncomment below code ***/  
//   use wp\Post;
//   include 'classes/post.php';
//   //Create Post Object
//   $posts = []; //initialise empty array
//   $posts[] = new Post('Tom', 'img/tom.png','1-Jul-2017', 'He left his toy on the way');
//   $posts[] = new Post('Batman', 'img/batman.jpeg', '5-Jul-17', 'Beat it');
//   $posts[] = new Post('Peter', 'img/peter.jpeg', '7-Jul-17', 'I believe I can fly');

/*** if use the post seeder, use below code ***/
    use wp\PostSeeder; /*** remainder: use '\' not '/' */
    include 'classes/postSeeder.php'; 
    $posts = PostSeeder::seed();        // use "::" double colon for using static class method
    
    // Add comments to user 
    $posts[1]->addComment('Fred', 'He is a good guy');
    // $posts[1]->addComment('Simon', 'I\'m not wear pants outside');
    $posts[2]->addComment('Bob', 'Michael Jackson "Beat it"');
    $posts[2]->addComment('John', 'I finally done it');
    $posts[2]->addComment('Peter', 'Ya..hoo');
  
  
  /*** For Testing use only ***/
    // var_dump($posts);
    // exit; 
  
// ?>


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
                    <?php foreach ($posts as $post) { ?>
                    
                    <div class="row posts">
                        <div class="col-sm-3">
                            <img class="avatar" src= "<?= $post->getImg(); ?>" alt="Image is not available"></img>
                        </div>
                        
                        <div class="col-sm-9">
                            <p><h3><?= $post->getUser() ?></h3></p>
                            <p><?= $post->getDate() ?></p>
                            <p><?= $post->getMessage() ?></p>
                            <br>
                            
                            <?php $comments = $post->getComments(); 
                                if (count($comments) == 1) { 
                                    echo "<p><strong>Comment:</strong></p>";    // Only print this out if the post has at least one comment
                                } else if (count($comments) > 1) {
                                    echo "<p><strong>Comments:</strong></p>";    // Only print this out if the post has more than one comment
                                }
                            ?>    <!-- set variable to get the array of comments -->
                            
                            <?php foreach ($comments as $comment) { ?>
                                <p> <?= $comment->getUser(); ?> said <?= $comment->getComment() ?> </p>
                            <?php } ?>    
                        </div>
                    </div>
                    <?php } ?>    <!-- end the php loop -->
                    
                </div>
            </div> <!-- end of row maincontent-->
        </div> <!-- end of container -->
        
        
        
    </body>
</html>