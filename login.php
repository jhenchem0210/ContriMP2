<?php require_once "./connection/controllerUserData.php"; ?>

    <!DOCTYPE html>
<html>
<head>
	<!-- meta tags-->
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Beshies' Home</title>
	<!-- CSS and JavaScript references -->
	<link rel="stylesheet" type="text/css" href="./CSS/header.css">
	<link rel="stylesheet" type="text/css" href="./CSS/home.css">
	<link rel="stylesheet" type="text/css" href="./CSS/mode.css">
    
        
	<!-- Font Awesome -->
        <link rel="stylesheet" type="text/css" href="./fonts/font-awesome/css/font-awesome.min.css">
	<!-- Google Fonts Roboto -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
	<!-- Favicon -->
		<link href="img/favicon.ico" rel="icon">
	<!-- Google Web Fonts -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
    
	<!-- Ending of CSS and JavaScript -->
 
</head>
<body onload="newpost();">
	<!-- Header section -->
	<div class="headerfixed">
		<!-- Header start -->
	<div class="header">
		<!-- Wrapper start of heading-->
		<div class="wrapper">
			<!-- GPA logo -->
			<a href=""><img src="./images/logo1.png" width=150 height=55 class="logoletter"/></a>
			<!-- Search bar -->
			<form id="searching">
			  <input type="text" name="search" placeholder="Search.." id="search">
			</form>
            
			<!-- icon bar to navigate to all pages -->
			<div class="icon-bar">
			 <ul>
			 	<!-- home -->
			 	<li style="border-bottom: 6px solid white;"><a href="login/home.html" onmouseover="headerchange(1);" onmouseout="headerorigin(1);"><img src=".\images\login\home.png" id="GPA-home"><p id="p1">Home</p></a></li>
			 	<!-- profile -->
			 	<li> <a href="login/profile.html" onmouseover="headerchange(2);" onmouseout="headerorigin(2);"><img src=".\images\login\profile.png" id="GPA-profile"><p id="p2">Profile</p></a> </li>
			 	<!-- society -->
			 	<li><a href="login/society.html" onmouseover="headerchange(3);" onmouseout="headerorigin(3);"><img src=".\images\login\society.png" id="GPA-society"><p id="p3">Society</p></a></li>
			 	<!-- message -->
			 	<li> <a href="login/messages.html" onmouseover="headerchange(4);" onmouseout="headerorigin(4);"><img src=".\images\login\message.png" id="GPA-message"><p id="p4">Messages</p></a></li>
			 	<!-- notification -->
			 	<li><a href="#" onmouseover="headerchange(5);" onmouseout="headerorigin(5);"><img src=".\images\login\notification.png" id="GPA-notification"><p id="p5">Notifications</p></a>
			 	<div id="notify">
			 		<p>No New Notification</p>
			 		<hr style="background-color:white; width: 90%;">
			 	</div>
             	</li>
			 </ul>	 
			   
			</div>
			<!-- Ending of Icon bar -->
            

		</div>
		<!-- Wrapper End of heading -->
        
	</div>
	<!-- End of header -->
	</div>
	<!-- End of header section -->


	<!-- Content Section -->
	<div class="content">
		<!-- Start wrapper -->
		<div class="wrapper">

			<!-- Start Left section -->
			<div class="leftfixed">
				<!-- start sidebar left -->
				<div class="sidebarleft">
					<img src="./images/profile/upload.png"/>
					<p id="sidename"> <?php echo $fetch_info['name'] ?></p>
					<p id="ssn"> Philippine Institute of Science and Techonology</p>
					<p id="country">Philippines</p>
					<a href="./login/profile.html" id="viewall">View All</a>
					<hr>
					<p id="nosociety">31</p>
					<p id="societyname"><a href="login/society.html">Society</a></p>
					<p id="logout"><a href="./connection/logout-user.php">Log Out</a></p>
				</div>
				<div id="styleswitch" class="lamp">  
  					<ul>
    				<p class="lampdark"><a class="lampdark" href="javascript:setStyle('default');"><img src="images/lightbulb-png-834.png" width=50 height=25/></a></p>
    				<p class="lamplight"><a class="lamplight" href="javascript:setStyle('light')"><img src="images/light-bulb-png-819.png" width=50 height=25/></a></p>
  					</ul> 
				</div> 
				<!-- End of sidebar left -->
			</div>
			<!-- End of leftfixed -->

			<!-- start of main content section -->
			<div class="mainnotfixed" id="mainnotfixed">
				<!-- Start of post an content -->
				<div class="main mainpost" style="margin-bottom:20px; padding-bottom:10px;">	

					<div class="userimg"><img src="./images/profile/upload.png"/>
						</div>
					    <div class="username">				 
						<p class="name" style="top:15px;"><?php echo $fetch_info['name'] ?></p>
					    </div>
						<p class="quotes">
							<textarea id="mypara" placeholder="Share an article ,photo ,video or idea."></textarea>
						</p>
						<!-- image load to post -->
						<div class="post">
							<img id="load2" class="postimg" src=" "/>
						</div>

						<div class="postbar">
							<input type="file" accept="images/*" id="chooseimg" onchange="loadFile(event)" onmouseover="onbuttoncolor()" onmouseout="outbuttoncolor()"/>
							<button type="button" class="imgbttn" id="imgbttn">&#x1f4f7; Images</button>
							<button type="button" id="postmypost" class="postmypost" onclick="mypost();">Post</button>
						</div>

				</div>
				<!-- End of post an content -->
				<hr>

				<!-- posted content view -->
				<div class="allpost">
					<!-- post 1 by creator-->
					<div class="mainpost">
						<div class="userimg"><img src="./images/adventure.png"/>
						</div>
					    <div class="username">				 
						<p class="name">Beshies Group</p>
					    </div>
						<p class="time">2min ago</p>
						<p class="quotes">
							Welcome to our Community. This will be your freedom board. You will be able to post your Travel experiences such as your memorable photos, videos or you can even share your marvelous & most wonderful adventures. Enjoy your stay.
						</p>
						<div class="post">
							<img class="postimg" src="./images/login/network society.jpg"/>
						</div>

						<div class="likedislike">
							<p class="like">
								<span class="nooflike" id="like1">0 </span> likes &nbsp <span class="noofdislike" id="dislike1">0 </span> dislikes
							</p>
							<p class="likedisbttn">
								<span id="thumbsup1" class="fa fa-thumbs-up" onclick="increase('like1','dislike1','thumbsup1','thumbsdown1');"></span> <span id="thumbsdown1" class="fa fa-thumbs-down" onclick="decrease('like1','dislike1','thumbsup1','thumbsdown1');"></span>
							</p>
						</div>

					</div>
					<!-- end of post 1 by creator -->

					<!-- post 2 by creator -->
					<div class="mainpost">
						<div class="userimg"><img src="./images/adventure.png"/>
						</div>
					    <div class="username">				 <p class="name">Beshicles group</p>
					    </div>
						<p class="time">8min ago</p>
						<p class="quotes">
							A gender-equal society would be one where the word 'gender' does not exist: where everyone can be themselves.
						</p>
						<div class="post">
							<img class="postimg" src="./images/login/society.jpg"/>
						</div>

						<div class="likedislike">
							<p class="like">
								<span class="nooflike" id="like2">0 </span> likes &nbsp <span class="noofdislike" id="dislike2">0 </span> dislikes
							</p>
							<p class="likedisbttn">
								<span id="thumbsup2" class="fa fa-thumbs-up" onclick="increase('like2','dislike2','thumbsup2','thumbsdown2');"></span> <span id="thumbsdown2" class="fa fa-thumbs-down" onclick="decrease('like2','dislike2','thumbsup2','thumbsdown2');"></span>
							</p>
						</div>

					</div>
					<!-- end of post 2 by creator -->


				</div>
				<!-- end of posted content view -->

				<!-- button to view more previous post -->
				<button type="button" id="viewmore" class="viewmore" onclick="newpost();">View More</button>
			</div>
			<!-- End of main content section -->

			<!-- start of right section suggestion user -->
			<div class="rightfixed">
				<div class="suggesfixed"><p id="suggestion">Suggestion:</p></div>

				<!-- Start of right fixed -->
				<div class="sidebarright">

					<!-- suggested user -->
					<div class="rightcontent">
						<img src="./images/profile/other_profile.png"/>
						<p class="name">User Name</p>
						<a href="#" id="connect1" onclick="changelogo('connect1');">&#x271A; Connect</a>

					</div>

					<div class="rightcontent">
						<img src="./images/profile/other_profile.png"/>
						<p class="name">User Name</p>
						<a href="#" id="connect2" onclick="changelogo('connect2');">&#x271A; Connect</a>
					</div>

					<div class="rightcontent">
						<img src="./images/profile/other_profile.png"/>
						<p class="name">User Name</p>
						<a href="#" id="connect3" onclick="changelogo('connect3');">&#x271A; Connect</a>
					</div>

					<div class="rightcontent">
						<img src="./images/profile/other_profile.png"/>
						<p class="name">User Name</p>
						<a href="#" id="connect4" onclick="changelogo('connect4');">&#x271A; Connect</a>
					</div>

					<div class="rightcontent">
						<img src="./images/profile/other_profile.png"/>
						<p class="name">User Name</p>
						<a href="#" id="connect5" onclick="changelogo('connect5');">&#x271A; Connect</a>
					</div>
					<!-- End of sugested user -->
				</div>
				<!-- End of right fixed -->

			</div>
			<!-- End of right section suggestion user -->


			<!-- Start of about -->
			<div class="rightfixed">
				
				<div class="sidebarright" style="width: 280px;padding: 4px;margin-top: 20px;height: 180px;">
					<hr style="top: -25px;">
				<div class="foot">

					<ul>
						<li><a href="">About</a></li>
						<li><a href="">Contact</a></li>
						<li><a href="">Privacy and Policy</a></li>
						<li><a href="">Help</a></li>
					</ul>
					<img src="./images/logo1.png" style="width: 150px; height:80px;"/>
					<p>Copyright © www.Beshies.com 
						<br>2023 All Rights Reserved.</p>
				</div>
				</div>
			</div>
			<!-- End of about -->

			<!-- message bar at the bottom -->
			<div class="message" id="msg1">
				<button id="msg2" onclick="showhide()">Messaging</button>
				<p> No New Messages.</p>
			</div>
			<!-- End of message bar at the bottom -->

		</div>
		<!-- End of wrapper -->

	</div>
	<!-- End of content section -->

	<script src="./javascript/header.js"></script>
	<script src="./javascript/home.js"></script>
	<script src="./javascript/mode.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
</body>
</html>

