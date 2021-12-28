<?php

	session_start();
	
	if(isset($_POST['email']))
	{
		$wszystko_ok=true;
		
		$login=$_POST['login'];
		$haslo=$_POST['haslo'];
		$haslo1=$_POST['haslo1'];
		$email=$_POST['email'];
		
		if((strlen($login)<4) || (strlen($login)>15))
		{
			$wszystko_ok=false;
			$_SESSION['e_login']="Login musi posiadać od 4 do 15 znaków!";
			header('Location:rejestracja.php');
		}
		
		
		$email=$_POST['email'];
		$email1=filter_var($email,FILTER_SANITIZE_EMAIL);
		
		if((filter_var($email1,FILTER_SANITIZE_EMAIL)==false) || ($email1!=$email))
		{
			$wszystko_ok=false;
			$_SESSION['e_email']="Podaj poprawny email";
			header('Location:rejestracja.php');
		}
		
		
		$haslo=$_POST['haslo'];
		$haslo1=$_POST['haslo1'];
		
		if((strlen($haslo)<4) || (strlen($haslo)>20))
		{
			$wszystko_ok=false;
			$_SESSION['e_haslo']="Hasło musi posiadać od 4 do 20 znaków!";
			header('Location:rejestracja.php');
		
		}
		
		if($haslo!=$haslo1)
		{
			$wszystko_ok=false;
			$_SESSION['e_haslo']="Podane hasła się różnią!";
			header('Location:rejestracja.php');
		
		}
		
		
		require_once "connectdb.php";
		try 
		{
			$polaczenie = new mysqli($host,$db_user,$db_password,$db_name);
			if($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			
			else
			{
				mysqli_query($polaczenie,"SET NAMES 'utf8' COLLATE 'utf8_unicode_ci'");
				$rezultat=$polaczenie->query("SELECT id FROM user WHERE email='$email'");
				
				$ile_maili=$rezultat->num_rows;
				if($ile_maili>0)
				{
					$wszystko_ok=false;
					$_SESSION['e_email']="Podany email jest już zajęty!";
					header('Location:rejestracja.php');
				}
				
				$rezultat=$polaczenie->query("SELECT id FROM user WHERE login='$login'");
				
				$ile_loginow=$rezultat->num_rows;
				if($ile_loginow>0)
				{
					$wszystko_ok=false;
					$_SESSION['e_login']="Podany login jest już zajęty!";
					header('Location:rejestracja.php');
				}
				
				if($wszystko_ok==true)
				{
					if($polaczenie->query("INSERT INTO user VALUES(NULL,'$login','$email','$haslo')"))					{
						$_SESSION['zarejestruj']=true;
						header('Location:rejestracja.php');
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
				}
				
				
			$polaczenie->close();
			}
			
		}
		catch(Exception $e)
		{
			echo'Błąd serwera!';

		}
		
		
		
	}

?>