<?php session_start();?>
<head>
<body>
<body style= "background-color:#33FF66"><!-- Light Green-->
<!--This is the second part of the survey
for the artists! -->

<!-- 
This is a test of what our survey will look like 
this is just a demo!
the purpous is to get the user's taste in music 
by asking them what their top 5-10 generes of music are 
then asking them what they like (Artists wise) out of a list of 
total 20 generes and the top 10 in each 
in the full version this will be used when they first login to 
our project
@author Alexandria Brelsford 
@Company Genisis
-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<p>
<br >
</p>
<font size="6"><h2 align="center",style="color:black">Genisis Survey Demo</h2></font>
<center><img class="header-img" align="center" src ="https://i.imgur.com/OTo4VxG.jpg"  alt="Music note with a circle around it and a black background"/></center>


<h4 align="left", style="color:black">Instructions</h4>
<font size="4.5">
<p style="color:black">
Hello! Welcome to part two of the survey!<br>
in this part we will explore the top 10 artists in the<br>
genres you chose!<br>
</p>
<form action="SurveyFinish.php" method="post">
<!-- Variables-->
<!--
CHANGE THE NAMES IF THE RANKER CHANGES WHEN THE SERVERS ARE DOWN 
TO UPDATE!!!
-->
<?php
//Variables 
/** These will be used to PRINT the genre names!*/
$one="Hip-Hop/Rap";
$two="Pop";
$three="Rock";
$four="R&B";
$five="Latin";
$six="Country";
$seven="EDM(Electronic Dance Music)";
$eight="Religious";
$nine="Stage and Screen";
$ten="World";
?>
<!-- Setting and unsetting what the survey user took-->
<?php
	//1
	if(! empty($_POST["one"]))
	{
	
		
		$_SESSION["one"]=$_POST["one"];

	}	
	else 
	{
		unset($_SESSION["one"]);
	}
	
	//2
	if(! empty($_POST["two"]))
	{
	
		
		$_SESSION["two"]=$_POST["two"];

	}	
	else 
	{
		unset($_SESSION["two"]);
	}
	
	//3
	if(! empty($_POST["three"]))
	{
	
		
		$_SESSION["three"]=$_POST["three"];

	}	
	else
	{ 
		unset($_SESSION["three"]);
	}
	
	//4
	if(! empty($_POST["four"]))
	{
	
		
		$_SESSION["four"]=$_POST["four"];

	}	
	else 
	{
		unset($_SESSION["four"]);
	}
	
	//5
	if(! empty($_POST["five"]))
	{
	
		
		$_SESSION["five"]=$_POST["five"];

	}	
	else 
	{
		unset($_SESSION["five"]);
	}
	
	//6
	if(! empty($_POST["six"]))
	{
	
		
		$_SESSION["six"]=$_POST["six"];

	}	
	else 
	{
		unset($_SESSION["six"]);
	}
	
	//7
	if(! empty($_POST["seven"]))
	{
	
		
		$_SESSION["seven"]=$_POST["seven"];

	}	
	else 
	{
		unset($_SESSION["seven"]);
	}
	
	//8
	if(! empty($_POST["eight"]))
	{
	
		
		$_SESSION["eight"]=$_POST["eight"];

	}	
	else 
	{
		unset($_SESSION["eight"]);
	}
	
	//9
	if(! empty($_POST["nine"]))
	{
	
		
		$_SESSION["nine"]=$_POST["nine"];

	}	
	else 
	{
		unset($_SESSION["nine"]);
	}
	
	//10
	if(! empty($_POST["ten"]))
	{
	
		
		$_SESSION["ten"]=$_POST["ten"];

	}	
	else 
	{
		unset($_SESSION["ten"]);
	}
	
	//11
	if(! empty($_POST["eleven"]))
	{
	
		
		$_SESSION["eleven"]=$_POST["eleven"];

	}	
	else 
	{
		unset($_SESSION["eleven"]);
	}
	
	//12
	if(! empty($_POST["twelve"]))
	{
	
		
		$_SESSION["twelve"]=$_POST["twelve"];

	}	
	else
	{
		unset($_SESSION["twelve"]);
	}
	
	//13
	if(! empty($_POST["thirteen"]))
	{
	
		
		$_SESSION["thirteen"]=$_POST["thirteen"];

	}	
	else 
	{
	unset($_SESSION["thirteen"]);
	}
	
	//14
	if(! empty($_POST["fourteen"]))
	{
	
		
		$_SESSION["fourteen"]=$_POST["fourteen"];

	}	
	else
	{
		unset($_SESSION["fourteen"]);
	} 
	
	//15
	if(! empty($_POST["fifteen"]))
	{
	
		
		$_SESSION["fifteen"]=$_POST["fifteen"];

	}	
	else 
	{
		unset($_SESSION["fifteen"]);
	} 
?>
	<!-- Artists Survey-->
	<font size="4.5">
	<p style="color:black">
	<?php
	//one
	if(isset($_POST["one"]))
	{
		echo "Please choose your favorite ".$one." artist <br />";?>
<!--
CHANGE THE NAMES IF THE RANKER CHANGES WHEN THE SERVERS ARE DOWN 
TO UPDATE!!!
-->
		<!--1-->
		<input type="checkbox" name="g1a1">Drake<br>
		
		
		<!--2-->
		<input type="checkbox" name="g1a2">Post Malone<br>
		
		
		<!--3-->
		<input type="checkbox" name="g1a3">Cardi B<br>
		
		
		<!--4-->
		<input type="checkbox" name="g1a4">XXXTENTACION<br>
		
		
		<!--5-->
		<input type="checkbox" name="g1a5">Migos<br>
		
		
		<!--6-->
		<input type="checkbox" name="g1a6">Travis Scott<br>
		
		
		<!--7-->
		<input type="checkbox" name="g1a7">Eminem<br>
		
		
		<!--8-->
		<input type="checkbox" name="g1a8">Juice WRLD<br>
		
		
		<!--9-->
		<input type="checkbox" name="g1a9">Kendrick Lamar<br>
		
		
		<!--10-->
		<input type="checkbox" name="g1a10">Bruno Mars<br>
		
		<p>
		<br>
		</p>
		<!-- https://www.billboard.com/charts/year-end/2018/top-r-and-b-hip-hop-artists-->
<?php		
	}
	//two
	if(isset($_POST["two"]))
	{
		echo "Please choose your favorite ".$two." artist <br />";?>
<!--
CHANGE THE NAMES IF THE RANKER CHANGES WHEN THE SERVERS ARE DOWN 
TO UPDATE!!!
-->
		<!--1-->
		<input type="checkbox" name="g2a1">Post Malone<br>
		
		
		<!--2-->
		<input type="checkbox" name="g2a2">Dua Lipa<br>
		
		
		<!--3-->
		<input type="checkbox" name="g2a3">Camila Cabello<br>
		
		
		<!--4-->
		<input type="checkbox" name="g2a4">Ariana Grande<br>
		
		
		<!--5-->
		<input type="checkbox" name="g2a5">Maroon 5<br>
		
		
		<!--6-->
		<input type="checkbox" name="g2a6">Halsey<br>
		
		
		<!--7-->
		<input type="checkbox" name="g2a7">Drake<br>
		
		
		<!--8-->
		<input type="checkbox" name="g2a8">Imagine Dragons<br>
		
		
		<!--9-->
		<input type="checkbox" name="g2a9">Selena Gomez<br>
		
		
		<!--10-->
		<input type="checkbox" name="g2a10">NF<br>
		
		<p>
		<br>
		</p>
		<!-- https://www.billboard.com/charts/year-end/2018/pop-songs-artists -->
<?php		
	}
		//three
	if(isset($_POST["three"]))
	{
		echo "Please choose your favorite ".$three." artist <br />";?>
<!--
CHANGE THE NAMES IF THE RANKER CHANGES WHEN THE SERVERS ARE DOWN 
TO UPDATE!!!
-->
		<!--1-->
		<input type="checkbox" name="g3a1">Imagine Dragons<br>
		
		
		<!--2-->
		<input type="checkbox" name="g3a2">Portugal. The Man<br>
		
		
		<!--3-->
		<input type="checkbox" name="g3a3">Panic! At The Disco<br>
		
		
		<!--4-->
		<input type="checkbox" name="g3a4">Twenty One Pilets<br>
		
		
		<!--5-->
		<input type="checkbox" name="g3a5">Five Finger Death Punch<br>
		
		
		<!--6-->
		<input type="checkbox" name="g3a6">Queen<br>
		
		
		<!--7-->
		<input type="checkbox" name="g3a7">Foster The People<br>
		
		
		<!--8-->
		<input type="checkbox" name="g3a8">Lovelytheband<br>
		
		
		<!--9-->
		<input type="checkbox" name="g3a9">Bad Wolves<br>
		
		
		<!--10-->
		<input type="checkbox" name="g3a10">the Beatles<br>
		
		<p>
		<br>
		</p>
		<!-- https://www.billboard.com/charts/year-end/2018/top-rock-artists-->
<?php		
	}
	//four
	if(isset($_POST["four"]))
	{
		echo "Please choose your favorite ".$four." artist <br />";?>
<!--
CHANGE THE NAMES IF THE RANKER CHANGES WHEN THE SERVERS ARE DOWN 
TO UPDATE!!!
-->
		<!--1-->
		<input type="checkbox" name="g4a1">Drake<br>
		
		
		<!--2-->
		<input type="checkbox" name="g4a2">Post Malone<br>
		
		
		<!--3-->
		<input type="checkbox" name="g4a3">Cardi B.<br>
		
		
		<!--4-->
		<input type="checkbox" name="g4a4">XXXTENTACION<br>
		
		
		<!--5-->
		<input type="checkbox" name="g4a5">Migos<br>
		
		
		<!--6-->
		<input type="checkbox" name="g4a6">Travis Scott<br>
		
		
		<!--7-->
		<input type="checkbox" name="g4a7">Eminem<br>
		
		
		<!--8-->
		<input type="checkbox" name="g4a8">Juice WRLD<br>
		
		
		<!--9-->
		<input type="checkbox" name="g4a9">Kendrick Lamar<br>
		
		
		<!--10-->
		<input type="checkbox" name="g4a10">Bruno Mars<br>
		
		<p>
		<br>
		</p>
		<!-- https://www.billboard.com/charts/year-end/2018/top-r-and-b-hip-hop-artists -->
<?php		
	}
	//Five
	if(isset($_POST["five"]))
	{
		echo "Please choose your favorite ".$five." artist <br />";?>
<!--
CHANGE THE NAMES IF THE RANKER CHANGES WHEN THE SERVERS ARE DOWN 
TO UPDATE!!!
-->
		<!--1-->
		<input type="checkbox" name="g5a1">Ozuna<br>
		
		
		<!--2-->
		<input type="checkbox" name="g5a2">J Balvin<br>
		
		
		<!--3-->
		<input type="checkbox" name="g5a3">Romeo Santos<br>
		
		
		<!--4-->
		<input type="checkbox" name="g5a4">Daddy Yankee<br>
		
		
		<!--5-->
		<input type="checkbox" name="g5a5">Maluma<br>
		
		
		<!--6-->
		<input type="checkbox" name="g5a6">Banda Sinaloense MS de Sergio Lizarraga<br>
		
		
		<!--7-->
		<input type="checkbox" name="g5a7">Nicky Jam<br>
		
		
		<!--8-->
		<input type="checkbox" name="g5a8">Bad Bunny<br>
		
		
		<!--9-->
		<input type="checkbox" name="g5a9">Shakira<br>
		
		
		<!--10-->
		<input type="checkbox" name="g5a10">Luis Fonsi<br>
		
		<p>
		<br>
		</p>
		<!-- https://www.billboard.com/charts/year-end/2018/top-r-and-b-hip-hop-artists -->
<?php		
	}
	//six
	if(isset($_POST["six"]))
	{
		echo "Please choose your favorite ".$six." artist <br />";?>
<!--
CHANGE THE NAMES IF THE RANKER CHANGES WHEN THE SERVERS ARE DOWN 
TO UPDATE!!!
-->
		<!--1-->
		<input type="checkbox" name="g6a1">Chris Stapleton<br>
		
		
		<!--2-->
		<input type="checkbox" name="g6a2">Kane Brown<br>
		
		
		<!--3-->
		<input type="checkbox" name="g6a3">Florida Georgia Line<br>
		
		
		<!--4-->
		<input type="checkbox" name="g6a4">Luke Combs<br>
		
		
		<!--5-->
		<input type="checkbox" name="g6a5">Thomas Rhett<br>
		
		
		<!--6-->
		<input type="checkbox" name="g6a6">Luke Bryan<br>
		
		
		<!--7-->
		<input type="checkbox" name="g6a7">Jason Aldean<br>
		
		
		<!--8-->
		<input type="checkbox" name="g6a8">Dan+Shay<br>
		
		
		<!--9-->
		<input type="checkbox" name="g6a9">Kenny Chesney<br>
		
		
		<!--10-->
		<input type="checkbox" name="g6a10">Blake Shelton<br>
		
		<p>
		<br>
		</p>
		<!-- https://www.billboard.com/charts/year-end/2018/top-r-and-b-hip-hop-artists -->
<?php		
	}
	//seven
	if(isset($_POST["seven"]))
	{
		echo "Please choose your favorite ".$seven." artist <br />";?>
<!--
CHANGE THE NAMES IF THE RANKER CHANGES WHEN THE SERVERS ARE DOWN 
TO UPDATE!!!
-->
		<!--1-->
		<input type="checkbox" name="g7a1">The Chainsmokers<br>
		
		
		<!--2-->
		<input type="checkbox" name="g7a2">Calvin Harris<br>
		
		
		<!--3-->
		<input type="checkbox" name="g7a3">Kygo<br>
		
		
		<!--4-->
		<input type="checkbox" name="g7a4">Marshmello<br>
		
		
		<!--5-->
		<input type="checkbox" name="g7a5">ODESZA<br>
		
		
		<!--6-->
		<input type="checkbox" name="g7a6">Lady Gaga<br>
		
		
		<!--7-->
		<input type="checkbox" name="g7a7">Avicii<br>
		
		
		<!--8-->
		<input type="checkbox" name="g7a8">Zedd<br>
		
		
		<!--9-->
		<input type="checkbox" name="g7a9">David Guetta<br>
		
		
		<!--10-->
		<input type="checkbox" name="g7a10">Grey<br>
		
		<p>
		<br>
		</p>
		<!-- https://www.billboard.com/charts/year-end/2018/top-r-and-b-hip-hop-artists -->
<?php		
	}
	//eight
	if(isset($_POST["eight"]))
	{
		echo "Please choose your favorite ".$eight." artist <br />";?>
<!--
CHANGE THE NAMES IF THE RANKER CHANGES WHEN THE SERVERS ARE DOWN 
TO UPDATE!!!
-->
		<!--1-->
		<input type="checkbox" name="g8a1">Lauren Daigle<br>
		
		
		<!--2-->
		<input type="checkbox" name="g8a2">MercyME<br>
		
		
		<!--3-->
		<input type="checkbox" name="g8a3">Hillsong Worship<br>
		
		
		<!--4-->
		<input type="checkbox" name="g8a4">Cory Asbury<br>
		
		
		<!--5-->
		<input type="checkbox" name="g8a5">Elevation Worship<br>
		
		
		<!--6-->
		<input type="checkbox" name="g8a6">tobyMac<br>
		
		
		<!--7-->
		<input type="checkbox" name="g8a7">for KING & COUNTRY<br>
		
		
		<!--8-->
		<input type="checkbox" name="g8a8">Zach Williams<br>
		
		
		<!--9-->
		<input type="checkbox" name="g8a9">Hillsong UNITED<br>
		
		
		<!--10-->
		<input type="checkbox" name="g8a10">Chris Tomlin<br>
		
		<p>
		<br>
		</p>
		<!-- https://www.billboard.com/charts/year-end/2018/top-r-and-b-hip-hop-artists -->
<?php		
	}
	//nine
	if(isset($_POST["nine"]))
	{
		echo "Please choose your favorite ".$nine." artist <br />";?>
<!--
CHANGE THE NAMES IF THE RANKER CHANGES WHEN THE SERVERS ARE DOWN 
TO UPDATE!!!
-->
		<!--1-->
		<input type="checkbox" name="g9a1">BTS<br>
		
		
		<!--2-->
		<input type="checkbox" name="g9a2">LAY<br>
		
		
		<!--3-->
		<input type="checkbox" name="g9a3">Celtic Woman<br>
		
		
		<!--4-->
		<input type="checkbox" name="g9a4">Celtic Thunder<br>
		
		
		<!--5-->
		<input type="checkbox" name="g9a5">EXO<br>
		
		
		<!--6-->
		<input type="checkbox" name="g9a6">J-Hope<br>
		
		
		<!--7-->
		<input type="checkbox" name="g9a7">RM<br>
		
		
		<!--8-->
		<input type="checkbox" name="g9a8">Loreena McKennitt<br>
		
		
		<!--9-->
		<input type="checkbox" name="g9a9">BLACKPINK<br>
		
		
		<!--10-->
		<input type="checkbox" name="g9a10">NCT 127<br>
		
		<p>
		<br>
		</p>
		<!-- https://www.billboard.com/charts/year-end/2018/top-r-and-b-hip-hop-artists -->
<?php		
	}
	//ten
	if(isset($_POST["ten"]))
	{
		echo "Please choose your favorite ".$ten." artist <br />";?>
<!--
CHANGE THE NAMES IF THE RANKER CHANGES WHEN THE SERVERS ARE DOWN 
TO UPDATE!!!
-->
		<!--1-->
		<input type="checkbox" name="g10a1">John Coltrane<br>
		
		
		<!--2-->
		<input type="checkbox" name="g10a2">Frank Sinatra<br>
		
		
		<!--3-->
		<input type="checkbox" name="g10a3">Diana Krall<br>
		
		
		<!--4-->
		<input type="checkbox" name="g10a4">Van Morrison<br>
		
		
		<!--5-->
		<input type="checkbox" name="g10a5">Tony Bennett<br>
		
		
		<!--6-->
		<input type="checkbox" name="g10a6">Willie Nelson<br>
		
		
		<!--7-->
		<input type="checkbox" name="g10a7">Kamasi Washington<br>
		
		
		<!--8-->
		<input type="checkbox" name="g10a8">Paul Simon<br>
		
		
		<!--9-->
		<input type="checkbox" name="g10a9">Herb Alpert<br>
		
		
		<!--10-->
		<input type="checkbox" name="g10a10">Boney James<br>

		<!-- https://www.billboard.com/charts/year-end/2018/top-r-and-b-hip-hop-artists -->
<?php		
	}
?>

	<input type="submit" value="Finish Survey">

</form>
<h6 style="color:white"> Coded by Alex Brelsford</h6>
<p>
<br>
<br>
</p>

</body>
<head>