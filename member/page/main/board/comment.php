<?php
$sql = "select id, postid, depth, content, writer, password from comment 
        where id = depth and postid = " . $id;
$result = $db->query($sql);
?>
<div id="commentView">
    <?php
    while ($row = $result->fetch_assoc()) {
    ?>
   
        
   <div class="card">
  <div class="card-body">
        <?php echo $row["content"]?>
        <p class="text-muted small mb-4 mb-lg-0">-<?php echo $row["writer"]?></p>
  </div>
</div><br>
                
            <?php
            $subSql = "select id, postid, depth, content, writer, password from comment
                       where id != depth and depth = " . $row["id"];
            $subResult = $db->query($subSql);
            while ($subRow = $subResult->fetch_assoc()) {
                ?>
                <ul class="twoDepth">
                    <li>
                        <div>
                            <span>작성자 : <?php echo $subRow["writer"] ?></span>
                            <p><?php echo $subRow["content"] ?></p>
                            
                        </div>
                    
                
                <?php
            }
            ?>
        
  
    <?php }?>
</div>
<form action="comment_update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id?>">

    <div class="uk-margin">
    <input type="text" class="uk-input" placeholder="닉네임" name="writer" id="writer" value="<?php
	if(isset($_SESSION['userid'])){
		echo "{$_SESSION['userid']}";
  }
	?> " aria-describedby="basic-addon1" readonly>
        </div>
                

                <textarea class="uk-textarea" name="content" id="content" rows="3" placeholder="내용"></textarea>

    <div class="btnSet">
        <br>
        <input type="submit" class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom" value="작성">
    </div>
</form>
