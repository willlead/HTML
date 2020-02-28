<?php
    header('Content-Type: text/html; charset=utf-8');
    $id = $_GET["id"];

    //DB Connection
    include "common/dbconn.php";

    //sql문 작성
    $sql = "SELECT id FROM member WHERE id='".$id."'";
    
    //쿼리 전송 및 결과 받기
    $result = $conn->query($sql);
    $num_record = $result->num_rows;
    
    if($num_record){
        echo "아이디가 중복 됩니다.<br>";
        echo "다른 아이디를 사용 하세요";
    } else {
        echo "사용가능한 아이디 입니다.";
    }

    //db 접속 종료
    $conn->close();
?>