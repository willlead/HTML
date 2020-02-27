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

<?php
//reple select
$sql = "SELECT * FROM reple WHERE board_serial=". $serial;

//db 전송
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		if(isset($_GET['reple_num']) && ($_GET['reple_num']==$row['reple_num'])) {
?>			
<form action="reple_update.php" method="post" name="reple_up_form">
    <table id="reple_ent">
        <tr>
            <td>
                <textarea name="reple_up_cont" rows="3" id="reple_cont_text">
                    <?php echo $row['reple_content'] ?>
                </textarea>
            </td>
            <td id="reple_cont_btn">
                <button type="button" onclick="check_up_input()">댓글수정</button>
            </td>
        </tr>
    </table>
    <input type="hidden" name="reple_num" 
        value="<?php echo $row['reple_num'] ?>">
    <input type="hidden" name="serial" 
        value="<?php echo $serial ?>">		
</form>
<?php			
		} else {
?>
<table id="reple">
    <tr>
        <td>
            <strong><?php echo $row["reple_author"] ?></strong>
            <?php echo $row["reple_date"] ?>
        </td>
        <td style="text-align:right">
<?php
			if(isset($_SESSION['id']) && $row["reple_author"] == $_SESSION['id']){
?>						
            <a href="m03_06_board_contents.php?
                serial=<?php echo $serial ?>
                &reple_num=<?php echo $row["reple_num"] ?>">
                수정
            </a>
            <a href="reple_delete.php?
                reple_num=<?php echo $row["reple_num"] ?>
                &serial=<?php echo $row['board_serial'] ?>">
                삭제
            </a>
<?php
			}
?>							
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <?php echo $row["reple_content"] ?>
        </td>
    </tr>
</table>
<?php
		}
	}
}

if(isset($_SESSION['id'])){
?>				
<form action="reple_insert.php" method="post" name="reple_form">
    <table id="reple_ent">
        <tr>
            <td>
                <textarea name="reple_content" rows="3" id="reple_cont_text"></textarea>
            </td>
            <td id="reple_cont_btn">
                <button type="button" onclick="check_input()">댓글등록</button>
            </td>
        </tr>
    </table>
    <input type="hidden" name="board_name" 
        value="<?php echo $_SESSION['table_name'] ?>">
    <input type="hidden" name="board_serial" 
        value="<?php echo $serial ?>">
    <input type="hidden" name="reple_author" 
        value="<?php echo $_SESSION['id'] ?>">
</form>
<?php
}
