<?php
header("Content-Type: text/html; charset=utf-8");
//json 객체 분리
$id = $_POST["id"];
$pass= $_POST["pass"];
$name= $_POST["name"];
$birth= $_POST["birth"];
$sex= $_POST["sex"];
$email= $_POST["email"];

//DB Connection
include "common/dbconn.php";

$sql =  "update member ".
        "set pass='".$pass."', name = '".$name."',birth = '".$birth."', sex =".$sex.", email  = '".$email.
        "' where id='".$id."'";

 echo $sql;

//db 전송
if ($conn->query($sql) === TRUE) {
    ?>
    <script>
        alert("회원정보 수정이 되었습니다.");
        location.href="index.php";
    </script>
    <?php    
    } else {
    ?>
    <script>    
        alert("Error: "+ <?php $sql ?> +"\n"+ <?php $conn->error ?>);
        history.go(-1);
    </script> 
    <?php   
    }
    
    //db 접속 종료
    $conn->close();
?>