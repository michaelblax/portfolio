<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Her kan du finde oplysninger om mig, min Belbin team rolle og min score">
<meta name="keywords" content="Om mig, multimediedesigner, belbin, team, score, mål med uddannelsen">
<meta name="author" content="Michael Blaxkjaer Jensen">
<link href='https://fonts.googleapis.com/css?family=Walter+Turncoat' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="subfolder/normalize.css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="icon" href="favicon2.ico"/>
<title>Michael Blaxkjær - Om Mig og min Belbin team rolle og score i test</title>
</head>
<body>
<div class="wrapper">

<header class="topmenu">
<div class="mobilnav">
<ul>
    <li class="menulinie"><a href="index.php">Home</a></li>
    <li class="menulinie"><a class="current" href="ommig.php">Om Mig</a></li>
    <li class="menulinie"><a href="portfolio.php">Portfolio</a></li>
    <li class="menulinie"><a href="uddannelse.php">Uddannelse</a></li>
    <li class="menulinie"><a href="kontakt.php">Kontakt</a></li>
     
    </ul>
</div>
	<div class="noshow">
    
    <nav>
    
    <ul class="mobilnav2">
    <div id="panel">
    <li class="menulinie"><a href="index.php">Home</a></li>
    <li class="menulinie"><a class="current" href="ommig.php">Om Mig</a></li>
    <li class="menulinie"><a href="portfolio.php">Portfolio</a></li>
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






<!--<header class="topmenu">
<nav>
<ul>
    <li class="menulinie"><a  href="index.php">Home</a></li>
    <li class="menulinie"><a class="current" href="ommig.php">Om Mig</a></li>
    <li class="menulinie"><a href="portfolio.php">Portfolio</a></li>
    <li class="menulinie"><a href="uddannelse.php">Uddannelse</a></li>
    <li class="menulinie"><a href="kontakt.php">Kontakt</a></li>
    
    </ul>
</nav>  -->  





</header>
<div class="content">
<div class="box1om">


<h2 class="forsideoverskriftom">Om Mig

<div class="ommigtekst">Mit navn er Michael og er 33 år gammel.
Jeg bor i Horsens med min dejlige kæreste
Maja og jeg læser til Multimediedesigner
på Erhvervsakademi Aarhus. <br><br>Mit ultimative
mål med min uddannelse er at blive selvstændig
og gerne milliardær på en spektakulær idé.
</div></h2>
<div class="ommigsite"> <img src="images/ommig3.png" alt="om mig"/></div>

</div>

<div class="box2om">
 
<h2 class="belbinoverskrift">Belbin team rolle:
<div class="ommigtekst2">
Udfra scoren i en Belbin test er min primære
rolle "Plant". Jeg har mange gode idéer, men jeg
føler mig godt rustet til alle roller i et team.<br><br>
Som det kan ses på scoren er pointene også delt
meget godt rundt i de forskellige team roller.
</div>      
</h2>

<div class="belbinimage"><a href="images/belbin.png" target="_blank"> <img src="images/belbin.png" alt="om mig"/></a></div>



</div>
</div>
</div>
<?php
include "subfolder/footer.php";
?>

</body>
</html>