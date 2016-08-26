<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Information om kontakt muligheder, e-mail adresse er tilgængelig">
<meta name="keywords" content="kontakt, email, mail">
<meta name="author" content="Michael Blaxkjaer Jensen">
<link href='https://fonts.googleapis.com/css?family=Walter+Turncoat' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="subfolder/normalize.css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="icon" href="favicon2.ico"/>
<title>Michael Blaxkjær - Kontakt mig her på mail</title>
</head>
<body>
<div class="wrapper">
<header class="topmenu">
<div class="mobilnav">
<ul>
    <li class="menulinie"><a href="index.php">Home</a></li>
    <li class="menulinie"><a href="ommig.php">Om Mig</a></li>
    <li class="menulinie"><a href="portfolio.php">Portfolio</a></li>
    <li class="menulinie"><a href="uddannelse.php">Uddannelse</a></li>
    <li class="menulinie"><a class="current" href="kontakt.php">Kontakt</a></li>
     
    </ul>
</div>
	<div class="noshow">
    
    <nav>
    
    <ul class="mobilnav2">
    <div id="panel">
    <li class="menulinie"><a href="index.php">Home</a></li>
    <li class="menulinie"><a href="ommig.php">Om Mig</a></li>
    <li class="menulinie"><a href="portfolio.php">Portfolio</a></li>
    <li class="menulinie"><a href="uddannelse.php">Uddannelse</a></li>
    <li class="menulinie"><a class="current" href="kontakt.php">Kontakt</a></li>
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
<h2 class="forsideoverskriftom">Kontakt

<div class="ommigtekst">Du kan kontakte mig på følgende mail-adresse:
<a href="mailto:michael_blax@hotmail.com">michael_blax@hotmail.com</a>
 og jeg vender tilbage hurtigst muligt.

</div></h2>
<div class="konimg">  <img src="images/kontakt2.png" alt="Michael Blaxkjær"/>
</div>

</div>


</div>
</div>





















<!--
<div class="content">
<h1 class="ommigoverskrift">Kontakt</h1>
<div class="kontaktimage"> <img src="images/kontakt2.png" alt="Michael Blaxkjær"/></div>
<h2 class="mail">mail: donblaxkjaer@gmail.com</h2>
<div class="kontakttekst">
Jeg svarer tilbage hurtigst muligt!

</div>


</div>
</div>
-->












<?php
include "subfolder/footer.php";
?>

</body>
</html>
