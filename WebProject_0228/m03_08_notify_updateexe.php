<?php
header('Content-Type: text/html; charset=utf-8');

//JSON 객체 분리하기
$serial = $_POST["serial"];
$subject = $_POST["subject"];
$author = $_POST["author"];
$content = $_POST["content"];

//file Upload
$target_dir = "uploads/";
echo $target_dir;
$fileToUpload = basename($_FILES["fileToUpload"]["name"]);
$target_file = $target_dir . $fileToUpload;


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

//sql작성
$sql = "SELECT fileToUpload FROM notify WHERE serial = ".$serial;
echo $sql;
$result = $conn->query($sql);

$DBfile = "";
if ($result->num_rows == 1) {
    while($row = $result->fetch_assoc()) {
        $DBfile = $row['fileToUpload'];
    }
} else {
    echo "0 results";
}

// Check if file already exists
if($DBfile != $fileToUpload){
    while (file_exists($target_file)) {
        $fileToUpload = "e-".$fileToUpload;
        $target_file = $target_dir . $fileToUpload;
    }
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
}

//sql문 작성
$sql = "UPDATE notify ";
$sql .= "SET subject = '".$subject."', content = '".$content."', fileToUpload = '". $fileToUpload ."' ";
$sql .= "WHERE serial = ".$serial;

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
    alert("Error: "+ <?php echo $sql ?> +"\n"+ <?php echo $conn->error ?>);
    history.go(-1);
</script> 
<?php   
}

//db 접속 종료
$conn->close();
?>