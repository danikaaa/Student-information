<?php
session_start();

$con = mysqli_connect("localhost","root", "wjsansrk", "students");

$id=$_SESSION['userid'];
// $name=$_POST['name'];
$kor=$_POST['kor'];
$eng=$_POST['eng'];
$math=$_POST['math'];
// $total=$_POST['total'];
// $avg=$_POST['avg'];


$sql = "insert into subject (id, kor, eng, math)";
$sql .=  "values ('$id', '$kor', '$eng', '$math')";
$result = mysqli_query($con, $sql);

if($result){
    echo "<script>
    alert('성적입력이 완료되었습니다..');
    </script>";

    $id=$_SESSION["userid"];
    $kor=$_SESSION["userkor"];
    $eng=$_SESSION["usereng"];
    $math=$_SESSION["usermath"];

    echo " {$_SESSION['username']}님의 성적조회" ;
      echo "<a href='login.php'> <input type='button' value='이전페이지로' > </a> " ;
      echo "<hr>" ;
 
      echo " 국어 : ".$_SESSION['userkor']." <br>";
      echo " 영어 : ".$_SESSION['usereng']." <br>";
      echo " 수학 : ".$_SESSION['usermath']." <br>";
      echo " 총점 : ".$total." <br>";
      $total = $_SESSION['usereng']+$_SESSION['usermath']+$_SESSION['userkor'];
      echo " 평균 : ".$avg." <br>";
      $avg =$total/3;
      echo "<hr>" ;
}

else{
    echo "<script> 
    alert('성적입력에 실패하였습니다.');
    history.go(-1)
    </script>";
}

mysqli_close($con);
?>
