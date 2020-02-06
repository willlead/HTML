<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8" />
        <title>이젠아카데미컴퓨터학원-회원가입</title>
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
        function check_id(){
            // alert(document.member_form.id.value);
            window.open("check_id.php?id"+document.member_form.id.value, 
            "IDCheck","left=200, top=200, width=1200, height=600, scrollbars = no, resizeable=yes");
        }

        function check_input(){
            if(!document.member_form.id.value) {
                alert("아이디를 입력하세요");
                document.meber_form.id.focus();
                return ;
            } 

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

            if(!document.member_form.name.value) {
                alert("이름을 입력하세요.");
                document.member_form.check_pass.focus();
                return ;
            } 

            if(!document.member_form.birth.value) {
                alert("생년월일 입력하세요.");
                document.member_form.check_pass.focus();
                return ;
            } 

            if(!document.member_form.sex.value) {
                alert("성별 입력하세요.");
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
            <nav id="sub_menu">
                <?php include 'common/member_menu.php'; ?>
            </nav>
            <section>
                <div id="sub_banner">
                    <img src="images/member_banner.jpg">
                </div>
                <div id="navigation">
                    <p>회원관리 > 회원가입</p>
                </div>
                <div id="context">
                    <form name="member_form" action ="member_insert.php" method="post">
                        <p style="text-align:center">
                            <span class="red">*</span> 표시 항목은 필수 입력 항목 입니다.
                        </p>
                        <table>
                            <tr> 
                                <th><span class="red">*</span>아이디</th>
                                <td>
                                    <input type="text" name="id" size="20">
                                    <button type="button" onclick="check_id()">중복확인</button>
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
                                <th><span class="red">*</span>성명</th> 
                                <td>
                                    <input type="text" name="name" size="20">
                                </td> 
                            </tr>
                            <tr> 
                                <th><span class="red">*</span>생년월일</th>
                                <td>
                                    <input type="date" name="birth"> 입력예:1987-12-03
                                </td>
                            </tr>
                            <tr>
                                <th>성별</th>
                                <td>
                                    <input type="radio" name="sex" value="true">남자 
                                    <input type="radio" name="sex" value="false">여자 
                                </td> 
                            </tr>
                            <tr>
                                <th>이메일</th> 
                                <td>
                                    <input type="email" name="email" value="">
                                </td> 
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align:center">
                                    <button type="button" onclick="check_input()">회원가입</button>
                                    <button type="reset">다시쓰기</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </section>
        </div>
        <footer>
            <?php include 'common/footer.php'; ?>
        </footer>
        
    </body>
</html>