<?php

/**
 * OOPs in php
 */
class webxspark
{
    public function checkLoginStatus()
    {
        session_start();
        if (
            !isset($_SESSION['uname']) &&
            !isset($_SESSION['email']) &&
            !isset($_SESSION['token'])
        ) {
            return 0;
        } else {
            return 1;
        }
    }
    public function logout(){
        session_start(); //getting current session in handle
        session_destroy(); //destroying all instances
        return true;
    }
}
