<?php
error_reporting(0);
 $_SESSION = array();
    if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
    unset($_SESSION);
    session_destroy();
    session_write_close();
    header('Location: index.php');
    

?>