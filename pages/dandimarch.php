<?php

session_start();
?>
<html>

<head>
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
		<h1>Dandi March</h1>
		<h4 class="date">March-April 1930</h4>
		<img src="../images/dandi1.jpeg">
		<img src="../images/dandi2.jpg">
		<img src="../images/dandi3.jpg">
	</DIV>
	</header>

	<div class="story">
		<p>On March 12, 1930, Gandhi set out from his ashram, or religious retreat, at Sabermanti near Ahmedabad with several dozen followers on a trek of some 240 miles to the coastal town of Dandi on the Arabian Sea. There, Gandhi and his supporters were to defy British policy by making salt from seawater. All along the way, Gandhi addressed large crowds, and with each passing day an increasing number of people joined the salt satyagraha. By the time they reached Dandi on April 5, Gandhi was at the head of a crowd of tens of thousands. He spoke and led prayers and early the next morning walked down to the sea to make salt.<br><br>
He had planned to work the salt flats on the beach, encrusted with crystallized sea salt at every high tide, but the police had forestalled him by crushing the salt deposits into the mud. Nevertheless, Gandhi reached down and picked up a small lump of natural salt out of the mud–and British law had been defied. At Dandi, thousands more followed his lead, and in the coastal cities of Bombay (now called Mumbai) and Karachi, Indian nationalists led crowds of citizens in making salt. Civil disobedience broke out all across India, soon involving millions of Indians, and British authorities arrested more than 60,000 people. Gandhi himself was arrested on May 5, but the satyagraha continued without him.<br><br>
On May 21, the poet Sarojini Naidu (1879-1949) led 2,500 marchers on the Dharasana Salt Works, some 150 miles north of Bombay. Several hundred British-led Indian policemen met them and viciously beat the peaceful demonstrators. The incident, recorded by American journalist Webb Miller, prompted an international outcry against British policy in India.</p>
	</div>
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
var el = document.getElementById("likes");
el.innerHTML=count;
var increment=function()
{
	
	count++;
	if(el.innerHTML>=1)
	{
		alert("Wow! you must love this post! but you cant like a post more that once ;((");
	}
	else
	{
		el.innerHTML=count;
	}
	
}
</script>


<script src="js/home.js"></script>

</body>
</html>
