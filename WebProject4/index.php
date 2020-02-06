<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>이젠아카데미컴퓨터학원-메인</title>
		<meta name="viewport" content="width=device-width; initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<style>
			table {
				width:100%;
				table-layout:fixed;
			}
			table caption{
				background-color:#00008B;
				color:white;
			}
			table, td{
				border-collapse: collapse;
			}
			table td{
				padding:3px;
				border-bottom: 1px dotted #00008B;
			}
			table a{
				text-decoration:none;
				color:#000000;
			}
			td.course{
				color:red;
				font-weight:bold;
			}
			table tr td{
				text-overflow:ellipsis;
				overflow:hidden;
				white-space:nowrap;
			}
			table tr td:nth-child(1){
				width:30%;
			}
		</style>
	</head>
	<body>
		<header>
			<?php include 'common/header.php';?>
		</header>
		<div id="contetns">
			<div id="main_pic">
				<img src="images/main_image.jpg">
			</div>	
			<div id="news">
				<section id="new_course">
					<table>
						<caption>
							<h3>신규 개설 과정</h3>
						</caption>
						<tr>
							<td class="course">국가기간</td>
							<td><a href="m02_04_course_detail.html">자바기반 응용소프트웨어 개발자 양성과정</a></td>
						</tr>
						<tr>
							<td class="course">내일배움</td>
							<td><a href="m02_04_course_detail.html">ITQ자격증 취득과정</a></td>
						</tr>
						<tr>
							<td class="course">직장인</td>
							<td><a href="m02_04_course_detail.html">자바기반 프로그래밍 개발자 과정</a></td>
						</tr>
						<tr>
							<td class="course">국가기간</td>
							<td><a href="m02_04_course_detail.html">자바기반 응용소프트웨어 개발자 양성과정</a></td>
						</tr>
						<tr>
							<td class="course">내일배움</td>
							<td><a href="m02_04_course_detail.html">ITQ자격증 취득과정</a></td>
						</tr>
					</table>
				</section>
				<section id="new_info">
					<!-- <p>news</p> -->
					<table>
						<caption>
							<h3>공지사항</h3>
						</caption>
<?php
//DB Connection
include "common/dbconn.php";

//sql문 작성
$sql = "SELECT serial, subject, end_date FROM notify ORDER BY serial DESC limit 5";

//쿼리 전송 및 결과 받기
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {	
?>
						<tr>
							<td class="course"><?php echo $row['end_date']?></td>
							<td><a href="m03_06_contents.php?serial=<?php echo $row['serial']?>"><?php echo $row['subject']?></a></td>
						</tr>
<?php
	}
} else {
	echo "공지사항이 없습니다.";
}
  
    //db 접속 종료
    $conn->close();

?>					
					</table>
				</section>
				<article>
					<div id="login">
						<p>log-in</p>
					</div>
					<div id="short_cut">
						<p>바로가기</p>
					</div>
				</article>
			</div>
		</div>
		<footer>
			<?php include 'common/footer.php'; ?>
		</footer>
		
	</body>
</html>
