<?php
session_start();
// $_SESSION["userid"] = $row["id"];
// $_SESSION["username"] = $row["name"];
// $_SESSION["userkor"] = $row["kor"];
// $_SESSION["userneng"] = $row["eng"];
// $_SESSION["usermath"] = $row["math"];
// $_SESSION["usertotal"] = $row["total"];
// $_SESSION["useravg"] = $row["avg"];

$userid = $_SESSION["userid"];
$username = $_SESSION["username"];
// $userkor = $_SESSION["userkor"];
// $usereng = $_SESSION["usereng"];
// $usermath = $_SESSION["usermath"];
// $usertotal = $_SESSION["usertotal"];
// $useravg = $_SESSION["useravg"];

$con = mysqli_connect("localhost","root", "wjsansrk", "students");

$id=$_POST['id'];
$kor=$_POST['kor'];
$eng=$_POST['eng'];
$math=$_POST['math'];
$total=$_POST['total'];
$avg=$_POST['avg'];

$sql = "insert into subject (id, kor, eng, math)";
$sql .=  "values ('$id', '$kor', '$eng', '$math')";
$result = mysqli_query($con, $sql);


if($result){
    echo "<script>
    alert('성적입력이 완료되었습니다..');
    location.replace('./login.php');
    </script>";
}

else{
    echo "<script> 
    alert('성적입력에 실패하였습니다.');
    </script>";
}

mysqli_close($con);
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP와 MySQL연동 실습</title>
    </head>
    <body>
        <form>&nbsp;&nbsp;<?=$username?>&nbsp;&nbsp;성적입력화면 &nbsp;&nbsp;&nbsp;&nbsp;
            </form><hr>
        <form method="post" action="insert.php"><pre>
            국  어 : <input type="text" name="kor" size =10><br>
            영  어 : <input type="text" name ="eng" size =10><br>
            수  학 : <input type="text" name ="math" size =10><br> <hr>
           <input type ="submit" value = "입력"> &nbsp;<input type ="reset" value = "다시쓰기">
    </body>
</html>