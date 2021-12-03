
<?php

    session_start();;
    $con = mysqli_connect("localhost","root", "wjsansrk", "students");

    $id =$_SESSION["userid"];
    // $kor =$_POST["kor"];
    // $eng=$_POST["eng"];
    // $math=$_POST["math"];

    $sql = "select * from subject where id ='$id'";
    $result = mysqli_query($con, $sql);

    $row =mysqli_fetch_array($result);
    $db_kor=$row["kor"];
    mysqli_close($con);

     

       $_SESSION["userid"] ;
       $_SESSION["userkor"]=$row["kor"];
       $_SESSION["usereng"]=$row["eng"];
       $_SESSION["usermath"]=$row["math"];
       $total = $_SESSION['usereng']+$_SESSION['usermath']+$_SESSION['userkor'];
       $avg =$total/3;

      echo " {$_SESSION['username']}님의 성적조회" ;
      echo "<a href='login.php'> <input type='button' value='이전페이지로' > </a> " ;
      echo "<hr>" ;
 
      echo " 국어 : ".$_SESSION['userkor']." <br>";
      echo " 영어 : ".$_SESSION['usereng']." <br>";
      echo " 수학 : ".$_SESSION['usermath']." <br>";
      echo " 총점 : ".$total." <br>";
      echo " 평균 : ".$avg." <br>";
      echo " 석차 : ".$allrank." <br>";
      echo "<hr>" ;

    
  
     
    

?>
