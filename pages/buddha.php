<?php
session_start();
?>
<html>

<head>
<title>Buddha</title>
	<link rel="stylesheet" href="../stylesheets/subpage.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<!--Overall theme-->
	<!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
	
	<link href="https://fonts.googleapis.com/css?family=Josefin+Slab|Work+Sans" rel="stylesheet"> 

</head>
<body>

<!--MENU-->
		<div>
		<ol id="Menu">
  			<li><a href= "../home.html">Home</a></li>
  			<li><a href= "../about.html">About</a></li>
  			<li><a href= "../timeline/timeline.html">Timeline</a></li>
  			<li><a href= "../popular/index.html">Popular</a></li>
		</ol>
		</div>
<main>
	
	
<header>

	<DIV class="animated bounce">
		<h1>Buddha</h1>
		<h4 class="date">460 B.C.</h4>
		<img src="../images/buddha1.jpg">
		<img src="../images/buddha2.jpg">
		<img src="../images/buddha3.jpg">
	</DIV>
	</header>

	<div class="story">
		<p>TBuddhism was started by Gautama Buddha (563â€“483 BC) in Lumbini, Nepal, while he was a rich prince. He gave up everything to find a way to end suffering. His teachings spread, after his death, to Central Asia, Tibet, Sri Lanka, Southeast Asia, and the East Asian countries of China, Mongolia, Korea, and Japan and have now spread to the west. The Buddhas teachings are about suffering and how to overcome it.[4] According to the Buddha, overcoming suffering allows a person to be truly happy. The Buddha taught that if people make good decisions they would be happy and have peace of mind. The Buddha taught that life is imperfect and that we will suffer. He taught that we suffer because of desire, anger and stupidity, and he showed that we could end our suffering by letting go of desires and overcoming anger and stupidity. The complete letting go of these negative influences is called Nirvana, meaning "to extinguish", like putting out the flame of a candle. The end of suffering, when one is fully awake (put an end to ones own ignorance) and has let go of all desire and anger, is also called Enlightenment. 
		<br><br>
		In Buddhism Enlightenment and Nirvana mean the same thing. "To avoid all evil To do good. To purify one's mind. This is the teaching of all the Buddhas." --DhammapÄda, XIV, 5 , Buddhism teaches non-harm and moderation or balance, not going too far one way or the other. Buddhists often meditate while sitting in a special or specific way. They often chant and meditate while walking. Buddhists sometimes do these things to understand the human heart and mind. Sometimes they do these things to understand the way the world works. Sometimes they do these things to find peace. Buddhism does not say if gods exist or not, but one can read many stories about gods in some Buddhist books. Buddhists do not believe that people should look to gods to save them or bring them enlightenment.[5] The gods may have power over world events and they might help people, or they might not. But it''s up to each person to get to enlightenment. Many Buddhists honor gods in ritual. Other Buddhists believe the stories about gods are just there to help us learn about parts of ourselves	</div>
<div>
	
<div class="salute">
		<center>
		<p>Salute if you like the post. Click the flag below! </p>
		<img id="sal" src="../images/salute.png" onclick="increment()">
		<p id="likes"></p>
		</center>
	</div>
	<center>
	<div class="suggestion">
		<p>Search for webpages</p>
		<form action="">
			<input type="text" name="page">
			<input type="submit" value="GET SUGGESTIONS">
		</form>
		<?php

	if (in_array("page",array_keys($_GET)))
		{
			$like= $_GET["page"];
	$array=array("Gandhi"=>"dandimarch.php","Akbar"=>"mughal.php","Buddha"=>'buddha.php',1857=>'../timeline/laksh1.html','EIC'=>'../timeline/laksh2.html','INC'=>'../timeline/laksh3.html','Jallianwala Bagh'=>'../timeline/laksh4.html','Non-cooperation'=>'../timeline/newlaksh.html','Simon'=>'../timeline/laksh6.html','Civil Disobedience'=>'../timeline/laksh7.html','Quit India'=>'../timeline/laksh8.html','INC'=>'../timeline/laksh3.html',);
	$_SESSION[$like]=$array[$like];
	echo "<a href=".$_SESSION[$like].">CLICK HERE!</a>";
		}
		?>	
	</div>
	</center>
</div>
</main>
<!--FOOTER-->
<footer>
	<a href="#" class="fa fa-facebook"></a>
	<a href="#" class="fa fa-twitter"></a>
	<a href="#" class="fa fa-youtube"></a>
	<a href="#" class="fa fa-instagram"></a>
</footer>

<script>

var count=0;
window.count=count;
var el = document.getElementById("likes");
el.innerHTML=count
var increment=function()
{
	
	count++;
	if(el.innerHTML>=1)
	{
		alert("Wow! you must love this post! but you cant like a post more that once ;((");
	}
	else
	{
		el.innerHTML=window.count;
	}
}

function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie() {
    var user=getCookie("count");
    if (user != "") {
        el.innerHTML=window.count;
    } else {
       //user = prompt("Please enter your name:","");
       if (user != "" && user != null) {
           setCookie("count", count, 30);
       }
    }
}
</script>



<script src="js/home.js"></script>

</body>
</html>
