<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>이젠아카데미컴퓨터학원-공지사항</title>
		<meta name="viewport" content="width=device-width; initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/sub.css">
		<style>
			div#board_subject, div#board_data, div#board_body{
				border-bottom:1px solid #00008B;
			}
			div#board_subject{
				padding:10px;
			}
			div#board_data{
				height:30px;
			}
			div.board_left{
				width:200px;
				float:left;
			}
			div.board_right{
				width: 300px;
				float:right;
				text-align:right;
			}
			span.field_name{
				font-weight:bold;
			}
			span.field_value{
				color:red;
				font-weight:bold;
			}
			div#board_body{
				clear:both;
				margin-top:20px;
			}
			div#board_bottom button{
				font-size: 12pt;
				padding:5px 10px;
				font-weight:bold;
				color:white;
				background-color:green;
			}
		</style>
	</head>
	<body>
		<header>
			<?php include 'common/header.php';?>
		</header>
		<div id="contetns">
			<nav id="sub_menu">
				<?php include 'common/menu03.php'; ?>
			</nav>
			<section>
				<div id="sub_banner">
					<img src="images/sub_banner03.jpg">
				</div>
				<div id="navigation">
					<p>커뮤니티 > 공지사항 > 내용보기</p>
				</div>
				<form action="m03_08_notify_updateexe.php" method="post">
<?php
//JSON 객체 분리하기
$serial = $_GET["serial"];

//DB Connection
include "common/dbconn.php";

//sql문 작성
$sql = "SELECT * FROM notify WHERE serial = ".$serial;

//db 전송
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
?>
					<input type="hidden" name="serial" value="<?php echo $row['serial'] ?>">
					<div id="board_subject">
						제목 <input type="text" size="60" name="subject" 
							value="<?php echo $row['subject'] ?>">
					</div>
					<div id="board_data">
						<div class="board_left">
							<span class="field_name">작성자 </span> <span class="field_value">관리자</span>
							<input type="hidden" name="author" value="<?php echo $row['author'] ?>">
						</div>
					</div>
					<div id="board_body">
						<textarea rows="50" cols="120" name="content">
							<?php echo $row['content'] ?>
						</textarea>
					</div>
					<div id="board_bottom">
						<div class="board_right">
							<button type="submit">수정</button>
							<button type="button" onclick="history.go(-1)">취소</button>
						</div>
					</div>
<?php        
    }
} else {
    echo "0 results";
}
$conn->close();
?>					
				</form>
			</section>
		</div>
		<footer>
			<?php include 'common/footer.php'; ?>
		</footer>
		
	</body>
</html>
