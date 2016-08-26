<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Lidt om min uddannelse multimediedesigner, og inspiration til team arbejde og projekter.">
<meta name="keywords" content="uddannelse, multimediedesigner, erhvervsakademi aarhus, eaaa, team arbejde, projekter, wisdom of the crowd">
<meta name="author" content="Michael Blaxkjaer Jensen">
<link href='https://fonts.googleapis.com/css?family=Walter+Turncoat' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="subfolder/normalize.css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="icon" href="favicon2.ico"/>
<title>Michael Blaxkjær - Uddannelse og inspiration til team arbejde og projekter</title>
</head>
<body>
<div class="wrapper">
<header class="topmenu">
<div class="mobilnav">
<ul>
    <li class="menulinie"><a href="index.php">Home</a></li>
    <li class="menulinie"><a href="ommig.php">Om Mig</a></li>
    <li class="menulinie"><a href="portfolio.php">Portfolio</a></li>
    <li class="menulinie"><a class="current" href="uddannelse.php">Uddannelse</a></li>
    <li class="menulinie"><a href="kontakt.php">Kontakt</a></li>
     
    </ul>
</div>
	<div class="noshow">
    
    <nav>
    
    <ul class="mobilnav2">
    <div id="panel">
    <li class="menulinie"><a href="index.php">Home</a></li>
    <li class="menulinie"><a href="ommig.php">Om Mig</a></li>
    <li class="menulinie"><a href="portfolio.php">Portfolio</a></li>
    <li class="menulinie"><a class="current" href="uddannelse.php">Uddannelse</a></li>
    <li class="menulinie"><a href="kontakt.php">Kontakt</a></li>
    </div>
    
    </ul>
 	
 </nav> 
  <div id="flip">&#9776</div>
   </div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
</script>

<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>
</header>

<div class="content">
<div class="box1om">
<h2 class="forsideoverskriftom">Uddannelse

<div class="ommigtekst">Multimediedesigner uddannelsen 1. semester
er opdelt i 4 fag: Kommunikation, Virksomhed,
Interaktion og Design. Uddannelsen foregår
på Erhvervsakademi Aarhus og tager to år.<br><br>
Jeg bestod en hf eksamen før jeg søgte ind på
denne uddannelse og nu forsøger jeg bare at
få så meget viden som muligt indlagret.
Klik på billedet for at komme til eaaa's site.
</div></h2>
<div class="ommigsiteport"> <a href="http://www.eaaa.dk/" target="_blank"> <img src="images/eaaa.png" alt="eaaa"/></a>



</div>

</div>

<div class="box2port">
 
<h2 class="belbinoverskrift">Teams og grupper
<div class="ommigtekst2">
En af grundene til at jeg har valgt denne
uddannelse er at jeg elsker at arbejde i
teams. Helt grundlæggende fungerer vores
hjerner godt sammen og er en fordel ved
opgaveløsning.<br><br> Tjek videoen ud nedenunder
hvis du ikke kender the wisdom of the crowd!
</div>      
</h2>

<div class="video"><iframe src="https://www.youtube.com/embed/iOucwX7Z1HU" frameborder="0" allowfullscreen></iframe></div>



</div>
</div>
</div>

<?php
include "subfolder/footer.php";
?>
</body>
</html>
