
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
$xml=simplexml_load_file("data.xml")
?>
    

<?php
require_once("dbconfig.php");

if (isset($_GET["id"]))
{
    $id = $_GET["id"];
}

if (isset($id))
{
    $sql = "select id, title, content, date, hit, writer, password from board where id=" . $id;
    $result = $db->query($sql);
    $row = $result->fetch_assoc();
}
?>

   

<body>
<div class="uk-card uk-card-default uk-card-body">
            <h4 style="  font-family: 'Cafe24Ssurround'";><b>글쓰기</b></h4>

       
    <div id="boardWrite">
        <form action="./write_update.php" method="post">
            <?php
            if(isset($id)) {
                echo '<input type="hidden" name="id" value="' . $id . '">';
            }
            ?>
          
                    <?php
                    if(isset($id)) {
                        echo $row["writer"];
                    } else { ?>

<form class="uk-form-stacked">

    <div class="uk-form-controls">
    <input type="hidden" class="uk-input" placeholder="닉네임" value="<?php
	if(isset($_SESSION['userid'])){
		echo "{$_SESSION['userid']}";
  }
	?>" name="writer" id="writer"  readonly aria-describedby="basic-addon1">

<label class="uk-form-label" for="form-stacked-text">비밀번호</label>
    <div class="uk-form-controls">
    <input type="password" class="uk-input" placeholder="Password" name="password" id="비밀번호" aria-describedby="basic-addon1">
    <br><br>

    <label class="uk-form-label" for="form-stacked-text">제목</label>
    <div class="uk-form-controls">
    <input type="title"  class="uk-input" placeholder="제목" name="title" id="title" aria-describedby="basic-addon1" value="<?php echo isset($row["title"])?$row["title"]:null?>">
    </div>
    </div>
    <br>

    <label class="uk-form-label" for="form-stacked-text">내용</label>
    <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>
    <textarea id="summernote" name="content" rows="3"></textarea>


                    <?php } ?>
           
                  <br>
            <div class="btnSet">
          <button type="submit" class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom">작성</button>
            </div>
        </form>
        </div>
    </div>
    </div>
    </div>
</body>
<?php include("menu.php") ?>

<div style="height:700px; background-color: #f1f1f1;"></div>

</html>

