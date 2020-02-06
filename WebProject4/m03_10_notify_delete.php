<?php
header("Content-Type: text/html; charset=utf-8");
//JSON 객체 분리하기
$serial = $_GET["serial"];

//DB Connection
include "common/dbconn.php";

//sql문 작성
$sql = "DELETE FROM notify WHERE serial = ".$serial;

//db 전송
if ($conn->query($sql) === TRUE) {
?>
<script>
    alert("삭제가 완료 되었습니다.");
    location.href="m03_01_notify.php";
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