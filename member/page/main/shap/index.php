<?php include "header.php";?>
<?php 
  include "../db.php";
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

</div>
    <div class="uk-card uk-card-default uk-card-body">
    <div class="uk-margin">
    <form method=get action="http://www.google.co.kr/search" target="_blank" > 
     <input type=text class="uk-input"  name=q  maxlength=255 placeholder="# 궁금한 것들을 검색해보세요."/>         
     </form>
     <div style="height: 7px;"></div>
</div>
</div>
<br>
    <div class="uk-card uk-card-default uk-card-body">
            <h4 style="  font-family: 'Cafe24Ssurround'";><b>최신 뉴스</b></h4>
            <!-- start sw-rss-feed code --> 
<script type="text/javascript"> 
<!-- 
rssfeed_url = new Array(); 
rssfeed_url[0]="http://www.yonhapnewstv.co.kr/browse/feed/";  
rssfeed_frame_width="100%"; 
rssfeed_frame_height="200"; 
rssfeed_scroll="off"; 
rssfeed_scroll_step="6"; 
rssfeed_scroll_bar="on"; 
rssfeed_target="_blank"; 
rssfeed_font_size="11"; 
rssfeed_font_face=""; 
rssfeed_css_url=""; 
rssfeed_title="off"; 
rssfeed_title_name=""; 
rssfeed_title_bgcolor="#3366ff"; 
rssfeed_title_color="#fff"; 
rssfeed_title_bgimage=""; 
rssfeed_footer="off"; 
rssfeed_footer_name="rss feed"; 
rssfeed_footer_bgcolor="#fff"; 
rssfeed_footer_color="#333"; 
rssfeed_footer_bgimage=""; 
rssfeed_item_title_length="50"; 
rssfeed_item_title_color="#666"; 
rssfeed_item_bgcolor="#fff"; 
rssfeed_item_bgimage=""; 
rssfeed_item_border_bottom="on"; 
rssfeed_item_source_icon="off"; 
rssfeed_item_date="off"; 
rssfeed_item_description="off"; 
rssfeed_item_description_length="120"; 
rssfeed_item_description_color="#666"; 
rssfeed_item_description_link_color="#333"; 
rssfeed_item_description_tag="off"; 
rssfeed_no_items="0"; 
rssfeed_cache = "9c31034fd5dbbf023903c6ed008c5dba"; 
//--> 
</script> 
<script type="text/javascript" src="//feed.surfing-waves.com/js/rss-feed.js"></script> 
<!-- The link below helps keep this service FREE, and helps other people find the SW widget. Please be cool and keep it! Thanks. --> 
    </div>
<br>
<div class="uk-card uk-card-default uk-card-body">
  <!-- weather widget start --><div id="m-booked-prime-days-40579"> <div class="weather-customize widget-type-prime-days">  <div class="booked-prime-days-in"> <div class="booked-prime-days-data"> <div class="booked-pd-today"> <div class="booked-pd-today-img wrz-18 "></div> <div class="booked-pd-today-temperature"> <div class="booked-wzs-pd-val"> <div class="booked-wzs-pd-number"><span class="plus">+</span>19</div> <div class="booked-wzs-pd-dergee"> <div class="booked-wzs-pd-dergee-val">&deg;</div> <div class="booked-wzs-pd-dergee-name">C</div> </div> </div> </div> <div class="booked-pd-today-extreme"> <div class="booked-pd booked-pd-h"><span>최고 </span><span class="plus">+</span>20</div> <div class="booked-pd booked-pd-l"><span>최저 </span><span class="plus">+</span>12</div> </div> </div> <div class="booked-pd-ndays">  <div class="booked-pd-nitem"> <div class="booked-pd-nidi wrz-sml wrzs-18"></div> <div class="booked-pd-nidw">일</div> </div>  <div class="booked-pd-nitem"> <div class="booked-pd-nidi wrz-sml wrzs-18"></div> <div class="booked-pd-nidw">월</div> </div>  <div class="booked-pd-nitem"> <div class="booked-pd-nidi wrz-sml wrzs-18"></div> <div class="booked-pd-nidw">화</div> </div>  <div class="booked-pd-nitem"> <div class="booked-pd-nidi wrz-sml wrzs-18"></div> <div class="booked-pd-nidw">수</div> </div> </div> </div> </div> </div> </div><script type="text/javascript"> var css_file=document.createElement("link"); var widgetUrl = location.href; css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-widget-prime-days.css?v=0.0.1'); document.getElementsByTagName("head")[0].appendChild(css_file); function setWidgetData_40579(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-prime-days-40579'); if(objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } var widgetSrc = "https://widgets.booked.net/weather/info?action=get_weather_info;ver=7;cityID=41337;type=6;scode=124;ltid=3458;domid=593;anc_id=34303;countday=undefined;cmetric=1;wlangID=24;color=137AE9;wwidth=250;header_color=ffffff;text_color=333333;link_color=08488D;border_form=1;footer_color=ffffff;footer_text_color=333333;transparent=0;v=0.0.1";widgetSrc += ';ref=' + widgetUrl;widgetSrc += ';rand_id=40579';var weatherBookedScript = document.createElement("script"); weatherBookedScript.setAttribute("type", "text/javascript"); weatherBookedScript.src = widgetSrc; document.body.appendChild(weatherBookedScript) </script><!-- weather widget end -->
</div>
<br>
<div class="uk-card uk-card-default uk-card-body">
<h4 style="  font-family: 'Cafe24Ssurround'";><b>라이프 스토리</b></h4>
<!-- start sw-rss-feed code --> 
<script type="text/javascript"> 
<!-- 
rssfeed_url = new Array(); 
rssfeed_url[0]="http://rss.ohmynews.com/rss/life.xml";  
rssfeed_frame_width="100%"; 
rssfeed_frame_height="240"; 
rssfeed_scroll="off"; 
rssfeed_scroll_step="6"; 
rssfeed_scroll_bar="on"; 
rssfeed_target="_blank"; 
rssfeed_font_size="12"; 
rssfeed_font_face=""; ; 
rssfeed_css_url=""; 
rssfeed_title="off"; 
rssfeed_title_name=""; 
rssfeed_title_bgcolor="#3366ff"; 
rssfeed_title_color="#fff"; 
rssfeed_title_bgimage=""; 
rssfeed_footer="off"; 
rssfeed_footer_name="rss feed"; 
rssfeed_footer_bgcolor="#fff"; 
rssfeed_footer_color="#333"; 
rssfeed_footer_bgimage=""; 
rssfeed_item_title_length="50"; 
rssfeed_item_title_color="#666"; 
rssfeed_item_bgcolor="#fff"; 
rssfeed_item_bgimage=""; 
rssfeed_item_border_bottom="on"; 
rssfeed_item_source_icon="off"; 
rssfeed_item_date="off"; 
rssfeed_item_description="off"; 
rssfeed_item_description_length="120"; 
rssfeed_item_description_color="#666"; 
rssfeed_item_description_link_color="#333"; 
rssfeed_item_description_tag="off"; 
rssfeed_no_items="0"; 
rssfeed_cache = "b0eebee919864741dd5bdf8b6ef65654"; 
//--> 
</script> 
<script type="text/javascript" src="//feed.surfing-waves.com/js/rss-feed.js"></script> 
<!-- The link below helps keep this service FREE, and helps other people find the SW widget. Please be cool and keep it! Thanks. --> 

<!-- end sw-rss-feed code -->
</div>
<br>
</div>
</div>
<br><br>
<center>            

</center>
<div style="height:100px; background-color: #f1f1f1;"></div>
    <?php include "menu.php"; ?>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.22/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.22/dist/js/uikit-icons.min.js"></script>
 <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</body>
</html>