<?php 

namespace wp;
use wp\Post;    /*** remainder: use '\' not '/' */
include_once('post.php');


class PostSeeder {
    public static function seed() { // static funciton (don't need to instantiate)
        $posts = []; // initialise empty array
        // $post[] = new (instantiate object and put it in the last element of array
        $posts[] = new Post('Tom', '../img/tom.png','1-Jul-2017', 'He left his toy on the way');
        $posts[] = new Post('Batman', '../img/batman.jpeg', '5-Jul-17', 'Beat it');
        $posts[] = new Post('Peter', '../img/peter.jpeg', '7-Jul-17', 'I believe I can fly');
        return $posts;
    }
}

?>