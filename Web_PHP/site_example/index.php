<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>이젠아카데미컴퓨터학원-메인</title>
		<meta name="viewport" content="width=device-width; initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<style>
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
		</style>
	</head>
	<body>
		<header>
		<?php include 'common/header.html'; ?>
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
					<p>news</p>
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
		<?php include 'common/footer.html'; ?>
		</footer>
		
	</body>
</html>
