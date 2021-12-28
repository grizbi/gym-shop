<?php
	session_start();
	require_once "connectdb.php";
	
	
	
	
	$polaczenie = @new mysqli($host,$db_user,$db_password,$db_name);
	
	if($polaczenie->connect_errno!=0)
	{
		echo "Error:".$polaczenie->connect_errno;
	}
	else
	{
	 $login2=$_POST['login2'];
	 $haslo2=$_POST['haslo2'];
	 $sql="SELECT *FROM user WHERE login ='$login2' AND haslo='$haslo2'";
	 if($rezultat = @$polaczenie->query($sql))
	 {
		$ilu_userow = $rezultat->num_rows;
		if($ilu_userow>0)
		{
			$_SESSION['zalogowany']=true;
			$wiersz = $rezultat->fetch_assoc();
			$_SESSION['login'] = $wiersz['login'];
			unset($_SESSION['blad']);
			$rezultat->free_result();
			header('Location:index.php');
		}
		else
		{
					
		$_SESSION['blad']= '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
		header('Location:logowanie.php');
		}
		
		
		
	$polaczenie->close();
	 }
	}
	
?>



 