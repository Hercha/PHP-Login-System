<?php

    //Allow the config
    define('__CONFIG__', true);    
        
    //Require the config
    require_once "../inc/config.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Always return JSON format
            header('Content-Type: application/json');

            $return = [];

            // Make sure the user does not exist.

            // Make sure the user CAN be added AND is added.

            // Return the proper information to JavaScript to rdirect us.

            $return['redirect'] = 'createphpajaxlogin/php_login_course/index.php?this-was-a-redirect';

            echo json_encode($return, JSON_PRETTY_PRINT); exit;

    } else {
        // Die. Kill the script. Redirect the user. Do someting regardless.
        exit("Test");
    }
?>