<?php include "db.php";?>
<!DOCTYPE html>
<html>
	<head>
	<!--CSS-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<!--CSS-end-->
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta charset="utf-8" />
	<title>강중인포 로그인</title>
	<style>
		.btn {
    		width: 100%;
		}
	</style>

</head>
<body>
<div style="margin-top: 70px"></div>
		<div class="container">
			<h1>강중인포 로그인</h1>
			<p>강중인포를 사용하기 위해서 로그인이 필요합니다.</p>
		<div style="margin-top:30px; ">						
				<form method="post" action="member/login_ok.php">
					<div class="mb-3">
						<!--로그인 폼-->
						<input type="text" name="userid" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="아이디">
						<div style="margin-top:20px"></div>
						<input type="password" name="userpw" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="비밀번호">
						<div style="margin-top:20px"></div>
						<!--로그인 폼 끝-->
					</div>
					<div class="d-flex justify-content-between bd-highlight mb-3">
    					<div class="p-2 bd-highlight"><a href="member/member.php">회원가입</a></div>
    					<div class="p-2 bd-highlight" data-bs-toggle="modal" data-bs-target="#exampleModal">계정 찾기</a></div>
  					</div>
				
					  <button type="summit" class="btn btn-primary btn-lg btn-block" id="btn">로그인</button>
				</form>	
		</div>
	</div>

	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">계정 찾기 안내</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        계정(아이디나 비밀번호)을 찾으려면 관리자에게 문의해주세요.
		<br><br>
		<a href="mailto:seong8914@gmail.com"  style="color: #0b6efd;  font-family: 'Cafe24Ssurround';">메일로 문의하기</a><br>
		<a href="https://open.kakao.com/o/sgEWPHld" style="color:  #0b6efd;  font-family: 'Cafe24Ssurround';">카카오톡으로 문의하기</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">닫기</button>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>