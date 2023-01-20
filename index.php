<?php

require 'connect.php';

$pageName = $_GET['action'] ?? null;

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<script src="app.js" defer></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<link rel="stylesheet" href="style.css" />
        <link
        href="https://fonts.googleapis.com/css?family=Dosis:300,400,700"
        rel="stylesheet"
        />
		<title>Pinseria Jaskółcza</title>
	</head>
	<body>
		<nav id="navigation_bar">
			<a href="index.php"><img class="logo_img" logo src="images/logo.png" alt="logo Pinserii Jaskółczej"></a>
            <ul id="nav_ul">
                <li class="nav_li">
				<a class="nav_li_link" href="index.php">Menu</a>
			</li>
                <li class="nav_li">
					<a class="nav_li_link" href="index.php">Kontakt</a>
				</li>
                <li class="nav_li">
					<a class="nav_li_link" href="index.php">O nas</a>
				</li>
				<li class="nav_li">
					<a class="nav_li_link" href="?action=zamowienie">Zamówienie</a>
				</li>
            </ul>
        </nav>

		<nav id="navigation">
			<a href="index.php"><img class="logo_img" logo src="images/logo.png" alt="logo Pinserii Jaskółczej"></a>
		</nav>

			<nav class="navbar">
				<div class="hamburger-menu">
					<div class="line line-1"></div>
					<div class="line line-2"></div>
					<div class="line line-3"></div>
				</div>

				<ul class="nav-list">
					<li class="nav-item">
						<a href="#" class="nav-link">Menu</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Kontakt</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">O nas</a>
					</li>
					<li class="nav-item">
						<a href="?action=zamowienie" class="nav-link">Zamówienie</a>
					</li>
				</ul>
			</nav>


		<main>
			<div id="add-alert">Dodano produkt do zamówienia.</div>
			<div id="remove-alert">Usunięto produkt z zamówienia.</div>
			<?php if ($pageName === 'zamowienie'): ?>
			
			<div id="basket">
				<div id="basket_contents">
					Zawartość koszyka:
					<a href="index.php?action=zamowienie"><div class="add-item">Dodaj + </div></a>
				</div>
				<div id="basket-order">
					ZAMAWIAM! 
				</div>
			</div>

			<img id="trolley_img" logo src="images/trolley.png" alt="Koszyk">
			<img class="x-img" logo src="images/red-x.png" alt="X">

			<section id="order-page">
				<div id="order-information">
					<form id="order-form" action="zamowienie.php" method="post">
						<div id="order">Zamówienie:
							<div class="add-item">Dodaj + </div>
						</div>
						<div id="delivery-details">Dane odbioru lub dostawy
						<div class="info">
							<input class="fname" type="text" name="name" placeholder="Imię i nazwisko">
							<input type="number" name="telefon" placeholder="Numer telefonu">
							<input type="email" name="email" placeholder="Email">
							<input type="text" name="adres" placeholder="Adres dostawy (w wypadku dostawy pod adres)">
							<input type="text" name="godzina" placeholder="Godzina odbioru (w wypadku odbioru w lokalu)">
							<input type="text" name="banknot" placeholder="Jakim banknotem zapłacisz (w wypadku płatności gotówką, aby kurier przygotował resztę)">
						</div>
						<h3>Dostawa:</h3>
						<div class="metod">
							<div class="check"> 
								<input type="radio" value="Odbiór w lokalu" id="radioOne" name="metod"/>
								<label for="radioOne" class="radio">Odbiór w lokalu</label>
							</div>
							<div class="check">
								<input type="radio" value="Dostawa pod adres" id="radioTwo" name="metod" checked/>
								<label for="radioTwo" class="radio">Dostawa pod adres</label>
							</div>
						</div>
						<h3>Sposób płatności:</h3>
						<div class="metod">
							<div class="check"> 
								<input type="radio" value="Gotówką" id="radioThree" name="platnosc"checked/>
								<label for="radioOne" class="radio">Gotówką</label>
							</div>
							<div class="check">
								<input type="radio" value="Kartą" id="radioThree" name="platnosc" />
								<label for="radioTwo" class="radio">Kartą</label>
							</div>
						</div>
						<input id="order-button" type="submit" value="ZAMAWIAM!"/>
					</form>
					
				</div>
				</div>
				<img id="black-line" src="images/line.png" alt="Czarna kreska oddzielająca">
				<section id="menu">
				<div id="inscription">
					MENU
				</div>
				
				<div id="menu-sections">
					<span class="heading-dishes"><font size="+3px">Pinsa</font></span>
					<ol type="1">
						<li class="dish"><b>Pinsa Margherita</b> 27.50 zł  <b> <small>(ser mozzarella, sos pomidorowy)</small></b> <button class="add">+</button> </li>
						<li class="dish"><b>Pinsa Tradizionale </b>33 zł  <b><small>(ser mozzarella, ser pecorino, boczek, pieczarki, sos pomidorowy)</small> </b><button class="add">+</button> </li>
						<li class="dish"><b>Pinsa Piccante </b> 33 zł <b><small>(ser mozzarella, boczek, szynka, salami, papryka jalapenio, pieczarki,  sos pomidorowy)</small> </b><button class="add">+</button> </li>
						<li class="dish"><b>Pinsa Ortolana</b> 31.50 zł  <b><small>(ser mozzarella, brokuły, szpinak, rukola, pomidorki, sos pomidorowy)</small> </b><button class="add">+</button> </li>
						<li class="dish"><b>Pinsa de Roma </b>34 zł  <b><small>(ser mozzarella, ser cheddar, ser gouda, ser gorgonzola, orzechy, sos pomidorowy)</small></b> <button class="add">+</button> </li>
						<li class="dish"><b>Pinsa Amore Mio </b> 34 zł <b><small>(ser mozzarella, szynka parmeńska, orzechy, rukola, ser parmezan, sos pomidorowy)</small> </b><button class="add">+</button> </li>
						<li class="dish"><b>Pinsa del Contadino </b> 33 zł <b><small>(ser mozzarella, mięso mielone, pieczarki, boczek, sos pomidorowy)</small></b> <button class="add">+</button> </li>
						<li class="dish"><b>Pinsa Salami </b> 31.50 zł <b><small>(ser mozzarella, salami, sos pomidorowy)</small> </b> <button class="add">+</button> </li>
						<li class="dish"><b>Pinsa Capricciosa </b> 31.50 zł <b><small>(ser mozzarella, szynka, pieczarki, sos pomidorowy)</small></b> <button class="add">+</button> </li>
						<li class="dish"><b>Pinsa Pepperoni </b> 31.50 zł <b><small>(ser mozzarella, salami pikantne, pieczarki, papryka, sos pomidorowy)</small></b> <button class="add">+</button> </li>
					</ol>
				</div>

				<div id="menu-sections">
					<span class="heading-dishes"><font size="+3px">Pizza</font></span>
					<ol type="1">
						<li class="dish"><b>Pizza Margherita </b> 21 zł <b><small> (ser mozzarella, sos pomidorowy)</small></b>  <button class="add">+</button> </li>
						<li class="dish"><b>Pizza Tradizionale </b>26 zł <b><small>(ser mozzarella, ser pecorino, boczek, pieczarki, sos pomidorowy)</small></b>  <button class="add">+</button> </li>
						<li class="dish"><b>Pizza Piccante </b>26 zł <b><small>(ser mozzarella, boczek, szynka, salami, papryka jalapenio, pieczarki,  sos pomidorowy)</small> </b> <button class="add">+</button> </li>
						<li class="dish"><b>Pizza Ortolana </b>25 zł <b><small>(ser mozzarella, brokuły, szpinak, rukola, pomidorki, sos pomidorowy)</small></b>  <button class="add">+</button> </li>
						<li class="dish"><b>Pizza de Roma </b> 28 zł<b><small>(ser mozzarella, ser cheddar, ser gouda, ser gorgonzola, orzechy, sos pomidorowy)</small> </b> <button class="add">+</button> </li>
						<li class="dish"><b>Pizza Amore Mio </b>29 zł <b><small>(ser mozzarella, szynka parmeńska, orzechy, rukola, ser parmezan, sos pomidorowy)</small></b>  <button class="add">+</button> </li>
						<li class="dish"><b>Pizza del Contadino </b>28 zł <b><small>(ser mozzarella, mięso mielone, pieczarki, boczek, sos pomidorowy)</small></b>  <button class="add">+</button> </li>
						<li class="dish"><b>Pizza Salami  </b>26 zł <b><small>(ser mozzarella, salami, sos pomidorowy)</small></b> <button class="add">+</button>  </li>
						<li class="dish"><b>Pizza Capricciosa </b>26 zł<b> <small>(ser mozzarella, szynka, pieczarki, sos pomidorowy)</small> </b> <button class="add">+</button> </li>
						<li class="dish"><b>Pizza Pepperoni </b>26 zł <b><small>(ser mozzarella, salami pikantne, pieczarki, papryka, sos pomidorowy)</small> </b> <button class="add">+</button> </li>
					</ol>
				</div>

				<div id="menu-sections">
					<span class="heading-dishes"><font size="+3px">Pizza wegańska na cieście orkiszowym (tylko 30 cm)</font></span>
					<ol type="1">
						<li class="dish"><b>Zielona Wega </b>27 zł <b> <small>( mazarella wegańska, mix sałatek, sos pomidorowy) </small> </b> <button class="add">+</button> </li>
						<li class="dish"><b>Marghe Wega </b> 25 zł <b><small>(mazarella wegańska, sos pomidorowy) </small></b>  <button class="add">+</button> </li>
						<li class="dish"><b>Pieczar Wega </b>30 zł <b><small>(mazarella wegańska, pieczarki, sos pomidorowy)</small></b>  <button class="add">+</button> </li>
						<li class="dish"><b>Wega Wega </b>30 zł <b><small>(mazarella wegańska, oliwki, pomidorki, kukurydza, rukola, sos pomidorowy)</small></b>  <button class="add">+</button> </li>
						<li class="dish"><b>Ananas Wega </b>30 zł <b><small>(mazarella wegańska,ananas,kukurydza,sos pomidorowy) </small></b> <button class="add">+</button>  </li>
						<li class="dish"><b>Garden Wega </b>30 zł <b><small>(mazarella wegańska, brokuł, szpinak, sos pomidorowy)</small></b>  <button class="add">+</button> </li>
						<li class="dish"><b>Brocco Wega </b> 30 zł <b><small>(mazarella wegańska, brokuły, pomidorki, sos pomidorowy)</small> </b> <button class="add">+</button> </li>
						<li class="dish"><b>Diablo Wega </b> 30 zł<b><small>(mazarella wegańska, pieczarki, papryka jalapeno, sos pomidorowy)</small></b> <button class="add">+</button>  </li>
						<li class="dish"><b>Marinera Wega </b>20 zł <b><small>(mazarella wegańska, oregano, olej,oliwki,czosnek, sos pomidorowy)</small> </b> <button class="add">+</button> </li>
						<li class="dish"><b>Calzone Wega </b>26 zł <b><small>(mazarella wegańska pieczarki, oliwki.pomidory, kukurydza, sos pomidorowy)</small> </b> <button class="add">+</button> </li>
					</ol>
				</div>

				<div id="menu-sections">
					<span class="heading-dishes"><font size="+3px">Pinsa wegańska</font></span>
					<ol type="1">
						<li class="dish"><b>Zielona Wega </b>35 zł <b><small>( mazarella wegańska, mix sałatek, sos pomidorowy)</small> </b> <button class="add">+</button> </li>
						<li class="dish"><b>Marghe Wega </b>31.50 zł<b> <small>(mazarella wegańska, sos pomidorowy)</small> </b> <button class="add">+</button> </li>
						<li class="dish"><b>Pieczar Wega</b>  39.50 zł<b><small>(mazarella wegańska, pieczarki, sos pomidorowy)</small> </b> <button class="add">+</button> </li>
						<li class="dish"><b>Wega Wega </b>39.50 zł<b> <small>(mazarella wegańska, oliwki, pomidorki, kukurydza, rukola, sos pomidorowy)</small></b> <button class="add">+</button>  </li>
						<li class="dish"><b>Ananas Wega </b>39.50 zł <b><small>(mazarella wegańska,ananas,kukurydza,sos pomidorowy)</small> </b> <button class="add">+</button> </li>
						<li class="dish"><b>Garden Wega </b>39.50 zł <b><small>(mazarella wegańska, brokuł, szpinak, sos pomidorowy)</small></b>  <button class="add">+</button> </li>
						<li class="dish"><b>Brocco Wega </b>39.50 zł <b><small>(mazarella wegańska, brokuły, pomidorki, sos pomidorowy)</small> </b> <button class="add">+</button> </li>
						<li class="dish"><b>Diablo Wega </b>39.50 zł <b><small>(mazarella wegańska, pieczarki, papryka jalapeno, sos pomidorowy)</small> </b> <button class="add">+</button> </li>
						<li class="dish"><b>Marinera Wega</b> 26.50 zł <b> <small>(mazarella wegańska, oregano, olej,oliwki,czosnek, sos pomidorowy)</small></b>  <button class="add">+</button> </li>
						<li class="dish"><b>Calzone Wega</b> 26 zł <b><small>(mazarella wegańska pieczarki, oliwki.pomidory, kukurydza, sos pomidorowy)</small></b>  <button class="add">+</button> </li>
					</ol>
				</div>

				<div id="menu-sections">
					<span class="heading-dishes"><font size="+3px">Calzone</font></span>
					<ol type="1">
						<li class="dish"><b>Calzone szynka</b> -<b> Mozarello, sos pomidorowy, pieczarki, szynka <b></b>23 zł</small></b>  <button class="add">+</button> </li>
						<li class="dish"><b>Calzone salami</b> - <b> Mozarello, sos pomidorowy, pieczarki, salami <b></b>23 zł</small></b>  <button class="add">+</button> </li>
						<li class="dish"><b>Calzone pikantne</b> - <b> Mozarello, sos pomidorowy, pieczarki, pikantne salami, papryczka jalapeno </b><b>23 zł</small> </b> <button class="add">+</button> </li>
						<li class="dish"><b>Calzone vegetariana</b> - <b> Mozarello, sos pomidorowy, pieczarki, oliwki, pomidorki, kukurydza <b></b>23 zł</small></b>  <button class="add">+</button> </li>
						<li class="dish"><b>Calzone wega</b> - <b> wegański ser violife, sos pomidorowy, pieczarki, oliwki, pomidorki, kukurydza <b></b>25 zł</small></b>  <button class="add">+</button> </li>
					</ol>
				</div>
			</section>
			</section>
			<?php else: ?>
			<img id="black-line" src="images/line.png" alt="Czarna kreska oddzielająca">
			<section id="menu">
				<div id="inscription">
					MENU
				</div>

				<div id="menu-sections">
					<span class="heading-dishes"><font size="+3px">Pinsa</font></span>
					<ol type="1">
						<li class="dish"><b>Pinsa Margherita</b> 27.50 zł  <b> <small>(ser mozzarella, sos pomidorowy)</small></b> </li>
						<li class="dish"><b>Pinsa Tradizionale </b>33 zł  <b><small>(ser mozzarella, ser pecorino, boczek, pieczarki, sos pomidorowy)</small> </b></li>
						<li class="dish"><b>Pinsa Piccante </b> 33 zł <b><small>(ser mozzarella, boczek, szynka, salami, papryka jalapenio, pieczarki,  sos pomidorowy)</small> </b></li>
						<li class="dish"><b>Pinsa Ortolana</b> 31.50 zł  <b><small>(ser mozzarella, brokuły, szpinak, rukola, pomidorki, sos pomidorowy)</small> </b></li>
						<li class="dish"><b>Pinsa de Roma </b>34 zł  <b><small>(ser mozzarella, ser cheddar, ser gouda, ser gorgonzola, orzechy, sos pomidorowy)</small></b> </li>
						<li class="dish"><b>Pinsa Amore Mio </b> 34 zł <b><small>(ser mozzarella, szynka parmeńska, orzechy, rukola, ser parmezan, sos pomidorowy)</small> </b></li>
						<li class="dish"><b>Pinsa del Contadino </b> 33 zł <b><small>(ser mozzarella, mięso mielone, pieczarki, boczek, sos pomidorowy)</small></b> </li>
						<li class="dish"><b>Pinsa Salami </b> 31.50 zł <b><small>(ser mozzarella, salami, sos pomidorowy)</small> </b></li>
						<li class="dish"><b>Pinsa Capricciosa </b> 31.50 zł <b><small>(ser mozzarella, szynka, pieczarki, sos pomidorowy)</small></b> </li>
						<li class="dish"><b>Pinsa Pepperoni </b> 31.50 zł <b><small>(ser mozzarella, salami pikantne, pieczarki, papryka, sos pomidorowy)</small></b> </li>
					</ol>
				</div>

				<div id="menu-sections">
					<span class="heading-dishes"><font size="+3px">Pizza</font></span>
					<ol type="1">
						<li class="dish"><b>Pizza Margherita </b> 21 zł <b><small> (ser mozzarella, sos pomidorowy)</small></b> </li>
						<li class="dish"><b>Pizza Tradizionale </b>26 zł <b><small>(ser mozzarella, ser pecorino, boczek, pieczarki, sos pomidorowy)</small></b> </li>
						<li class="dish"><b>Pizza Piccante </b>26 zł <b><small>(ser mozzarella, boczek, szynka, salami, papryka jalapenio, pieczarki,  sos pomidorowy)</small> </b></li>
						<li class="dish"><b>Pizza Ortolana </b>25 zł <b><small>(ser mozzarella, brokuły, szpinak, rukola, pomidorki, sos pomidorowy)</small></b> </li>
						<li class="dish"><b>Pizza de Roma </b> 28 zł<b><small>(ser mozzarella, ser cheddar, ser gouda, ser gorgonzola, orzechy, sos pomidorowy)</small> </b></li>
						<li class="dish"><b>Pizza Amore Mio </b>29 zł <b><small>(ser mozzarella, szynka parmeńska, orzechy, rukola, ser parmezan, sos pomidorowy)</small></b> </li>
						<li class="dish"><b>Pizza del Contadino </b>28 zł <b><small>(ser mozzarella, mięso mielone, pieczarki, boczek, sos pomidorowy)</small></b> </li>
						<li class="dish"><b>Pizza Salami  </b>26 zł <b><small>(ser mozzarella, salami, sos pomidorowy)</small></b> </li>
						<li class="dish"><b>Pizza Capricciosa </b>26 zł<b> <small>(ser mozzarella, szynka, pieczarki, sos pomidorowy)</small> </b></li>
						<li class="dish"><b>Pizza Pepperoni </b>26 zł <b><small>(ser mozzarella, salami pikantne, pieczarki, papryka, sos pomidorowy)</small> </b></li>
					</ol>
				</div>

				<div id="menu-sections">
					<span class="heading-dishes"><font size="+3px">Pizza wegańska na cieście orkiszowym (tylko 30 cm)</font></span>
					<ol type="1">
						<li class="dish"><b>Zielona Wega </b>27 zł <b> <small>( mazarella wegańska, mix sałatek, sos pomidorowy) </small> </b></li>
						<li class="dish"><b>Marghe Wega </b> 25 zł <b><small>(mazarella wegańska, sos pomidorowy) </small></b> </li>
						<li class="dish"><b>Pieczar Wega </b>30 zł <b><small>(mazarella wegańska, pieczarki, sos pomidorowy)</small></b> </li>
						<li class="dish"><b>Wega Wega </b>30 zł <b><small>(mazarella wegańska, oliwki, pomidorki, kukurydza, rukola, sos pomidorowy)</small></b> </li>
						<li class="dish"><b>Ananas Wega </b>30 zł <b><small>(mazarella wegańska,ananas,kukurydza,sos pomidorowy) </small></b> </li>
						<li class="dish"><b>Garden Wega </b>30 zł <b><small>(mazarella wegańska, brokuł, szpinak, sos pomidorowy)</small></b> </li>
						<li class="dish"><b>Brocco Wega </b> 30 zł <b><small>(mazarella wegańska, brokuły, pomidorki, sos pomidorowy)</small> </b></li>
						<li class="dish"><b>Diablo Wega </b> 30 zł<b><small>(mazarella wegańska, pieczarki, papryka jalapeno, sos pomidorowy)</small></b> </li>
						<li class="dish"><b>Marinera Wega </b>20 zł <b><small>(mazarella wegańska, oregano, olej,oliwki,czosnek, sos pomidorowy)</small> </b></li>
						<li class="dish"><b>Calzone Wega </b>26 zł <b><small>(mazarella wegańska pieczarki, oliwki.pomidory, kukurydza, sos pomidorowy)</small> </b></li>
					</ol>
				</div>

				<div id="menu-sections">
					<span class="heading-dishes"><font size="+3px">Pinsa wegańska</font></span>
					<ol type="1">
						<li class="dish"><b>Zielona Wega </b>35 zł <b><small>( mazarella wegańska, mix sałatek, sos pomidorowy)</small> </b></li>
						<li class="dish"><b>Marghe Wega </b>31.50 zł<b> <small>(mazarella wegańska, sos pomidorowy)</small> </b></li>
						<li class="dish"><b>Pieczar Wega</b>  39.50 zł<b><small>(mazarella wegańska, pieczarki, sos pomidorowy)</small> </b></li>
						<li class="dish"><b>Wega Wega </b>39.50 zł<b> <small>(mazarella wegańska, oliwki, pomidorki, kukurydza, rukola, sos pomidorowy)</small></b> </li>
						<li class="dish"><b>Ananas Wega </b>39.50 zł <b><small>(mazarella wegańska,ananas,kukurydza,sos pomidorowy)</small> </b></li>
						<li class="dish"><b>Garden Wega </b>39.50 zł <b><small>(mazarella wegańska, brokuł, szpinak, sos pomidorowy)</small></b> </li>
						<li class="dish"><b>Brocco Wega </b>39.50 zł <b><small>(mazarella wegańska, brokuły, pomidorki, sos pomidorowy)</small> </b></li>
						<li class="dish"><b>Diablo Wega </b>39.50 zł <b><small>(mazarella wegańska, pieczarki, papryka jalapeno, sos pomidorowy)</small> </b></li>
						<li class="dish"><b>Marinera Wega</b> 26.50 zł <b> <small>(mazarella wegańska, oregano, olej,oliwki,czosnek, sos pomidorowy)</small></b> </li>
						<li class="dish"><b>Calzone Wega</b> 26 zł <b><small>(mazarella wegańska pieczarki, oliwki.pomidory, kukurydza, sos pomidorowy)</small></b> </li>
					</ol>
				</div>

				<div id="menu-sections">
					<span class="heading-dishes"><font size="+3px">Calzone</font></span>
					<ol type="1">
						<li class="dish"><b>Calzone szynka</b> -<b> Mozarello, sos pomidorowy, pieczarki, szynka <b></b>23 zł</small></b> </li>
						<li class="dish"><b>Calzone salami</b> - <b> Mozarello, sos pomidorowy, pieczarki, salami <b></b>23 zł</small></b> </li>
						<li class="dish"><b>Calzone pikantne</b> - <b> Mozarello, sos pomidorowy, pieczarki, pikantne salami, papryczka jalapeno </b><b>23 zł</small> </b></li>
						<li class="dish"><b>Calzone vegetariana</b> - <b> Mozarello, sos pomidorowy, pieczarki, oliwki, pomidorki, kukurydza <b></b>23 zł</small></b> </li>
						<li class="dish"><b>Calzone wega</b> - <b> wegański ser violife, sos pomidorowy, pieczarki, oliwki, pomidorki, kukurydza <b></b>25 zł</small></b> </li>
					</ol>
				</div>
			</section>

			<section id="location">
				<img id="black-line" src="images/line.png" alt="Czarna kreska oddzielająca">
				<div id="inscription">
					LOKALIZACJA
				</div>
				<iframe id="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2460.2776727343476!2d15.499084715733812!3d51.92888857970655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4706112b0020accf%3A0x6e60a7442b64b77!2sPizza%20Italia!5e0!3m2!1spl!2spl!4v1673647087738!5m2!1spl!2spl" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</section>
			
			<section id="information">
				<img id="black-line" src="images/line.png" alt="Czarna kreska oddzielająca">
				<div id="inscription">
					O NAS
				</div>
				Tu będzie parę informacji o naszej Pinserii.
				<img id="black-line" src="images/line.png" alt="Czarna kreska oddzielająca">
				<div id="inscription">
					KONTAKT
				</div>
				Informacje kontaktowe tu będą.
			</section>
			<h1>
				<a href="logowanie.php" target="_blank">Panel resteuratora</a>
			</h1>
			<?php endif; ?>
		</main>
	</body>
</html>
