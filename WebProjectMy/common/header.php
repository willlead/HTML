<?php
header("Content-Type: text/html; charset=utf-8");
session_start();
?>
<div id="title">
<h1><a href="index.php">마이 레시피</a></h1>
<div id ="member">
<?php
if(!isset($_SESSION['id'])) {
?>
<ul>	
	<li><a href="m04_01_login.php">로그인!~~</a></li>
	<li><a href="m04_01_signup.php">회원가입</a></li>
</ul>
<?php
} else {
?>
 <ul>
        <li><?php echo $_SESSION['name']?>님 환영합니다</li>
        <li><a href="m04_06_logout.php">로그아웃</a></li>
        <li><a href="m04_04_modify.php">회원정보수정</a></li>
    </ul>
<?php
}
?>
</div>
<div>
	<input type="search">
	<input type="button" value="검색" />
</div>

</div>
<div class="top">
    <div id="main_pic">
    <img src="images/main_title.PNG" alt="메인이미지">
    </div>
    <nav id="top_menu">
    	<ul>
    		<li><a href="index.php">핫 레시피</a></li>
    		<li><a href="m03_01_board.php">게시판</a></li>
    	</ul>
    </nav>
</div>