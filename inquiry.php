<!-- <?php
    session_start();
    $con = mysqli_connect("localhost","root", "wjsansrk", "students");



    if ( $_SESSION['login'] =="true") {
        echo " {$_SESSION['id']}님은 로그-인 되셨습니다.<br> " ;
        echo " {$_SESSION['id']}님의 시험성적은 다음과 같습니다.<br> " ;
        echo "<hr>" ;
        echo " 영어 : ".$_SESSION['eng']." <br>";
        echo " 수학 : ".$_SESSION['math']." <br>";
        $total = $_SESSION['eng']+$_SESSION['math'];
        $avg = $total / 3;
        echo " 총점 : ".$total." <br>";
        echo " 평균 : ".$avg." <br>";
        echo "<hr>" ;
        echo "<a href='logout.php'> <input type='button' value='로그-아웃' > </a> " ;
    }
    else echo "<script>
            alert('먼저 로그-인을 해야 합니다!');
            location = 'index.html';
        </script> ";
?> -->

<?php

    // if( isset($_SESSION["userid"])) $userid = $_SESSION["userid"];

    $id = $_GET["userid"];
    $name = $_POST["username"];
    $kor = $_POST["userkor"];

    $con = mysqli_connect("localhost","root", "wjsansrk", "students");
    $sql = "select * from subject where id ='$id'";
    mysqli_query($con, $sql);

    mysqli_close($con);
  
     echo " {$_SESSION['username']}님의 성적조회" ;
     echo "<a href='login.php'> <input type='button' value='이전페이지로' > </a> " ;
     echo "<hr>" ;

     echo " 국어 : ".$_SESSION['userkor']." <br>";
     echo " 영어 : ".$_SESSION['usereng']." <br>";
     echo " 수학 : ".$_SESSION['usermath']." <br>";
     echo " 총점 : ".$total." <br>";
     $total = $_SESSION['eng']+$_SESSION['math']+$_SESSION['kor'];
     echo " 평균 : ".$avg." <br>";
     $avg =$total/3;
     echo " 석차 : ".$_SESSION['userrang']." <br>";
     echo "<hr>" ;
?>