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
			/* background: orange; */
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
			var $index;
			$("#board_rank a").click(function(){
				$index = $(this).index();				
			});
		});
	</script>
</head>

<body>
	<header>
	<?php include 'common/header.php';?>
	</header>
	<div id="contetns">9
	<?php
//DB Connection
include "common/dbconn.php";

//sql문 작성
$sql = "select serial, subject, content, author, view_cnt FROM notify ORDER BY serial DESC";

//쿼리 전송 및 결과 받기
$result = $conn->query($sql);
?>
		<div id="recipe">
			<h1 id="contents_title">핫 레시피</h1>			
			<ul>
			<?php		
				while($row = $result->fetch_assoc()) {					
					echo "<li>";
					echo "<img id='recipe_pic' src='images/recipe_1.png'>";
					echo "<h1 id='recipe_title'>".$row['subject']."</h1>";
					echo "<h2 id='recipe_des'>".$row['content']."</h2>";
					echo "<div id='recipe_info'>";
					echo "<div id='time'>";
					echo "		<img src='images/recipe_time.png'>";
					echo "		<p>20분</p>";
					echo "		<!-- <h3>20분</h3> -->";
					echo "	</div>";
					echo "	<div id='like'>";
					echo "		<img src='images/recipe_like.png'>";
					echo "		<p>802명</p>";
					echo "		<!-- <h3>802명</h3> -->";
					echo "	</div>";
					echo "	</div>";
					echo "</li>";			
			}
			?>				
			</ul>	
		</div>		
	</div>
	<footer>

	</footer>

</body>

</html>