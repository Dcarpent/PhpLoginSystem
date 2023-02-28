<?php
    // all the 
    define('__CONFIG__', true);

    // require the config
    require_once "inc/config.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

    <base href="http://localhost:8090/phploginsystem/" />

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.24/dist/css/uikit.min.css" />

</head>

<body>

    <div class="uk-section uk-container">
        <?php echo 'Hello World! Today is:';
            echo date('Y m d'); ?>


        <p class="uk-margin-top">
            <a href='login.php' class="uk-button uk-button-default">Login</a>
            <a href='register.php' class="uk-button uk-button-default">Register</a>
        </p>
    </div>

    <?php require_once 'inc/footer.php'; ?>

</body>

</html>