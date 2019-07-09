<!DOCTYPE html>
     <?php
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



 <?php
/* Recevoir le numéro soumis de la page "des.php". */ 
	    $gain=$_GET["gain"];

/* Utiliser la fonction écrit dans la page "FonctionUtile.php" pour rechercher si ce numéro est déjà dans la BD. */ 		
		$participantexiste = numExiste($cx, $gain);
		
		/* Si ce numéro existe, vérifier s'il y a déjà le résuletat du jeu pour ce numéro dans la BD. */ 
        if ($participantexiste == TRUE)
        {
			  $sqlgagne = "SELECT * FROM participant WHERE Gagner = '' and Num_Etu = '$gain'";

              $curseur = mysqli_query($cx, $sqlgagne);
              if ($curseur == FALSE) {
              die("erreur fonction numéro");
               } 
	           else {
				/* Si oui, indiquer que ce participant a déjà joué. */    
                  if (mysqli_num_rows($curseur) == 0)
			      {
				   die("Vous avez déjà joué");
			      } 
			     else
			     {
				/* Si non, enregistrer le résultat du jeu perdu en "non" dans la BD. */ 	 
				 $sqlperdu="update participant set Gagner='non' where Num_Etu=$gain";
				 $updateperdu= mysqli_query($cx,$sqlperdu);
				
               /* Mettre à jour la date du jeu dans la BD. */ 				
				$sqldate="update participant set Date=now() where Num_Etu=$gain";
				$updatedate= mysqli_query($cx,$sqldate);
  
				echo'Merci de votre participation!';
			}
		}
		}
		else
		{
			/* Si ce numéro n'existe pas, cela signifie que ce participant n'a pas saisi un bon numéro ou qu'il n'a pas d'abord participé à l'expérience. */ 
			  echo"Votre numéro étudiant n'existe pas";
		}
       
          
       
      
        ?>

</body>

</html>	