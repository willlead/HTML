<!DOCTYPE html>
<html lang="ko">
	<head>
		<meta charset="utf-8" />
		<title>My Recipe - board</title>
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
			<section>
				<form action="m03_03_board_insert.php" method="post">
					<div id="board_subject">
						제목 <input type="text" size="60" name="subject">
					</div>
					<div id="board_data">
						<div class="board_left">
							<span class="field_name">작성자 </span> <span class="field_value">관리자</span>
							<input type="hidden" name="author" value="관리자">
						</div>
					</div>
					<div id="board_body">
						<textarea rows="50" cols="120" name="content"></textarea>
					</div>
					<div id="board_bottom">
						<div class="board_right">
							<button type="submit">전송</button>
							<button type="reset">다시쓰기</button>
						</div>
					</div>
				</form>
			</section>
		</div>
		<footer>
			<?php include 'common/footer.php'; ?>
		</footer>
		
	</body>
</html>
