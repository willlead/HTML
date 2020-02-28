<?php
header('Content-Type: text/html; charset=utf-8');
session_start();

//JSON 객체 분리
$id = $_POST['id'];
$pass = $_POST['pass'];

//DB Connection
include "common/dbconn.php";

//sql문 작성
$sql = "SELECT id, name, grade FROM member WHERE id = '".$id."' AND pass = '".$pass."'";

//db 전송
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $_SESSION['id'] = $row['id'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['grade'] = $row['grade'];
?>
<script>
    alert("<?php echo $row['name'] ?>님 환영합니다.");
    location.href="index.php";
</script>
<?php    
} else {
?>
<script>    
    alert("아이디 또는 비밀번호가 맞지 않습니다.\n 로그인 페이지로 이동 합니다.");
    history.go(-1);
</script> 
<?php   
}
    
//db 접속 종료
$conn->close();
?>