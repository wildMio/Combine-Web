<?php

	//Allow the config
	define('__CONFIG__', true);
	//Require the config
	require_once "inc/config.php";

	Page::ForceDashboard();
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="follow">
	<title>wildmio</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
	
	<!-- 會員modal -->
	<div class="modal" id="memberModal">

		<div class="modal-content">

			<div class="modtab">
			<span class="close">&times;</span>
			  <button class="tablinks" onclick="openMember(event, 'logIn')" id="defaultOpen">登入</button>
			  <button class="tablinks" onclick="openMember(event, 'reg')">註冊</button>
			  <button class="tablinks" onclick="openMember(event, 'memIntro')">介紹</button>
			</div>

			<div id="logIn" class="tabcontent">
				<form class="js-login" method="POST">
				    <div class="row">
				      <div class="col-25">
				        <label for="fname">Email</label>
				      </div>
				      <div class="col-75">
				        <input class="logregtxt" type="email" id="fname" name="email" placeholder="example@gmail.com" required="required">
				      </div>
				    </div>
				    <div class="row">
				      <div class="col-25">
				        <label for="lname">密碼</label>
				      </div>
				      <div class="col-75">
				        <input class="logregtxt" type="password" id="lname" name="password" placeholder="password" required="required">
				      </div>
				    </div>
				    <div class="row js-error" style="display: none;"></div>
				    <div class="row">
				      <button class="logbtn" type="submit">登入</button>
				    </div>
				</form>
			</div>

			<div id="reg" class="tabcontent">
				<form class="js-reg" method="POST">
				    <div class="row">
				      <div class="col-25">
				        <label for="fname">Email</label>
				      </div>
				      <div class="col-75">
				        <input class="logregtxt" type="email" id="fname" name="firstname" placeholder="example@gmail.com" required="required">
				      </div>
				    </div>
				    <div class="row">
				      <div class="col-25">
				        <label for="lname">密碼</label>
				      </div>
				      <div class="col-75">
				        <input class="logregtxt" type="password" id="lname" name="lastname" placeholder="password" required="required">
				      </div>
				    </div>
				    <div class="row">
				      <div class="col-25">
				        <label for="nickname">暱稱</label>
				      </div>
				      <div class="col-75">
				        <input class="logregtxt" type="text" id="nickname" name="nickname" placeholder="nickname">
				      </div>
				    </div>
				    <div class="row js-error" style="display: none;"></div>
				    <div class="row">
				      <button class="logbtn" type="submit">註冊</button>
				    </div>
				</form>
			</div>

			<div id="memIntro" class="tabcontent">
			  <h3>會員功能</h3>
			  <ul>
			  	<li>填寫建議</li>
			  	<li>會員功能1</li>
			  	<li>會員功能2</li>
			  	<li>會員功能3</li>
			  	<li>會員功能4</li>
			  	<li>會員功能5</li>
			  </ul>
			</div>

		</div>

	</div>
	
	<!-- navigator -->
	<div class="topnav" id="myTopnav">
	  <a href="javascript:void(0);" class="navitem">wildmio</a>
	  <a href="javascript:void(0);" class="navitem" id="newsbtn">活動訊息</a>
	  <a href="javascript:void(0);" class="navitem" id="foodbtn">商品</a>
	  <a href="javascript:void(0);" class="navitem" id="aboutbtn">關於我們</a>
	  <a href="javascript:void(0);" class="navitem" id="membtn">會員</a>
	  <a href="javascript:void(0);" class="icon navitem" onclick="checksize()">&#9776;</a>
	</div>
	<div class="navblank"></div>

	<!-- Search text input-->
	<input type="text" class="searchtxt" name="search" placeholder="Search..">

	<!-- right side bar -->
	<div id="mySidemenu" class="sidemenu">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeMenu()">&times;</a>
	  <a href="#">合作夥伴</a>
	  <a href="#">服務客群</a>
	  <a href="#">徵才資訊</a>
	  <a href="#">連繫我們</a>
	</div>
	<div class="sidetool">
		<!-- Use any element to open the sidenav -->
		<div class="menu">
			<button>功能一</button>
		  	<button>功能二</button>
		  	<button>功能三</button>
		  	<button type="button" onclick="openMenu()"><span>更多</span></button>
		</div>

		<!-- left icon bar -->
		<div class="icon-bar">
		  <a class="active" href="#"><i class="fa fa-search"></i></a> 
		  <a href="#"><i class="fa fa-envelope"></i></a> 
		  <a href="#"><i class="fa fa-globe"></i></a>
		  <a href="#"><i class="fa fa-trash"></i></a> 
		</div>
	</div>

	<!--Draggable DIV:-->
	<div id="dragdiv">
	  	<!--Include a header DIV with the same name as the draggable DIV, followed by "header":-->
	  	<div class="dragtab">
	  		<div id="dragdivheader"></div>
	  		<div id="dragopen">&spades;</div>
		</div>
	  	<div id="dragitem">
		  <p>新增</p>
		  <p>刪除</p>
		  <p>修改</p>
		</div>
	</div>

	<!-- main content -->
	<section class="content" id="content" onresize="show();">
		<h1>歡迎遊覽此網站</h1>
	</section>

	<footer class="footer zeromp">
		<span class="close">&times;</span>
	</footer>

	<?php require_once "inc/footer.php";?>
</body>

</html>