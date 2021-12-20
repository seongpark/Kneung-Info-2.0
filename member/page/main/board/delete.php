<?php
    require('head.php'); 
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
 
<?php
require_once("dbconfig.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];
}
?>

<body>
    
<div class="uk-card uk-card-default uk-card-body">
            <h4 style="  font-family: 'Cafe24Ssurround'";><b>글 삭제</b></h4>

 

<article class="boardArticle">

    <?php
    if (isset($id)) {
        $sql ="select count(id) as cnt from board where id = '$id'";
        $result = $db->query($sql);
        $row = $result->fetch_assoc();
        if (empty($row["cnt"])) {
        ?>
        <script>
            alert("Do not exist");
            history.go(-1);
        </script>
        <?php
        exit;
        }

        $sql = "select title from board where id = '$id'";
        $result = $db->query($sql);
        $row = $result->fetch_assoc();
        ?>
        <div id="boardDelete">
        <form action="./delete_update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id?>">
            
                    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">제목</span>
  </div>
  <input type="text" class="uk-input" value="<?php echo $row['title']?>" name="text" id="text" aria-describedby="basic-addon1" readonly><br><br>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span id="basic-addon1">비밀번호</span>
  </div>
  <input type="password" class="uk-input" placeholder="Password" name="password" id="password" aria-describedby="basic-addon1">
</div>
            <div class="btnSet"><br>
                <button type="submit" class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom">삭제</button>

            </div>
        </form>
    </div>
    <?php
    //if (isset($id)) {
    } else {
    ?>
        <script>
            alert('정상적인 경로를 이용해주세요.');
            history.go(-1);
        </script>
        <?php
        exit;
    }
    ?>
</article>
</div></div>
</body>

<div style="height:500px; background-color: #f1f1f1;"></div>
<?php include "menu.php";?>
<?php
    require('footer.php'); 
?>
</html>
