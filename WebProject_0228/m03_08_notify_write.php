<?php
header('Content-Type: text/html; charset=utf-8');
//JSON 객체 분리하기
$subject = $_POST["subject"];
$author = $_POST["author"];
$content = "<pre>".$_POST["content"]."</pre>" ;

//file Upload
$target_dir = "uploads/";
$fileToUpload = basename($_FILES["fileToUpload"]["name"]);
$target_file = $target_dir . $fileToUpload;

// Check if file already exists
while (file_exists($target_file)) {
        $fileToUpload = "e-".$fileToUpload;
        $target_file = $target_dir . $fileToUpload;
}
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

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
$sql = "INSERT INTO notify(subject, author, content, fileToUpload) ";
$sql .= "VALUES('". $subject ."', '". $author. "', '". $content ."', '". $fileToUpload ."')";

//db 전송
if ($conn->query($sql) === TRUE) {
?>
<script>
    alert("입력이 완료 되었습니다.");
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