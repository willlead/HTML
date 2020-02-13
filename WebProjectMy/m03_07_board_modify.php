<?php
header("Content-Type: text/html; charset=utf-8");
//JSON 객체 분리하기
$serial = $_POST["serial"];
$subject = $_POST["subject"];
$author = $_POST["author"];
$content = $_POST["content"];

if(!$subject){
?>
<script>    
    alert("제목이 입력되지 않았습니다.");
    history.go(-1);
</script>
<?php
exit;    
}

if(!$content){
?>
    <script>    
        alert("내용이 입력되지 않았습니다.");
        history.go(-1);
    </script>
<?php
exit;    
}

//DB Connection
include "common/dbconn.php";

//sql문 작성
$sql = "UPDATE notify SET subject = '".$subject."', content = '".$content."' WHERE serial = ".$serial;

//db 전송
if ($conn->query($sql) === TRUE) {
?>
<script>
    alert("수정이 완료 되었습니다.");
    location.href="m03_04_board_contents.php?serial=<?php echo $serial   ?>";
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