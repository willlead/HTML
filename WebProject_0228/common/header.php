<?PHP
session_start();
?>
<h1><a href="index.php">이젠아카데미컴퓨터학원</a></h1>
<div id="member">
<?php
if(!isset($_SESSION['id'])){
?>
    <ul>
        <li><a href="login.php">로그인</a></li>
        <li><a href="member_signup.php">회원가입</a></li>
    </ul>
<?php
} else {
?>
    <ul>
        <li><?php echo $_SESSION['name'] ?>님 환영합니다.</li>
        <li><a href="logout.php">로그아웃</a></li>
        <li><a href="member_modify.php">회원정보수정</a></li>
    </ul>
<?php
}
?>    
</div>
<nav id="top_menu">
    <ul>
        <li><a href="m01_01_hello.php">이젠아카데미 소개</a></li>
        <li><a href="m02_01_course.php">교육과정 소개</a></li>
        <li><a href="m03_01_notify.php">커뮤니티</a></li>
    </ul>
</nav>