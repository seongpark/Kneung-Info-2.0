<?php
    require('head.php'); 
  ?> 
    <?php
$xml=simplexml_load_file("data.xml")
?>
<?php include "dbconfig.php";?>
<div class="uk-container">
 <nav class="sel-target: .uk-navbar-container; cls-active: uk-navbar-stick" uk-navbar>
        <div class="uk-navbar-left">
            <ul class="uk-navbar-nav">
                <li class="uk-active"
                style="font-family: 'Cafe24SsurroundAir">
                <a href="#"><b style="font-family: 'Cafe24SsurroundAir">강중인포</b></a></li>
            </ul>
        </div>
        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav">
                <li class="uk-active"><a href="">
                    <?php
	if(isset($_SESSION['userid'])){
		echo "{$_SESSION['userid']}";
  }
	?>
</a></li>
            </ul>
        </div>
    </nav>
<div class="uk-container">

<?php
require_once("dbconfig.php");

$id = $_GET["id"];

$isHit = !empty($id) && empty($_COOKIE["board_" . $id]);
if ($isHit) {
    $sql = "update board set hit = hit+1 where id =" . $id;
    $result = $db->query($sql);
    if (empty($result)) {
    ?>
        <script>
            alert("some problem");
            history.go(-1);
        </script>
    <?php
    } else {
        setcookie('board_' . $id, TRUE, time() + (60 * 60 * 24), '/');
    }
}

$sql = "select id, title, content, date, hit, writer, password from board where id=" . $id;
$result = $db->query($sql);
$row = $result->fetch_assoc();
?>

<body>
    
<div class="uk-card uk-card-default uk-card-body">
            <h4 style="  font-family: 'Cafe24Ssurround'";><b><?php echo $row['title']?></b></h4>
            <div id="boardInfo" class="text-muted small mb-4 mb-lg-0">
            <span id="boardID">작성자 : <?php echo $row["writer"]?></span>&nbsp;&nbsp;
            <span id="boardDate">날짜 : <?php echo $row["date"]?></span>&nbsp;&nbsp;
            <span id="boardHit">조회수 : <?php echo $row["hit"]?></span>&nbsp;&nbsp;
        </div><hr>
        <div id="boardContent"><?php echo $row["content"]?></div>
        <hr>
        
    <div class="btnSet">
        <a href="./delete.php?id=<?php echo $id?>">삭제</a> | 
        <a href="./">목록</a>
    </div>
        </div>

        <br>
        <div class="uk-card uk-card-default uk-card-body">
            <h4 style="  font-family: 'Cafe24Ssurround'";><b>댓글</b></h4>

            <div id="boardComment">
        <?php require_once('./comment.php')?>
    </div>
        </div>

</article>
</div>
</div>
</body>
<?php include "menu.php";?>
<div style="height:150px; background-color: #f1f1f1;"></div>
<?php
    require('footer.php'); 
?>
</html>

