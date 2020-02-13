<?php
header("Content-Type: text/html; charset=utf-8");
    $id = $_GET["id"];
    echo $id;
    //DB Connection
    include "common/dbconn.php";

    //sql문 작성
    $sql = "SELECT id FROM member where id = '".$id."'";

    //쿼리 전송 및 결과 받기
    $result = $conn->query($sql);
    $num = $result->num_rows;
    // echo $num."<br>";
    if($num > 0) {
        echo "<br>아이디가 중복됩니다.<br>";
        echo "다른 아이디를 사용하세요";
    } else {
        echo "사용가능한 아이디입니다.<br>";
    }

    //db 접속 종료
    $conn->close();

?>