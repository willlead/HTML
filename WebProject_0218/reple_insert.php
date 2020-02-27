<?php
header('Content-Type: text/html; charset=utf-8');
//JSON 객체 분리하기
$board_name = $_POST["board_name"];
$board_serial = $_POST["board_serial"];
$reple_author = $_POST["reple_author"];
$reple_content = $_POST["reple_content"];

//DB Connection
include "common/dbconn.php";

//sql문 작성
$sql = "INSERT INTO reple(board_name, board_serial, reple_author, reple_content) ";
$sql .= "VALUES('". $board_name ."', ". $board_serial. ", '". $reple_author ."','". $reple_content."')";

//db 전송
if ($conn->query($sql) === TRUE) {
?>
<script>
    alert("입력이 완료 되었습니다.");
    location.href="m03_06_board_contents.php?serial=" + <?php echo $board_serial ?>;
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