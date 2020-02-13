<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="utf-8" />
	<title>My Recipe - main</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<style>
		* {
			text-align: center;
		}

		table{
			margin:auto;
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
	<section>       
                <div id="context">
                    <h1 style="text-align:center">로그인</h1>                    
                    <form name="member_form" action ="m04_02_login.php" method="post">                        
                        <table>
                            <tr> 
                                <!-- <th>아이디</th> -->
                                <td>
                                    <input type="text" name="id" size="20" style ="width:175px; height:30px" placeholder = "아이디"/>                                    
                                </td>
                                
                            </tr>
                            <tr> 
                                <!-- <th>비밀번호</th> -->
                                <td>
                                    <input type="password" name="pass" size="20" style ="width:175px; height:30px" placeholder = "비밀번호"/>
                                </td>
                            </tr>
							<tr>
							<td>
                                    <!-- <a href="member_login.php"> -->
									<button type="button"																	
									style ="width:175px; height:30px"
                                        onclick="login()"> 로그인 </button>
                                    <!-- </a> -->
                                </td>
							</tr>
                            <tr>
                                <td colspan="3" style="text-align:center">
                                    아직 회원이 아니십니까?
                                    <a href = "m04_01_signup.php">
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

	</footer>

</body>

</html>