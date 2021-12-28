<?php
	session_start();
	
	
	
	
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" >
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Sklep Fitness</title>
	<meta name="description" content="Najlepsze produkty w branży fitness w rozsądnych cenach tylko u nas!"/>
	<meta name="keywords" content="odżywki,suplementacja,ciężary,zdrowie,sport"/>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/fontello.css"/>
	<link rel="stylesheet" href="style/style.css"/>
	
	<script src="js/zegarek.js"></script>

</head>
<body onload="odliczanie();">






<header>

	<nav class="navbar navbar-dark bgnav navbar-expand-md">
	
	
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Przełącznik nawigacji">
			<span class="navbar-toggler-icon"></span>
		</button>
		 
		
		<div id="zegar"> 12:00  </div>
		 
		<?php
				if(isset($_SESSION['zalogowany'])&&($_SESSION['zalogowany']==true))
				{
				echo '<div class="navbar-text">';
				echo " Witaj ";
				echo $_SESSION['login']."!";
				echo '</div>';
				}
	
				
			?>
		<div class="text"><i class="icon-phone"></i> Masz pytania? Zadzwoń: <span style="color:#0099ff; font-weight:600"> +48 321 565 421  </span> </div>
		
		<div class="collapse navbar-collapse justify-content-end" id="mainmenu">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Strona główna</a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="#kontakt"><i class="icon-mail-circled"></i> Kontakt</a>
				</li>
				
				
				
				<?php
				if(!isset($_SESSION['zalogowany'])||($_SESSION['zalogowany']==false))
				{
				echo'<li class="nav-item">
					<a class="nav-link" href="logowanie.php"> <i class="icon-user"></i> Logowanie</a>
				</li>';
				}
				
				?>
				
				<li class="nav-item">
					<a class="nav-link" href="rejestracja.php"> <i class="icon-lock-open"></i> Rejestracja </a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="index.php#nowosci"> Nowości </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php#bestsellery"> Bestsellery </a>
				</li>
				<?php
				
				if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
				{
				echo '<li class="nav-item"><a class="nav-link" href="logout.php"> Wyloguj się </a></li>';
				}
			
				?>
				
			</ul>
		</div>
				
	</nav>

</header>



<main class="content">
<div class="col-12 col-md-6 offset-md-3 text-center">
	<form action="zaloguj.php" method="post">
		<input type="text" placeholder="login" onfocus="this.placeholder=''" onblur="this.placeholder='login'" name="login2"/> <br> <br>
		<input type="password" placeholder="hasło" onfocus="this.placeholder=''" onblur="this.placeholder='hasło'" name="haslo2"/> <br> <br>
		

		
		<div><input style="margin-top:5px" type="submit" value="Zaloguj się"></div>
		</form>
		
		<?php
			if(isset($_SESSION['blad']))
			{
			echo $_SESSION['blad'];
			unset ($_SESSION['blad']);
			}
			
		?>
		

</div>
</main>
	
	
<footer class="page-footer">




  <div class="footer">© 2020 Copyright: Fitness For You <p id="kontakt"> Autor strony : Jakub Kos <br> E-mail:FitnessForYou@gmail.com</div>




</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>	
</body>

</html>