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

		#recipe ul li {
			/* width: auto; */
			display: inline-block;
			border: 1px dotted gray;
		}

		#recipe_pic {
			display: block;
			margin: auto;
			/* width: 50%; */
		}

		#recipe_title {
			text-align: center;
		}

		#recipe_des {
			color: #cccccc;
			font-size: 16px;
			text-align: center;
		}


		#recipe_info div img,
		#recipe_info div p {
			display: inline;
		}

		#recipe_info {
			text-align: center;
		}

		#time,
		#like {
			display: inline-block;
			padding-left: 20px;
			text-align: left;
			width: 150px;
		}

	</style>
	<script>
		$(document).ready(function(){
			var index;
			$("#board_rank a").click(function(){
				index = $(this).index();
				
			});
		});
	</script>
</head>

<body>
	<header>
	<?php include 'common/header.php';?>
	</header>
	<div id="contetns">
	<?php
//DB Connection
include "common/dbconn.php";

//sql문 작성
$sql = "select serial, subject, author, end_date, view_cnt FROM notify ORDER BY serial DESC";

//쿼리 전송 및 결과 받기
$result = $conn->query($sql);
?>
		<!-- <div id="recipe">
			<h1 id="contents_title">핫 레시피</h1>
			<ul>
				
			</ul>
		</div>		 -->
	</div>
	<footer>

	</footer>

</body>

</html>