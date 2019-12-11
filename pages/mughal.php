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
		<h1>The Mughals</h1>
		<h4 class="date">1526-1707</h4>
		<img src="../images/mughal1.jpg">
		<img src="../images/mughal2.jpg">
		<img src="../images/mughal3.jpg">
	</DIV>
	</header>

	<div class="story">
		<p>The Mughal Empire did not try to intervene in the local societies during most of its existence, but rather balanced and pacified them through new administrative practices[26][27] and diverse and inclusive ruling elites,[28] leading to more systematic, centralised, and uniform rule.[29] Traditional and newly coherent social groups in northern and western India, such as the Marathas, the Rajputs, the Pashtuns, the Hindu Jats and the Sikhs, gained military and governing ambitions during Mughal rule, which, through collaboration or adversity, gave them both recognition and military experience.
		<br><br>
		The reign of Shah Jahan, the fifth emperor, between 1628 and 1658 was the golden age of Mughal architecture. He erected several large monuments, the best known of which is the Taj Mahal at Agra, as well as the Moti Masjid, Agra, the Red Fort, the Jama Masjid, Delhi, and the Lahore Fort. The Mughal Empire reached the zenith of its territorial expanse during the reign of Aurangzeb and also started its terminal decline in his reign due to Maratha military resurgence under Shivaji Bhosale. During his lifetime, victories in the south expanded the Mughal Empire to its greatest extent, ruling over more than 150 million subjects, nearly one quarter of the world's population at the time, with a GDP of over $90Â billion.[34][35] By the mid-18th century, the Marathas had routed Mughal armies and won over several Mughal provinces from the Punjab to Bengal.[36] Internal dissatisfaction arose due to the weakness of the empire's administrative and economic systems, leading to its break-up and declarations of independence of its former provinces by the Nawab of Bengal, the Nawab of Awadh, the Nizam of Hyderabad and other small states. In 1739, the Mughals were crushingly defeated in the Battle of Karnal by the forces of Nader Shah, the founder of the Afsharid dynasty in Persia, and Delhi was sacked and looted, drastically accelerating their decline. 
		<br><br>
		During the following century Mughal power had become severely limited, and the last emperor, Bahadur Shah II, had authority over only the city of Shahjahanabad. He issued a firman supporting the Indian Rebellion of 1857 and following the defeat was therefore tried by the British East India Company for treason, imprisoned and exiled to Rangoon.[37] The last remnants of the empire were formally taken over by the British, and the Government of India Act 1858 let the British Crown formally assume direct control of India in the form of the new British Raj.</p>
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
                $array= array("Gandhi"=>"dandimarch.php","Akbar"=>"mughal.php","Buddha"=>'buddha.php',1857=>'../timeline/laksh1.html','EIC'=>'../timeline/laksh2.html','INC'=>'../timeline/laksh3.html','Jallianwala Bagh'=>'../timeline/laksh4.html','Non-cooperation'=>'../timeline/newlaksh.html','Simon'=>'../timeline/laksh6.html','Civil Disobedience'=>'../timeline/laksh7.html','Quit India'=>'../timeline/laksh8.html','INC'=>'../timeline/laksh3.html',);
                
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
		el.innerHTML=count;
	}
$_SESSION["count"]=count;
}
</script>


<script src="js/home.js"></script>

</body>
</html>
