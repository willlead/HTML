<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8" />
        <title>My Recipe - modify member</title>
        <meta name="viewport" content="width=device-width; initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/sub.css">
        <style>
            div#context table{
                border-top:3px solid darkblue;
                border-bottom:3px solid darkblue;
                border-collapse:collapse;
                width:80%;
                margin:auto;
            }
            div#context table th{
                background-color:lightcyan;
                text-align:left;
                border-bottom:1px dotted darkblue;
                border-right:1px solid darkblue;
                padding:10px;
            }
            div#context table td{
                border-bottom:1px dotted darkblue;
                padding:10px;
            }
            div#context table button{
                background-color:darkblue;
                padding:5px;
                color:white;
                font-weight:bold;
            }
            .red{
                color:red;
            }
        </style>
        <script>   

        function check_input(){          

            if(!document.member_form.pass.value) {
                alert("비밀번호를 입력하세요");
                document.meber_form.pass.focus();
                return ;
            } 
            

            if(!document.member_form.check_pass.value) {
                alert("비밀번호 확인을 입력하세요.");
                document.meber_form.check_pass.focus();
                return ;
            }                

            if(!document.member_form.birth.value) {
                alert("생년월일 입력하세요.");
                document.member_form.check_pass.focus();
                return ;
            } 
         

            if(document.member_form.check_pass.value != document.member_form.pass.value) {
                alert("비밀번호가 맞지 않습니다.");
                document.member_form.pass.focus();
                document.member_form.pass.select();
                return;
            }

            document.member_form.submit();

        }
        </script>
    </head>
    <body>
        <header>
            <?php include 'common/header.php';?>
        </header>
        <div id="contetns">
            
            <section>             
                <div id="context">
                    <form name="member_form" action ="m04_05_update.php" method="post">
                        <h1 style="text-align:center">회원정보수정</h1>
                        <p style="text-align:center">
                            <span class="red">*</span> 표시 항목은 필수 입력 항목 입니다.
                        </p>
<?php
if(!isset($_SESSION['id'])) {
?>
<script>    
    alert("회원정보가 없습니다.");
    location.href="login.php";
</script>
<?php
exit();
} 
$id = $_SESSION['id'];

//DB Connection
include "common/dbconn.php";
$sql = "select id, name, grade, sex, email, birth from member where id = '".$id."'";

//db 전송
$result = $conn->query($sql);
if($result->num_rows == 1) {
    $row = $result->fetch_assoc();
?>
                        <table>
                            <tr> 
                                <th>아이디</th>
                                <td>
                                    <?php echo $row['id'] ?>
                                    <input type="hidden" name="id" value="<?php echo $row['id']?>">                                    
                                </td>
                            </tr>
                            <tr> 
                                <th><span class="red">*</span>비밀번호</th>
                                <td>
                                    <input type="password" name="pass" size="20">
                                </td>
                            </tr>
                            <tr> 
                                <th><span class="red">*</span>비밀번호확인</th>
                                <td>
                                    <input type="password" name="check_pass" size="20">
                                </td>
                            </tr>
                            <tr>
                                <th></span>성명</th> 
                                <td>
                                    <input type="text" name="name" size="20" value="<?php echo $row['name']?>">
                                </td> 
                            </tr>
                            <tr> 
                                <th><span class="red">*</span>생년월일</th>
                                <td>
                                    <input type="date" name="birth" value="<?php echo $row['birth']?>"> 
                                    입력 예:1987-12-03
                                </td>
                            </tr>
                            <tr>
                                <th>성별</th>
                                <td>
<?php
if($row['sex']) {
?>                                
                                    <input type="radio" name="sex" value="true" checked> 남자 
                                    <input type="radio" name="sex" value="false"> 여자 
<?php
} else {
?>
                                    <input type="radio" name="sex" value="true" > 남자
                                    <input type="radio" name="sex" value="false" checked>여자 
<?php
}
?>
                                </td> 
                            </tr>
                            <tr>
                                <th>이메일</th> 
                                <td>
                                    <input type="email" name="email" value="<?php echo $row['email']?>">
                                </td> 
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align:center">
                                    <button type="button" onclick="check_input()">수정 완료</button>
                                    <button type="reset">다시쓰기</button>
                                </td>
                            </tr>
                        </table>
                    </form>
<?php 
} else {
    echo "일치하는 정보가 없습니다.";
}
?>
                </div>
            </section>
        </div>
        <footer>
            <?php include 'common/footer.php'; ?>
        </footer>
        
    </body>
</html>