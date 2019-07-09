<!DOCTYPE html>
     <?php
	 session_start(); //la session commence
      //charger le fichier de fonction
        require("FonctionUtiles.php");
        //executer la fonction
        $cx=connexionChoix();  
      
        ?>

<html>

<head>
<meta charset="utf-8">
<title> Resultats_validation </title>
</head>

<body>

<form action="consentement.php" method="get" name="consentement" >

 <?php

	    $_SESSION["num"]=$_GET["num"];//récupérer le numéro étudiant
        $num=$_SESSION["num"];
		
		 $_SESSION["nomf"]=$_GET["nomf"];//récupérer le nom de l'étudiant
        $nomf=$_SESSION["nomf"];
		
		 $_SESSION["prenom"]=$_GET["prenom"];//récupérer le prenom de l'étudiant
        $prenom=$_SESSION["prenom"];

 ?>

<?php 

		
        $participantexiste = numExiste($cx, $num);
        if ($participantexiste == TRUE)
        {
            die("Vous avez déjà participé, vous ne pouvez pas jouer :( <br><a href='javascript:history.back()'><button type=\"button\" id=\"retour\" name=\"retour\"> retour</button></a>");
        }
		else
		{
			  $sql="insert into participant (Num_Etu, Nom, Prenom) values('$num', '$nomf', '$prenom')";
			  /* Importer le numéro, nom et prenom s'il n'existe pas */
		}	 
              $rstInsertion= mysqli_query($cx,$sql);
                  if($rstInsertion==TRUE)
                   {
                   header('Location: consentement.php');
				   exit();
                   } else
                   {
                     echo ("L'ordre $sql a échoué ". mysqli_error($cx));
                   }
				   echo(" <input type=\"submit\" value=\"Valider\" name=\"Valider\" />");
?>
				   
	 

		
           
      

</form>



</body>

</html>	