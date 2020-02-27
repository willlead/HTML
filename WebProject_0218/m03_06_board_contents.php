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
			table#reple{
				margin-top:10px;
				width:100%;
				font-size:10pt;
				border-bottom:1px solid #00008B;
			}
			table#reple a{
				text-decoration:none;
				color:gray;
			}
			table#reple_ent{
				margin-top:10px;
				width:100%;
				border-bottom:1px solid #00008B;
				
			}
			textarea#reple_cont_text{
				width:100%;
			}
			td#reple_cont_btn{
				width:100px;
				
			}
			
			td#reple_cont_btn button{
				width:100px;
				height:50px;
			}
		</style>
		<script>
			function check_input(){
				if(!document.reple_form.reple_content.value){
                    alert("댓글내용을 입력 하세요");
                    document.reple_form.reple_content.focus();
                    return;
				}
				document.reple_form.submit();
			}

			function check_up_input(){
				if(!document.reple_up_form.reple_up_cont.value){
                    alert("댓글내용을 입력 하세요");
					document.reple_up_form.reple_up_cont.focus();
                    return;
				}
				document.reple_up_form.submit();
			}
		</script>
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
<?php
$_SESSION['table_name'] = "notify";

//JSON 객체 분리하기
$serial = $_GET["serial"];

//DB Connection
include "common/dbconn.php";

//sql문 작성
$sql = "UPDATE notify SET view_cnt = view_cnt+1 WHERE serial = ".$serial;

//db 전송
$conn->query($sql);

//sql문 작성
$sql = "SELECT * FROM notify WHERE serial = ".$serial;

//db 전송
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
?>
				<div id="board_subject">
					<h3><?php echo $row["subject"] ?></h3>
				</div>
				<div id="board_data">
					<div class="board_left">
						<span class="field_name">작성자 </span> <span class="field_value"><?php echo $row["author"] ?></span>
					</div>
					<div class="board_right">
						<span class="field_name">등록일 </span> <span class="field_value"><?php echo $row["ent_date"] ?></span>
						 <span class="field_name">조회수 </span> <span class="field_value"><?php echo $row["view_cnt"] ?></span>
					</div>
				</div>
				<div >
				    첨부파일 : <a href="uploads/<?php echo $row["fileToUpload"] ?>">
				        <?php echo $row["fileToUpload"] ?>
				        </a>
				        <button type="button">수정</button>
				        
				</div>
				<div id="board_body">
					<?php echo $row["content"] ?>
				</div>
<?php        
    }
} else {
    echo "0 results";
}

include 'common/reple.php';
	$conn->close();
?>				

				<div id="board_bottom">
					<div class="board_left">
						<a href="m03_01_notify.php"><button>목록보기</button></a>
					</div>
					<div class="board_right">
						<a href="m03_09_notify_update.php?serial=<?php echo $serial ?>">
							<button>수정하기</button>
						</a>
						<button onclick="query_delete()">삭제하기</button>
						
					</div>
				</div>
			</section>
		</div>
		<footer>
			<?php include 'common/footer.php'; ?>
		</footer>
	<script>
		function query_delete(){
			var ans = confirm("정말로 삭제 하시겠습니까?");
			if (ans == true) {
				location.href="m03_10_notify_delete.php?serial=<?php echo $serial ?>";
			}
		}
	</script>	
	</body>
</html>
