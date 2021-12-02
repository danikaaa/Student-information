<?php
    // session_start();
    // extract(array_merge($_GET,$_POST));

    $id =$_POST["id"];
    $pw =$_POST["pw"];
    $con = mysqli_connect("localhost","root", "wjsansrk", "students");


    $sql = "select * from info where id ='$id'";
    $result = mysqli_query($con, $sql);

    $num_match = mysqli_num_rows($result);

    if(!$num_match){
      echo("
      <script>
      window.alert('등록되지 않은 아이디입니다.')
      history.go(-1)
      </script>
      ");
    }
    else{
      $row =mysqli_fetch_array($result);
      $db_pw = $row["pw"];
      mysqli_close($con);

      if ($pw != $db_pw){
        echo("
        <script>
        alert('비밀번호가 틀립니다.')
        histroy.go(-1)
        </script>
        ");
        exit;
      }
      else{
        session_start();
        $_SESSION["userid"] = $row["id"];
        $_SESSION["username"] = $row["name"];
        $_SESSION["userdept"] = $row["dept"];
        $_SESSION["usertel"] = $row["tel"];
 
        echo " {$_SESSION['username']}님&nbsp;&nbsp;" ;
        echo "<a href='logout.php'> <input type='button' value='로그아웃' > </a> " ;
        echo "<a href='insert.php'> <input type='button' value='성적입력' > </a> " ;
        echo "<a href='inquiry.php'> <input type='button' value='성적조회' > </a> " ;
        echo "<hr>" ;

        echo " {$_SESSION['username']}님의 정보<br><br> " ;
        echo " 이름 : ".$_SESSION['username']." <br>";
        echo " 학번 : ".$_SESSION['userid']." <br>";
        echo " 학과: ".$_SESSION['userdept']." <br>";
        echo " 전화번호 : ".$_SESSION['usertel']." <br>";
        echo "<hr>" ;
        


      }

    }

?>