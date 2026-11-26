<?php
    // 1. Session
    session_start();  // Bắt đầu session
    $_SESSION['Name'] = 'user';
    echo 'Session Name: ' . $_SESSION['Name'];

    echo '<br>';

    // 2. Cookie
    $cookieName = "user";
    $cookieValue = "Kien";

    setcookie($cookieName, $cookieValue, time() + 86400, "/");
    if (isset($_COOKIE[$cookieName])) {
        // 
        echo 'Cookie đã tồn tại';
    } else {
        // Trong thời gian đầu chạy, giá trị mới được khởi tạo
        echo 'Cookie chưa được thiết lập';
    }
    
?>