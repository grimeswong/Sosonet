<?php
    namespace wp;
    
    /*** This class used for store the comments that included the user's name and comments ***/
    class Comment {
        
        protected $user;
        protected $comment;
        
        // Constructor 
        function __construct($user,$comment) {
            $this->user = $user;
            $this->comment = $comment;
        }
        
        // Accessor
        // Get user's comments
        function getComment() {
            return $this->comment;
        }
        
        function getUser() {
            return $this->user;
        }
        
    }
?>