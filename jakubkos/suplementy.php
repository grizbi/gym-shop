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




<div class="container">


	<section class="bestsellery">
		<div class="row">
			<div class="col-sm-12  col-lg-6 col-xl-4">
				<figure class="figure">
					<a href="multiwitamina.php"><img src="photos/multiwitamina.jpg" class="img-fluid" alt="Multiwitamina"> </a>
						<figcaption>   Multiwitamina 60 sztuk   25 zł     </figcaption>
				</figure>
			</div>
		
		<div class="col-sm-12  col-lg-6 col-xl-4">
			<figure class="figure">
				<a href="enzymy.php"><img src="photos/enzymy.jpg" class="img-fluid" alt="Enzymy trawienne"> </a>
				<figcaption>   Enzymy trawienne 50 sztuk 100 zł    </figcaption>
			</figure>
		</div>
		
		<div class="col-sm-12  col-lg-6 col-xl-4">
			<figure class="figure">
				<a href="omega.php"><img src="photos/omega.jpg" alt="Omega 3" class="img-fluid"> </a>
				<figcaption>   Omega 3 90 sztuk   35 zł </figcaption>
			</figure>
		</div>
		
		<div class="col-sm-12  col-lg-6 col-xl-4">
			<figure class="figure">
				<a href="kreatyna.php"><img src="photos/kreatyna.jpg" class="img-fluid" alt="Kreatyna"> </a>
				<figcaption>   Kreatyna w tabletkach 60 sztuk 35 zł    </figcaption>
			</figure>
		</div>
		</div>
	</section>
	
</div>


<footer class="page-footer">




  <div class="footer">© 2020 Copyright: Fitness For You <p id="kontakt"> Autor strony : Jakub Kos <br> E-mail:FitnessForYou@gmail.com</div>




</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>	
</body>

</html>