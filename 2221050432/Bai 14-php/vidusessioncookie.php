<?php
    //1.Session
    session_start(); //Bat dau session
    $_SESSION["Name"] = "user";
    echo "Session Name: ". $_SESSION["Name"];
    echo "<br>";

    //2.Cookie
    $cookieName = "user";
    $cookieValue = "Kien";
    setcookie($cookieName, $cookieValue, time() + 86400, "/");
    if(isset($_COOKIE[$cookieName])) {
        echo "Cookie da ton tai";

    } else{
        echo "Cookie chua duoc thiet lap";
    }

    
    

?>