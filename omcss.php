<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width">
	<title> | L Æ R I N G S P O R T E F O L I O |</title>
	<link rel="stylesheet" type="text/css" href="portostyle.css">
</head>
<body>
	 <div id="portogrid"> <!-- Denne div holder grid-effekten i HTML-filen -->
	 	
<?php
include 'navbar.php'; 
 ?>
            <div id="header">
            	<h1 class="overskrift01"> CSS - Cascading Style Sheet </h1><br><br><br><br><br>
                  <p>
                        CSS, eller Cascading Style Sheet, dukkede op omkring 1994-1996, og blev skabt af nordmanden Håkon Wium Lie, som arbejdede sammen med Tim Berners-Lee (se Om HTML) på CERN. I en kort periode af internettets historie var der altså ikke så stor mulighed for at få ens hjemmeside til at se bedre, eller ret meget anderledes, ud end andre.<br><br>
                        Cascading betyder noget i stil med ”et vandfald”, hvilket er meget sigende for den måde som et CSS-dokument er skrevet på; det der står øverst i dokumentet, bliver også læst først, og prioriteret først.<br><br>
                        CSS kan, for sig selv, ikke gøre så meget, selvom det betegnes som et ”styling-sprog”, lavet til netop at designe elementer. Men hvis de elementer ikke eksisterer (i et HTML dokument), så gør CSS’en ikke noget. Derfor skal du have et ”kald” til CSS i dit HTML-dokument, hvis du gerne vil have ændret udseendet af din hjemmeside.
                        Dette kan gøres på tre måder:<br>
                        •     Eksternt CSS-dokument<br>
                        •     Inline CSS<br>
                        •     Internt CSS-dokument<br><br>
                        I inline CSS skrives stylingen ind i de HTML-tags som man ønsker at ændre på, for eksempel: ”footer style=”background-color: black;”>”. Her fortæller vi med CSS at footer-området i vores HTML-dokument skal have baggrundsfarven sort, vi ændrer ikke på andre elementer, og det gør at det er ret nemt at finde ud af hvilket element, man designer på. Til gengæld er inline ikke specielt smart når man begynder at kalde en større mængde af CSS, så bliver det rodet, og svært at holde styr på. Generelt anbefales det ikke at bruge inline styling.<br><br>
                        Internt CSS kan styres meget let, det hele starter og slutter med et dertil lavet HTML-tag, "style> /style>". Alt der skrives imellem disse start- og slut-tags, er i CSS format. Så, hvis vi skal tage vores eksempel fra inline CSS, så vil vores kode-string komme til at se nogenlunde sådan her ud: 
                        ”!DOCTYPE html><br>
                        html><br>
                        head><br>
                        meta><br>
                        body><br>
                        style><br>
                        footer {
                        background-color: black;
                        }
                        /style><br>
                        footer><br>
                        /footer><br>
                        /body><br>
                        /html>”<br><br>
                        At bruge internt CSS er altså en måde at holde det hele, styling og indhold, i samme dokument (som du gemmer i formatet .html). Dette kan gøre stylingen mere overskuelig, og på sider hvor det hele er samlet, i for eksempel one-page hjemmesider, kan det interne CSS anvendes med fordel. Kommer der flere HTML-sider på, anbefales det dog generelt at man anvender et eksternt CSS-dokument i stedet.<br><br>
                        I et eksternt CSS-dokument gør man præcis det samme som i det interne, bortset fra at ”style” tagget ikke anvendes, og man har CSS-dokumentet for sig, og HTML-dokumentet for sig. I stedet skal man bruge HTML-tagget "link href=”filnavn.css” rel=”stylesheet” type=”text/css”"" for at fortælle HTML-dokumentet at den skal tage sin styling fra et eksternt CSS-dokument. Det er også muligt at tilkoble flere CSS-dokumenter, så skal man bare være bevidst om at noget styling kan gå ind og stå i vejen for noget andet.
                  </p>
            </div>
            <div id="omr-1">
            	<h1>
            	</h1>
            </div>
            <div id="omr-2">
            	<h1>
            	</h1>
            </div>
            <div id="omr-3">
            	<h1></h1>
            </div>
            <div id="omr-4">
            	<h1></h1>
            </div>
            
            <div id="omr-5">
            	<h1></h1>
            </div>
            <div id="omr-6">
            	<h1></h1>
            </div>
        </div>
<?php
include 'tiltopknap.php';
?>
</body>
</html>
