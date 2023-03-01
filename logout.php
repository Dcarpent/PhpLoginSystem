<?php

    session_start();
    session_destroy();
    session_write_close();
    setcookie(session_name());
    session_regenerate_id(true);

    header("location: /phploginsystem/index.php");

?>