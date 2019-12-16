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
	 	
            <div id="nav-felt">
            	<ul> <!-- Hvert link i nav-baren leder til en ny side, alle med samme CSS-fil og dermed samme design -->
        <li><a href="http://emil1681.apache.eadania.dk/laeringsportefolie/index.php"><h3>Forsiden</h3></a></li>
        <li><a href="http://emil1681.apache.eadania.dk/laeringsportefolie/omhtml.php"><h3>Om HTML</h3></a></li>
  			<li><a href="#contact"><h3>Om CSS</h3></a></li>
  			<li><a href="#about"><h3>About</h3></a></li>
  			<li><a href="#1"><h3>Info</h3></a></li>
  			<li><a href="#2"><h3>Om opgaven</h3></a></li>
  			<li><a href="#3"><h3>3</h3></a></li>
  			<li><a href="#4"><h3>4</h3></a></li>
  			<li><a href="#5"><h3>5</h3></a></li>
  			<li><a href="#6"><h3>6</h3></a></li>
  			<li><a href="#7"><h3>7</h3></a></li>
  			<li><a href="#8"><h3>8</h3></a></li>
  			<li><a href="#9"><h3>9</h3></a></li>
  			<li><a href="#10"><h3>10</h3></a></li>
  			<li><a href="#11"><h3>11</h3></a></li>
  			<li><a href="#12"><h3>12</h3></a></li>
  			<li><a href="#13"><h3>13</h3></a></li>
  			<li><a href="#14"><h3>14</h3></a></li>
  			<li><a href="#15"><h3>15</h3></a></li>
  			<li><a href="#16"><h3>16</h3></a></li>
  			<li><a href="#17"><h3>17</h3></a></li>
  			<li><a href="#18"><h3>18</h3></a></li>
  			<li><a href="#19"><h3>19</h3></a></li>
  			<li><a href="#20"><h3>20</h3></a></li>
  			<li><a href="#21"><h3>21</h3></a></li>
  			<li><a href="#kilder"><h3>Kilder</h3></a></li>
				</ul> 
            </div>
            <div id="header">
            	<h1>På denne side forefindes en oversigt over hvor enkelte dele af denne side befinder sig. <br> <!-- Dette tag anvendes til at lave linjeskift i tekst. På engelsk, line BReak. -->
            		På alle sider findes en </h1><h1 id="groen">mørkegrøn knap</h1> <h1> som fører læseren tilbage til toppen, og dermed tilbage til navigationsbaren på siden. <br>
            		Dette er gjort bevidst for ikke at anvende "position: sticky;" i CSS'en til navigationsbaren, da formålet er at det skal være nemt at navigere rundt på siden. <br>
            		Da knappen altid er synlig, og har en forklarende tekst, behøver navigationsbaren ikke at følge med, når der scrolles ned eller op på en side.
            	</h1>
            </div>
            <div id="omr-1">
            	<h1>På nogle af siderne er der billeder eller illustrationer. <br>
            		For at disse ikke skal fylde alt for meget, rent visuelt, vises de i et mindre format.<br>
            		Hvis du klikker på et billede, kommer det frem i større format.
            	</h1>
            </div>
            <div id="omr-2">
            	<h1>Dette er IKKE den skriftstørrelse der bliver anvendt på de enkelte sider. <br>
            		I stedet anvendes </h1><p> et standard p-tag, for "paragraph"</p><h1>til større mængder af tekst. <br>
            	</h1>
            </div>
            <div id="omr-3">
            	<h1>5</h1>
            </div>
            <div id="omr-4">
            	<h1>6</h1>
            </div>
            
            <div id="omr-5">
            	<h1>7</h1>
            </div>
            <div id="omr-6">
            	<h1>8</h1>
            </div>
        </div>
        <button class="tiltopknap" onclick="topFunction()">Tilbage til toppen</button>
        <footer>&copy Emil Aarup Thomsen | Multimediedesigner, 2019 Skive</footer>

        <script type="text/javascript">
        	var mybutton = document.getElementById("tiltopknap");
        	function topFunction() {
 				document.body.scrollTop = 0;
  				document.documentElement.scrollTop = 0;
  		}

        </script> <!-- Ovenstående JavaScript styrer "tilbage til toppen - knappen", men det kan også lade sig gøre i rent CSS, hvilket dog kræver mere kodning. Brug af JavaScript kræver dog mere processor-energi, så rene CSS-funktioner kan anbefales for at skåne visse computere. Generelt placeres <script> tagget sidst i html-dokumentet, i modsætning til CSS-filen, som linkes før noget indhold er skrevet ind. -->
</body>
</html>