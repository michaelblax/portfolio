<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Min portfolio indtil videre. Et par projekter - flere følger snart, men tjek hjemmesiden ud og se videoen.">
<meta name="keywords" content="Portfolio, hjemmeside, video, portefølje">
<meta name="author" content="Michael Blaxkjaer Jensen">
<link href='https://fonts.googleapis.com/css?family=Walter+Turncoat' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="subfolder/normalize.css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="icon" href="favicon2.ico"/>
<title>Michael Blaxkjær - Portfolio forløbigt - her kommer løbende flere projekter</title>
</head>
<body>
<div class="wrapper">
<header class="topmenu">
<div class="mobilnav">
<ul>
    <li class="menulinie"><a href="index.php">Home</a></li>
    <li class="menulinie"><a href="ommig.php">Om Mig</a></li>
    <li class="menulinie"><a class="current" href="portfolio.php">Portfolio</a></li>
    <li class="menulinie"><a href="uddannelse.php">Uddannelse</a></li>
    <li class="menulinie"><a href="kontakt.php">Kontakt</a></li>
     
    </ul>
</div>
	<div class="noshow">
    
    <nav>
    
    <ul class="mobilnav2">
    <div id="panel">
    <li class="menulinie"><a href="index.php">Home</a></li>
    <li class="menulinie"><a href="ommig.php">Om Mig</a></li>
    <li class="menulinie"><a class="current" href="portfolio.php">Portfolio</a></li>
    <li class="menulinie"><a href="uddannelse.php">Uddannelse</a></li>
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
<h2 class="forsideoverskriftom">Portfolio

<div class="ommigtekst">Her kan du se vores første projekt
på Multimediedesigner uddannelsen på eaaa.
Opgaven gik ud på at lave et kampagnesite
for en ny øl brygget af Grauballe Bryghus.<br><br>
Vi blev sat sammen i teams ud fra scoren i
en Belbin test og vi havde to uger til at
færdiggøre projektet. Bedøm selv resultatet
ved at klikke på billedet.
</div></h2>
<div class="ommigsiteport"> <a href="http://oejlen.dk/sensommerbryg/index.php" target="_blank"> <img src="images/sensommer.png" alt="sensommer"/></a></div>

</div>

<div class="box2port">
 
<h2 class="belbinoverskrift">Billedkunst video
<div class="ommigtekst2">
En opgave fra 2014 som gik ud på at få unge
studerende til at vælge billedkunst på hf.<br><br>
De kreative fag er i hastig tilbagegang og denne
video skulle give ungdommen mod på at vælge
de kreative fag frem for de bogligt tunge fag.<br><br>
Vurder selv om ikke videoen inspirerer dig!
</div>      
</h2>

<div class="video"><iframe src="https://www.youtube.com/embed/3ikfC0bwQfY" frameborder="0" allowfullscreen></iframe></div>



</div>
</div>
</div>



<?php
include "subfolder/footer.php";
?>
</body>
</html>

