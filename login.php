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
    <title>Login</title>

    <base href="http://localhost:8090/phploginsystem/" />

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.24/dist/css/uikit.min.css" />

</head>

<body>

    <div class="uk-section uk-container">
        <div class="uk-grid-small uk-child-width-1-3@s uk-child-width-1-1" uk-grid="">
            <form class="uk-form-stacked js-login">
                
            <h2>Login</h2>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text">Email</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="email" required="required" placeholder="email@email.com">
                    </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text">Password</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="password" required="requried" placeholder="Your Password">
                    </div>
                </div>

                <div class="uk-margn uk-alert uk-alert-danger js-error" style="display:none;">
                </div>

                <div class="uk-margin">
                   <button class="uk-button uk-button-default" type="submit">Login</button>
                </div>

            </form>
        </div>
    </div>


    <?php require_once 'inc/footer.php'; ?>



</body>

</html>