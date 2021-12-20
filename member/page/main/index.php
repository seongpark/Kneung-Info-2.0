<?php include "header.php";?>
<?php 
  include "db.php";
?>
<?php
  error_reporting( E_ALL );
  ini_set( "display_errors", 1 );
?>
<body>
<div class="uk-container" >
    <div class="kenung-screen">
    <nav class="sel-target: .uk-navbar-container; cls-active: uk-navbar-stick" uk-navbar>
        <div class="uk-navbar-left">
            <ul class="uk-navbar-nav">
                <li class="uk-active"
                style="font-family: 'Cafe24SsurroundAir">
                <a href="#"><b style="font-family: 'Cafe24SsurroundAir">강릉중학교</b></a></li>
            </ul>
        </div>
        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav">
                <li class="uk-active"><a href=""><?php
	if(isset($_SESSION['userid'])){
		echo "{$_SESSION['userid']}";
  }
	?>
</a></li>
            </ul>
        </div>
    </nav>
    
    <div>
    <div class="uk-card uk-card-default uk-card-body">
            <h4><i style="color: #F5A9A9;" class="fas fa-temperature-high ">&nbsp;</i>
                <a style="color: black; font-family: 'Cafe24SsurroundAir';" href="https://kneung.page.link/jaga"><b style="font-family: 'Cafe24Ssurround';">건강상태 자가진단</b>&nbsp;<i class="fas fa-chevron-right"></i></a></h4>
        </div>
        <br>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h4 style="  font-family: 'Cafe24Ssurround';"><b>코로나19 현황판</b><br>
            <span style="font-size: 10px;  font-family: 'Cafe24SsurroundAir';">   <?php
  $key = '3e206413f06d522942919b27f67ccad1d';
    $data_str1 = file_get_contents('https://api.corona-19.kr/korea/?serviceKey='. $key);
    $json1 = json_decode($data_str1, true);
      echo $json1['updateTime']. "<br>";
?></span></h4>

            <div class="uk-child-width-1-2 " uk-grid>
    <div>
      <center>
        <p>누적 확진자<br>
        <span style="font-size: 25px;   font-family: 'Cafe24Ssurround';">
    <?php
  $key = '3e206413f06d522942919b27f67ccad1d';
    $data_str1 = file_get_contents('https://api.corona-19.kr/korea/?serviceKey='. $key);
    $json1 = json_decode($data_str1, true);
      echo $json1['TotalCase']. "<br>";
?>
</span>
</p>
</center>
    </div>
    <div>
    <center>
        <p>국내 완치자<br>
        <span style="font-size: 25px;   font-family: 'Cafe24Ssurround';">
    <?php
  $key = '3e206413f06d522942919b27f67ccad1d';
    $data_str1 = file_get_contents('https://api.corona-19.kr/korea/?serviceKey='. $key);
    $json1 = json_decode($data_str1, true);
      echo $json1['TotalRecovered']. "<br>";
?>
</span>
</p>
</center>
    </div>
</div>
   
    </div>
    <br>

    </div>
    <div>

    <div class="uk-card uk-card-default uk-card-body">
            <h4  style="  font-family: 'Cafe24Ssurround'";><b>시간표</b><br>
          <span style="font-size: 15px;  font-family: 'Cafe24SsurroundAir';"><?php
echo "". date("Y년 m월 d일");
?></span></h4>
            <iframe src="http://컴시간학생.kr" width=100%; height=300px;>

</iframe>
<span style="color: gray; font-size: 12px; margin-top: 4px;"><i class="far fa-question-circle"></i> <a href="board/view.php?id=19" style="color: gray;">혹시 시간표가 안뜨시나요?</a></span>
        </div>
        <br>
    </div>

  
    <div class="uk-card uk-card-default uk-card-body">
            <h4 style="  font-family: 'Cafe24Ssurround'";><b>오늘 할일</b></h4>
            <form  id="js_todoForm">
                <div class="form-group">
                    <input class="uk-input" id="inputValue" type="text" placeholder="할일을 적어주세요.">
                </div>
            </form>
            <ul id="js_todoList"></ul>
        </div>
        <br>

    </div>
    <div>
    <div class="uk-card uk-card-default uk-card-body" style="background-color: #3A01DF; color: white;">
            <h4>
            <div class="col-md-5" id="noneDiv" style="display: none; font-size: 15px; font-family: 'Cafe24SsurroundAir'; color: white;">무료 광고는 학교에 대한 홍보 (예: 동아리 인원 모집)같은 것만 받습니다. <br><br>
            <a onclick="offDisplay()" style="font-family: 'Cafe24SsurroundAir'; color: white;"><span>내용 숨기기</span></a></div>
<div id ="test" style ="display:block">  
              <span style="font-size: 10px; font-family: 'Cafe24Ssurround'; color: white;"><a  onclick="onDisplay()"><span style="font-family: 'Cafe24SsurroundAir'; color: white;">Free AD 무료 광고</span> <i class="far fa-question-circle" style="color: white;"></i></a></span><br>
                <a style="color: black; font-family: 'Cafe24SsurroundAir'; color: white;" href="https://instagram.com/oopseong"><b style="font-family: 'Cafe24Ssurround'; color: white;">  홍보가 필요하시나요?</b>&nbsp;<i class="fas fa-chevron-right"></i></a><br></h4>
        </div>
        </div>
      
      </div>

</div>

<br><br>
<center>            
<p ><a href="logout.php" style="color: black;">로그아웃</a></p>
</center>
    <div style="height:100px; background-color: #f1f1f1;"></div>

    <?php include "menu.php"; ?>
</div>
<script src="app.js"></script>
<script src="todo.js"></script>
<script src="iframe.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.22/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.22/dist/js/uikit-icons.min.js"></script>
</body>
</html>