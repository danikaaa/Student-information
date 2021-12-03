
<?php

    session_start();;
    $con = mysqli_connect("localhost","root", "wjsansrk", "students");

    $id =$_SESSION["userid"];

    $sql = "select * from subject where id ='$id'";
    $result = mysqli_query($con, $sql);
    $row =mysqli_fetch_array($result);
    
  
    $sql = "select id rank() over (order by math desc rank from subject";
    $result = mysqli_query($con, $sql);
    mysqli_close($con);
     

       $_SESSION["userid"] ;
       $_SESSION["userkor"]=$row["kor"];
       $_SESSION["usereng"]=$row["eng"];
       $_SESSION["usermath"]=$row["math"];
       $_SESSION["usertotal"] = $row["total"];
       $avg =$_SESSION['usertotal']/3;
       $_SESSION["userrank"] = $row["rank"];

      echo " {$_SESSION['username']}님의 성적조회" ;
      echo "<a href='logout.php'> <input type='button' value='로그아웃' > </a> " ;
      echo "<hr>" ;
      echo " 국어 : ".$_SESSION['userkor']." <br>";
      echo " 영어 : ".$_SESSION['usereng']." <br>";
      echo " 수학 : ".$_SESSION['usermath']." <br>";
      echo " 총점 : ".$_SESSION['usertotal']." <br>";
      echo " 평균 : ".$avg." <br>";
      echo " 석차 : ".$_SESSION['userrank']." <br>";
      echo "<hr>" ;

    
  
     
    

?>
