<?php
    // session_start();
    unset($_SESSION["userid"]);
    unset($_SESSION["username"]);
    unset($_SESSION["userdept"]);
    unset($_SESSION["usertel"]);
    unset($_SESSION["userkor"]);
    unset($_SESSION["usereng"]);
    unset($_SESSION["usermath"]);
    
    echo("
    <script>
        alert('로그아웃 되었습니다.');
        location = 'index.html';
    </script>
    ");
?>
