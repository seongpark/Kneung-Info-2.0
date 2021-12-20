<?php
  session_start();
  header('Content-Type: text/html; charset=UTF-8');
  
  $db = new mysqli("localhost","oneoclock-hantudio","SPACElike8881!","oneoclock-hantudio"); //주소 이름 비번 db이름 순서로 입력
  $db->set_charset("utf8");

  function mq($sql){
    global $db;
    return $db->query($sql);
  }

  ?>