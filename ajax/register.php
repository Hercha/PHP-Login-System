<?php

    //Allow the config
    define('__CONFIG__', true);    
        
    //Require the config
    require_once "../inc/config.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Always return JSON format
            header('Content-Type: application/json');

            $return = [];

            $email = Filter::String( $_POST['email'] );

            // Make sure the user does not exist.
            $findUser = $con->prepare("SELECT user_id FROM users WHERE email =  LOWER(:email) LIMIT 1");
            $findUser->bindParam(":email", $email, PDO::PARAM_STR);
            $findUser->execute();

            if($findUser->rowCount() == 1) {
                // User exist
            } else {
                // User does not exist, add them now
                // We can also check to see if they are able to log in.
                $return['error'] = "You already have an account";
            }

            // Make sure the user CAN be added AND is added.

            // Return the proper information to JavaScript to rdirect us.

            $return['redirect'] = 'createphpajaxlogin/php_login_course/dashboard.php';
            $return['name'] = "Hoho Taulion";

            echo json_encode($return, JSON_PRETTY_PRINT); exit;

    } else {
        // Die. Kill the script. Redirect the user. Do someting regardless.
        exit("Test");
    }
?>