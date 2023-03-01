<?php
    // all the 
    define('__CONFIG__', true);

    // require the config
    require_once "inc/config.php";

    echo URLROOT . "/login.php";
    
    forceLogin();

    $user_id = $_SESSION['user_id'];
  

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
        <h3>DASHBOARD</3>
        <p>You are signed in as user: <?php echo $_SESSION['user_id']; ?></p>
    </div>

    <?php require_once 'inc/footer.php'; ?>

</body>

</html>