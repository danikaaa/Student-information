<?php

$con = mysqli_connect("localhost","root", "wjsansrk", "students");

$id=$_POST['id'];
$pw=$_POST['pw'];
$name=$_POST['name'];
$dept=$_POST['dept'];
$tel=$_POST['tel'];

$sql = "insert into info (id, pw, name, dept, tel)";
$sql .=  "values ('$id', '$pw', '$name', '$dept', '$tel')";
$result = mysqli_query($con, $sql);

if($result){
    echo "<script>
    alert('가입이 완료되었습니다.');
    location.replace('./index.html');
    </script>";
}

else{
    echo "<script> 
    alert('가입에 실패하였습니다.');
    location.replace('./register.html');
    </script>";
}

mysqli_close($con);
?>