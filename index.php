<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Michael Blaxkjaer Jensen - Multimediedesigner - digitalt selvportræt. Se blandt andet mit portfolio og se min Belbin team rolle.">
<meta name="keywords" content="Michael Blaxkjær Jensen, Michael Blaxkjaer, multimediedesigner, digitalt selvportræt, portfolio, uddannelse, kontakt, webdesign">
<meta name="author" content="Michael Blaxkjaer Jensen">
<link href='https://fonts.googleapis.com/css?family=Walter+Turncoat' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="subfolder/normalize.css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="icon" href="favicon2.ico"/>
<title>Michael Blaxkjær - Multimediedesigner - digitalt selvportræt</title>
</head>

<body>
    <div class="wrapper">
        <header class="topmenu">
            <div class="mobilnav">
                <ul>
                    <li class="menulinie"><a class="current" href="index.php">Home</a></li>
                    <li class="menulinie"><a href="ommig.php">Om Mig</a></li>
                    <li class="menulinie"><a href="portfolio.php">Portfolio</a></li>
                    <li class="menulinie"><a href="uddannelse.php">Uddannelse</a></li>
                    <li class="menulinie"><a href="kontakt.php">Kontakt</a></li>
                </ul>
            </div>
            <div class="noshow">
                <nav>
                <ul class="mobilnav2">
                <div id="panel">
                <li class="menulinie"><a class="current" href="index.php">Home</a></li>
                <li class="menulinie"><a href="ommig.php">Om Mig</a></li>
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
        </header>
        <div class="content">
        <div class="box1">
        <div class="ommig1"> <a href="ommig.php"><img src="images/ommig2.png" alt="om mig"/></a></div> 
        <h2 class="forsideoverskrift">Om Mig
            <a href="ommig.php" class="ommigtekstforside">Her kan du læse
            <br>lidt om mig!</a></h2>
        </div>
        <div class="box2">
        <div class="portfolio1"> <a href="portfolio.php"><img src="images/sen.png" alt="portfolio"/></a></div> 
        <h2 class="forsideoverskrift2">Portfolio
        <a href="portfolio.php" class="portfoliotekstforside">Se tidligere<br>produktioner</a></h2>    
          </div>
          <div class="box3">     
         <div class="uddannelse1"> <a href="uddannelse.php"><img src="images/udd.png" alt="uddannelse"/></a></div>
         <h2 class="forsideoverskrift3">Uddannelse
         <a href="uddannelse.php" class="uddannelsetekstforside">Læs mere om min<br>uddannelse her</a></h2>
         </div>
          <div class="box4">
         <div class="kontakt1"> <a href="kontakt.php"><img src="images/cont.png" alt="kontakt"/></a></div>
         <h2 class="forsideoverskrift4">Kontakt
         <a href="kontakt.php" class="kontakttekstforside">Kom i kontakt<br>med mig her</a></h2>
        </div> 
         </div>
        <?php
        include "subfolder/footer.php";
        ?>
    </div>
</body> 
</html>
