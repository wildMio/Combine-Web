<?php

	//Allow the config
	define('__CONFIG__', true);
	//Require the config
	require_once "inc/config.php";
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
			  <button class="tablinks" onclick="openCity(event, 'logIn')" id="defaultOpen">登入</button>
			  <button class="tablinks" onclick="openCity(event, 'sigIn')">註冊</button>
			  <button class="tablinks" onclick="openCity(event, 'memIntro')">介紹</button>
			</div>

			<div id="logIn" class="tabcontent">
				<form action="/action_page.php">
				    <div class="row">
				      <div class="col-25">
				        <label for="fname">Email</label>
				      </div>
				      <div class="col-75">
				        <input class="logtxt" type="text" id="fname" name="firstname" placeholder="example@gmail.com">
				      </div>
				    </div>
				    <div class="row">
				      <div class="col-25">
				        <label for="lname">密碼</label>
				      </div>
				      <div class="col-75">
				        <input class="logtxt" type="text" id="lname" name="lastname" placeholder="password">
				      </div>
				    </div>
				    <div class="row">
				      <div class="col-25">
				        <label for="country">國家</label>
				      </div>
				      <div class="col-75">
				        <select class="logtxt" id="country" name="country">
				          <option value="australia">台灣</option>
				          <option value="canada">中國</option>
				          <option value="usa">美國</option>
				        </select>
				      </div>
				    </div>
				    <div class="row">
				      <div class="col-25">
				        <label for="subject">介紹</label>
				      </div>
				      <div class="col-75">
				        <textarea class="logtxt" id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
				      </div>
				    </div>
				    <div class="row">
				      <input class="logbtn" type="submit" value="登入">
				    </div>
				</form>
			</div>

			<div id="sigIn" class="tabcontent">
				<form action="/action_page.php">
				    <div class="row">
				      <div class="col-25">
				        <label for="fname">Email</label>
				      </div>
				      <div class="col-75">
				        <input class="logtxt" type="text" id="fname" name="firstname" placeholder="example@gmail.com">
				      </div>
				    </div>
				    <div class="row">
				      <div class="col-25">
				        <label for="lname">密碼</label>
				      </div>
				      <div class="col-75">
				        <input class="logtxt" type="text" id="lname" name="lastname" placeholder="password">
				      </div>
				    </div>
				    <div class="row">
				      <div class="col-25">
				        <label for="country">國家</label>
				      </div>
				      <div class="col-75">
				        <select class="logtxt" id="country" name="country">
				          <option value="australia">台灣</option>
				          <option value="canada">中國</option>
				          <option value="usa">美國</option>
				        </select>
				      </div>
				    </div>
				    <div class="row">
				      <div class="col-25">
				        <label for="subject">介紹</label>
				      </div>
				      <div class="col-75">
				        <textarea class="logtxt" id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
				      </div>
				    </div>
				    <div class="row">
				      <input class="logbtn" type="submit" value="登入">
				    </div>
				</form>
			</div>

			<div id="memIntro" class="tabcontent">
			  <h3>Tokyo</h3>
			  <p>Tokyo is the capital of Japan.</p>
			</div>

		</div>

	</div>

	<!-- navigator -->
	<div class="topnav" id="myTopnav">
	  <a href="javascript:void(0);" class="navitem">wildmio</a>
	  <a href="javascript:void(0);" class="navitem">活動訊息</a>
	  <a href="javascript:void(0);" class="navitem">商品</a>
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
	  <a href="#">About</a>
	  <a href="#">Services</a>
	  <a href="#">Clients</a>
	  <a href="#">Contact</a>
	</div>
	<div class="sidetool">
		<!-- Use any element to open the sidenav -->
		<div class="menu">
			<button>Apple</button>
		  	<button>Samsung</button>
		  	<button>Sony</button>
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
		  <p>Move</p>
		  <p>this</p>
		  <p>DIV</p>
		</div>
	</div>

	<!-- main content -->
	<section class="content" id="content" onresize="show();">
		
	</section>

	<footer class="footer zeromp"></footer>

	<?php require_once "inc/footer.php";?>
</body>

</html>