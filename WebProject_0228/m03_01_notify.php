<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>이젠아카데미컴퓨터학원-공지사항</title>
		<meta name="viewport" content="width=device-width; initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/sub.css">
		<style>
			
			div#board_total{
				width:200px;
				float:left;
			}
			div#board_search{
				width:300px;
				float:right;
			}
			div#board{
				clear:both;
			}
			div#board table, th, td{
				border-collapse:collapse;
			}
			div#board table{
				width: 100%;
				border-top:2px solid #00008B;
				border-bottom:2px solid #00008B;
				margin-top:50px;
			}
			div#board table tbody tr:hover{
				background-color:#CCCCCC;
			}
			div#board table th{
				padding:5px;
				border-bottom:1px solid #00008B;
			}
			div#board table td{
				text-align:center;
				padding: 5px;
				border-bottom:1px dotted #00008B;
			}
			
			div#board table td.board_subject{
				text-align:left;
			}
			div#board table td.board_subject a{
				text-decoration:none;
				color:#000000;
			}
			div#board_bottom{
				text-align:center;
			}
			div#board_bottom p#buttons{
				text-align:right;
			}
			div#board_bottom p#buttons button{
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
					<p>커뮤니티 > 공지사항</p>
				</div>
<?php
//JSON 객체 분리하기
if(isset($_GET["board_page"])){
	$board_page = $_GET["board_page"];
} else {
	$board_page = 1;
}

//DB Connection
include "common/dbconn.php";

//sql문(전체 레코드 수)
$sql = "SELECT COUNT(serial) AS total FROM notify";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    $total = $row["total"];
}

if($total%10 == 0){
	$total_pages = (int)($total/10);
} else {
	$total_pages = (int)($total/10)+1;
}

//sql문 작성
$sql = "SELECT serial, subject, author, ent_date, view_cnt ";
$sql .= "FROM notify ORDER BY serial DESC ";
$sql .= "LIMIT 10 OFFSET ". ($board_page-1)*10;

//쿼리 전송 및 결과 받기
$result = $conn->query($sql);
?>				
				<div id="board_top">
					<div id="board_total">
						Total <?php echo $total. ", ". $board_page."/". $total_pages ?>Pages
					</div>
					<div id="board_search"><input type="search"> <input type="button" value="검색" /></div>
				</div>
				<div id="board">
					<table>
						<thead>
							<tr>
								<th style="width: 5%;">번호</th>
								<th>제목</th>
								<th style="width: 10%;">작성자</th>
								<th style="width: 10%;">등록일</th>
								<th style="width: 10%;">조회수</th>
							</tr>
						</thead>
						<tbody>
<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

		echo "<tr>";
		echo "<td>". $row['serial'] ."</td>";
		echo "<td class='board_subject'>";
		echo "<a href='m03_06_board_contents.php?serial=". $row['serial'] ."'>";
		echo $row['subject'];
		echo "</a>";
		echo "</td>";
		echo "<td>". $row['author'] ."</td>";
		echo "<td>". $row['ent_date'] ."</td>";
		echo "<td>". $row['view_cnt'] ."</td>";
		echo "</tr>";
		
    }
} else {
    echo "조회된 내역이 없습니다.";
}

//db 접속 종료
$conn->close();
?>						
						</tbody>
					</table>
				</div>
				<div id="board_bottom">
<?php				
echo "<p>";
if($board_page!=1){
	echo "<a href='m03_01_notify.php?board_page=". ($board_page-1) ."'>";
	echo "이전</a> | ";
}

for($i=1; $i<=$total_pages; $i++){
	echo "<a href='m03_01_notify.php?board_page=".$i."'>";
	echo $i ."</a> | ";
}

if($board_page != $total_pages){
	echo "<a href='m03_01_notify.php?board_page=". ($board_page+1) ."'>";
	echo " 다음</a>";
}
echo "</p>";

	if(isset($_SESSION['id'])){
?>					
					<p id="buttons">
						<a href="m03_07_board_write.php"><button>글쓰기</button></a>
					</p>
<?php
	}
?>					
				</div>
			</section>
		</div>
		<footer>
			<?php include 'common/footer.php'; ?>											
		</footer>
		
	</body>
</html>
