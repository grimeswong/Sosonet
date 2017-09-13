<?php

/*
 * Purpose: This file is the functions of checking input validation
 * Parameter: String of input
 * Return: String of error message
 *
 */
 
 
    /* Check the Form fields input is empty or not */ 
    /* And check the input field whether is over range
    /* Return: error message */
    
    function checkPostForm($name, $title, $message) {
        $error = null;
        if(empty($name) || empty($title) || empty($message))
        {
            $error = $error . "Please fill the empty field(s)\n";
        }
        if(strlen($name)>50) 
        {
            $error = $error . "Please type in less than 50 characters in name field \n";
        }
        if(strlen($title)>50) 
        {
            $error = $error . "Please type in less than 50 characters in title field \n";
        }
        if(strlen($message)>150) 
        {
            $error = $error . "Please type in less than 150 characters in message field \n";
        }
        return $error;
    }

    /* Check the Form fields input is empty or not */ 
    /* And check the input field whether is over range
    /* Return: error message */
    function checkCommentForm($name, $message) {
        $error = null;
        if(empty($name) || empty($message))
        {
            $error = $error . "Please fill the empty field(s)\n";
        }
        if(strlen($name)>50) 
        {
            $error = $error . "Please type in less than 50 characters in name field \n";
        }
        if(strlen($message)>150) 
        {
            $error = $error . "Please type in less than 150 characters in message field \n";
        }
        return $error;
    }
    

?>