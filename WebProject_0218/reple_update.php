<?php
header('Content-Type: text/html; charset=utf-8');

//JSON 객체 분리하기
$reple_content = $_POST["reple_up_cont"];
$reple_num = $_POST["reple_num"];
$serial = $_POST['serial'];

//DB Connection
include "common/dbconn.php";

//sql문 작성
$sql = "UPDATE reple";
$sql .= " SET reple_content = '".$reple_content."', reple_date=CURRENT_TIMESTAMP()";
$sql .= " WHERE reple_num = ".$reple_num;

//db 전송
if ($conn->query($sql) === TRUE) {
?>
<script>
    alert("수정이 완료 되었습니다.");
    location.href="m03_06_board_contents.php?serial=<?php echo $serial   ?>";
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