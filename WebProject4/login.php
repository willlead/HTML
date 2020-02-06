<!DOCTYPE html>
<html lang="en">
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

        function login(){
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
                    <p>회원관리 > 로그인</p>
                </div>                
                <div id="context">
                    <h1 style="text-align:center">로그인</h1>                    
                    <form name="member_form" action ="member_login.php" method="post">
                        <p style="text-align:center">
                            회원님의 아디와 비밀번호를 입력하세요
                        </p>
                        <table>
                            <tr> 
                                <th>아이디</th>
                                <td>
                                    <input type="text" name="id" size="20">                                    
                                </td>
                                <td rowspan = "2" >
                                    <!-- <a href="member_login.php"> -->
                                    <button type="button" style ="width:150px; height:100px"
                                        onclick="login()"> 로그인 </button>
                                    <!-- </a> -->
                                </td>
                            </tr>
                            <tr> 
                                <th>비밀번호</th>
                                <td>
                                    <input type="password" name="pass" size="20">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" style="text-align:center">
                                    아직 회원이 아니십니까?
                                    <a href = "member_signup.php">
                                        <button type="button">회원가입</button><br>
                                    </a><br>
                                    아이디와 비밀번호를 잊으셨습니까?
                                    <button type="button">아이디/비밀번호 찾기</button>
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