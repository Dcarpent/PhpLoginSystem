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
        $password = $_POST['password'];
       
        // make user does not exist
        $findUser = $con->prepare('SELECT user_id, password FROM users WHERE email = LOWER(:email) LIMIT 1');
        $findUser->bindParam(':email', $email, PDO::PARAM_STR);
        $findUser->execute();

        if($findUser->rowCount() > 0) {
            //user exists try and sign in

            $user = $findUser->fetch(PDO::FETCH_ASSOC);
            $user_id = (int) $user['user_id'];

            $hash = $user['password'];
            
            if (password_verify($password, $hash)) {
                // use is signed in 
                $_SESSION['user_id'] = $user_id;
                $return['redirect'] = 'http://localhost:8090/phploginsystem/dashboard.php';
                $return['is_logged_in'] = true;               
            }
            else {
                // invalid user
                $return['error'] = 'Invalid user email/password combo';
                $return['is_logged_in'] = false; 
            } 
        }
        else {

            // creat a new account
            $return['error'] = 'You do not have an accout. <a href="/' . $root . '/register.php">Create one now? </a>';
        }

        echo json_encode($return, JSON_PRETTY_PRINT);

    }
    else {

        // kill and redirect
        exit('Invalid URL'); 
    }




   