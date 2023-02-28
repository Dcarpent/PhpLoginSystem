<?php
    // all the 
    define('__CONFIG__', true);

    // get site roote
   $root = dirname(__DIR__);
   

    // require the config
    require_once $root . '\inc\config.php';
 
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        //return json format
        header("Content-Type: application/json");

        $return =  [];


        $email = Filter::String($_POST['email']);
       
        // make user does not exist
        $findUser = $con->prepare('SELECT user_id FROM users WHERE email = LOWER(:email) LIMIT 1');
        $findUser->bindParam(':email', $email, PDO::PARAM_STR);
        $findUser->execute();

        if($findUser->rowCount() > 0) {
            //user exists
            // check to see if they are able to long in 
            $return['error'] = 'You already have an account';
            $return['is_logged_in'] = false;
        }
        else {

            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            
            // user does not exist; add now
            $addUser = $con->prepare('INSERT INTO users (email, password) VALUES (LOWER(:email), :password)');
            $addUser->bindParam(':email', $email, PDO::PARAM_STR);
            $addUser->bindParam(':password', $password, PDO::PARAM_STR);
            $addUser->execute();

            $user_id = $con->lastInsertId();
            $_SESSION['user_id'] = (int) $user_id;
            $return['redirect'] = $root . '/dashboard.php?message=welcome';
            $return['is_logged_in'] = true;
        }

        // ensure use can be added


        // return proper information

       

        echo json_encode($return, JSON_PRETTY_PRINT);

    }
    else {

        // kill and redirect

        exit('Invalid URL'); 
    }




   