<!-- TODO: watch, games, campus -->
<!--update finished campus-->

<?php
	session_start();
	if($_SESSION["id"]==null) {
    	header('Location: register.php');
    	// console_log("PENIA");
	}
	// console_log($_SESSION["bday"]);

	function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}

	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Facebook</title>
	<link rel="shortcut icon" href="https://cdn.iconscout.com/icon/free/png-512/facebook-logo-2019-1597680-1350125.png">
	<link rel="stylesheet" href="../css/zhi_redesign_style.css">
	
</head>
<body>

	


	<div class = "navbar">
		
		<img id = "fbicon" src = "https://cdn.iconscout.com/icon/free/png-512/facebook-logo-2019-1597680-1350125.png" width="40px" onclick="gotohome()" height="40px">
		<div class="searchbox">
			<input type="text" name="searchfb" id= "searchfb" placeholder="Search Facebook">
		</div>
			<img id="fbtext" src = "../images/fbtitle.png">

		<div class="profileicons">
			<p id="profilename"  style="float: right;">Larry</p>
			<img id="profilepic"style="float: right;" src="../images/profilepicimg.png" width="25px" height="25px">
		</div>

		<div class="righticonbuttons">
			
			
			<div class="tooltip">
				<img src="../images/add.png" width="40px" height="40px">
				<span class="tooltiptext">Create</span>
			</div>	
			<div class="tooltip">
				<img src="../images/messageicon.png" width="40px" height="40px">
				<span class="tooltiptext">Messaging</span>
			</div>	
			<div class="tooltip">
				<img src="../images/notif.png" width="40px" height="40px">
				<span class="tooltiptext">Notifications</span>
			</div>	
			<div class="tooltip">
				<img src="../images/trinagle.png" width="40px" height="40px" onclick="showpop()">
				<span class="tooltiptext">Account</span>
			</div>			
		</div>

	</div>



	<div class="popout" id= "popout">
		<div class="popouticons">
			<img id="profilepic"style="float: left;" src="../images/profilepicimg.png" width="55px" height="55px">
			<div class= "description">
				<p><b>Larry Zhi</b></p>
				<a href="https://www.facebook.com/larry.zhi.58/" target="blank">See Your Profile</a>
				<p id = "logout"><a href="logout.php">Logout</a></p>
			</div>
			
		</div>	
	</div>

	<div id = "table" class = "table">

		<h1>Shortcuts</h1>

		<div class="horizontal">
			<div class="vertically" onclick="gotocampus()">
				<p>Campus</p>
			</div>
			<div class="vertically">
				<p>Marketplace</p>
			</div>
		</div>
		<div class="horizontal">
			<div class="vertically" onclick="gotopages()">
				<p>Your Pages </p>
			</div>
			<div class="vertically" onclick="gotogames()">
				<p>Games</p>
			</div>
		</div>
		<div class="horizontal">
			<div class="vertically">
				<p>Pages</p>
			</div>
			<div class="vertically">
				<p>Movies</p>
			</div>
		</div>
		<div class="horizontal">
			<div class="vertically">
				<p>Friends</p>
			</div>
			<div class="vertically">
				<p>Rooms</p>
			</div>
		</div>	
		<div class="horizontal">
			<div class="vertically">
				<p>Your Pages</p>
			</div>
			<div class="vertically">
				<p>Rooms</p>
			</div>
		</div>	
	</div>

<!-- 	<img src="../images/open.png" width="45px" height="45px" id="open" onclick="showmore()"> -->
	<img src="../images/cancel.png" width="45px" height="25px" id="close" onclick="showless()">


	<div class = "midcontainer">

		<div class = "stories">
			<img src="../images/dandy.jpg" width="130px" height=250px">
			<img src="../images/jelly.jpg" width="130px" height=250px">
			<img src="../images/light.jpg" width="130px" height=250px">
			<img src="../images/canyon.jpg" width="130px" height=250px">
			<img src="../images/camp.jpg" width="130px" height=250px">
		</div>


		<div class = "status">
			<div class="topstatus">
				<img src="../images/profilepicimg.png" width="44px" height="44px">
				<input class="statustext" type="text" name="statustext" placeholder="What's on your mind Larry?" id="statusinput">
			</div>
			<hr class="break">
			<div class="bottomstatus">
				<div class="subdivstatus">
					<img src="../images/add.png" width="35px" height="35px">
					<p>Live Video</p>
				</div>
				<div class="subdivstatus">
					<img src="../images/add.png" width="35px" height="35px">
					<p>Photo/Video</p>
				</div>
				<div class="subdivstatus">
					<img src="../images/add.png" width="35px" height="35px">
					<p>Feeling/Activities</p>
				</div>
			</div>
		</div>

		<div class = "rooms">
			<div class="toproom">
				<img src="../images/profilepicimg.png" width="30px" height="30px">
				<p><b>Rooms</b> - Video Chat With Friends</p>
			</div>
			<div class="bottomroom">
				<img src="../images/profilepicimg.png" width="35px" height="35px">
				<img src="../images/profilepicimg.png" width="35px" height="35px">
				<img src="../images/profilepicimg.png" width="35px" height="35px">
				<img src="../images/profilepicimg.png" width="35px" height="35px">
				<img src="../images/profilepicimg.png" width="35px" height="35px">
				<img src="../images/profilepicimg.png" width="35px" height="35px">
				<img src="../images/profilepicimg.png" width="35px" height="35px">
				<img src="../images/profilepicimg.png" width="35px" height="35px">
				<img src="../images/profilepicimg.png" width="35px" height="35px">
				<img src="../images/profilepicimg.png" width="35px" height="35px">
				<img src="../images/profilepicimg.png" width="35px" height="35px">
			</div>
		</div>

	<div class = "postcontain">
		<div class = "post">
			<div class="toppost">
				<img src="../images/profilepicimg.png" width="40px" height="40px">
				<div class="postheader">
					<p>Larry Zhi -> Web Design Posts</p>
					<p class="timestamp">1 hr 9 min ago</p>
				</div>
			</div>
			<img class="postcontent" src="../images/canyonland.jpg" width="100%">	
			<p>Likes: 39</p>
			<hr>
			<div class="likecomment">
				<div class="imgp">
					<img src="https://facebookbrand.com/wp-content/uploads/2018/09/thumb.png?w=420&h=421" 
					width="25px" height="25px">
					<p>Like</p>
					
				</div>
				<div class="imgp">
					<img src="https://img.pngio.com/comment-icon-transparent-184635-free-icons-library-comment-icon-png-1600_1600.jpg"
					id= "commentimg" 
					width="	25px" height="25px">
					<p>Comment</p>
					
				</div>


			</div>
		
			<hr>
			<div id="commm"></div>

			<div class="writecomment">
				<img src="../images/profilepicimg.png"
					id= "commentimg" 
					width="30px" height="30	px">
					
				<input class="commenttext" type="text" name="statustext" placeholder="Write a comment" id ="comment123">

			</div>	
		</div>

	




	<div class = "post">
			<div class="toppost">
				<img src="../images/profilepicimg.png" width="40px" height="40px">
				<div class="postheader">
					<p>Larry Zhi -> Web Design Posts</p>
					<p class="timestamp">1 hr 9 min ago</p>
				</div>
			</div>
			<img class="postcontent" src="../images/sushi.jpg" width="100%">	
			<p>Likes: 39</p>
			<hr>
			<div class="likecomment">
				<div class="imgp">
					<img src="https://facebookbrand.com/wp-content/uploads/2018/09/thumb.png?w=420&h=421" 
					width="25px" height="25px">
					<p>Like</p>
					
				</div>
				<div class="imgp">
					<img src="https://img.pngio.com/comment-icon-transparent-184635-free-icons-library-comment-icon-png-1600_1600.jpg"
					id= "commentimg" 
					width="	25px" height="25px">
					<p>Comment</p>
					
				</div>


			</div>
		
			<hr>
			<div id="commm"></div>

			<div class="writecomment">
				<img src="../images/profilepicimg.png"
					id= "commentimg" 
					width="30px" height="30	px">
					
				<input class="commenttext" type="text" name="statustext" placeholder="Write a comment" id ="comment1234">

			</div>	
		</div>

	</div>
</div>



<div class = "rightdrawer">


		<p>Birthdays</p>
		<ul>
			<li>
				<img src="https://i.pinimg.com/originals/3f/2f/48/3f2f48437d350bff3effd49a9d8bc351.png" width="40px" height="40px">
				<p>Happy Birthday Andrew!</p>
			</li>
			<li>
				<img src="https://i.pinimg.com/originals/3f/2f/48/3f2f48437d350bff3effd49a9d8bc351.png" width="40px" height="40px">
				<p>Happy Birthday Andrew!</p>
			</li>
		</ul>

		<hr>

		<p>Contacts</p>

		<ul>
			<li>
				<img src="../images/profilepicimg.png" width="40px" height="40px">
				<p>Andrew Zheng</p>
			</li>
			<li>
				<img src="../images/profilepicimg.png" width="40px" height="40px">
				<p>Andrew Zheng</p>
			</li>
			<li>
				<img src="../images/profilepicimg.png" width="40px" height="40px">
				<p>Andrew Zheng</p>
			</li>
			<li>
				<img src="../images/profilepicimg.png" width="40px" height="40px">
				<p>Andrew Zheng</p>
			</li>
			<li>
				<img src="../images/profilepicimg.png" width="40px" height="40px">
				<p>Andrew Zheng</p>
			</li>
			<li>
				<img src="../images/profilepicimg.png" width="40px" height="40px">
				<p>Andrew Zheng</p>
			</li>
			<li>
				<img src="../images/profilepicimg.png" width="40px" height="40px">
				<p>Andrew Zheng</p>
			</li>
			<li>
				<img src="../images/profilepicimg.png" width="40px" height="40px">
				<p>Andrew Zheng</p>
			</li>
			<li>
				<img src="../images/profilepicimg.png" width="40px" height="40px">
				<p>Andrew Zheng</p>
			</li>
			<li>
				<img src="../images/profilepicimg.png" width="40px" height="40px">
				<p>Andrew Zheng</p>
			</li>
			<li>
				<img src="../images/profilepicimg.png" width="40px" height="40px">
				<p>Andrew Zheng</p>
			</li>
			<li>
				<img src="../images/profilepicimg.png" width="40px" height="40px">
				<p>Andrew Zheng</p>
			</li>
			<li>
				<img src="../images/profilepicimg.png" width="40px" height="40px">
				<p>Andrew Zheng</p>
			</li>

		</ul>	
	</div>

<!-- <img src="../images/add.png" id="friends"> -->


<img src="../images/menu.png" id="menu" onclick="showmore()">

<p id="privacy" style="font-size: 12px; font-weight: 200;">Privacy  · Terms  · Advertising  · Ad Choices   · Cookies  ·   · Facebook © 2020
 We definitely do not steal your data :))</p>


 <script>
	var passedArray =  
    <?php echo json_encode($_SESSION); ?>;
    console.log(passedArray);
    var fname = passedArray.fname;
    console.log(fname);
    document.getElementById("profilename").innerHTML= fname;
</script>




	<script src="../script/zhi_redesign_script.js" defer=""></script>


</body>
</html>