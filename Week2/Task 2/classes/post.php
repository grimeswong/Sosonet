<?php
    namespace wp;
    
    
    /*** This class "Post" included a user name, image, date of post, message and comments that show up on the webpage ***/
    class Post {
        
        protected $user;
        protected $img;
        protected $date;
        protected $message;
        protected $comments;
        
        // Constructor
        function __construct($user, $img, $date, $message) {
            $this->user = $user;
            $this->img = $img;
            $this->date = $date;
            $this->message = $message;
            $this->comments = array();
        }
        
        //Accessor 
        //Get this object's name 
        function getUser() {
            return $this->user;
        }
        
        //Getter: 
        //Get this object's image
        function getImg() {
            return $this->img;
        }
        
        //Getter: 
        //Get this object's date
        function getDate() {
            return $this->date;
        }
        
        //Getter: 
        //Get this object's message
        function getMessage() {
            return $this->message;
        }
        
        //Accessor:
        //Get this object's comment
        function getComments() {
            return $this->comments;
        }
        //Mutator:
        //Set this object's comment
        function addComment($user, $comment) {
            $this->comments[] = array('user' => $user, 'comment' => $comment);  //associate array
        }
        
        
        
    }
?>
