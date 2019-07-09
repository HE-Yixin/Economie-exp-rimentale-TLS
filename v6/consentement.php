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
<title> Consentement </title>
</head>

<body>


    
<p>	Le consentement </p>
	

	





 <?php 	  
	
        $num=$_SESSION["num"];     
 ?>
 
 <?php
       
	   /* Rechercher ID de ce participant selon son numéro d'étudiant. */
	     $sqlid="SELECT Id from participant where Num_etu='$num'";
		 $curseur=mysqli_query($cx,$sqlid);
		 While ($chercheid=mysqli_fetch_array($curseur))
            {						   
            $id=$chercheid["Id"];
			
			 /* Un booléan logique pour distribuer une des 4 pages de l'instruction au participant selon son ID. */
			 /* Enregistrer le numéro de page pour le participant correspondant dans la BD. */
				   if($id % 4==1 or $id==1)
				   {
					$sql1="UPDATE participant SET Condition_WP = 'WordPress 1' WHERE Id = $id"; 
					$rstInsertion1= mysqli_query($cx,$sql1);
			        echo("<a href=\"instruction1.html\"> <button type=\"button\" id=\"ok\" name=\"ok\"> Suivant</button> </a>");
				   }
					else
					{
						if($id % 4==2 or $id==2)
						{ 
					    $sql2="UPDATE participant SET Condition_WP = 'WordPress 2' WHERE Id = $id";
						$rstInsertion2= mysqli_query($cx,$sql2);
			             echo("<a href=\"instruction2.html\"> <button type=\"button\" id=\"ok\" name=\"ok\"> Suivant</button> </a>");
				        }
						else
						{
							 if($id % 4==3 or $id==3)
							   {
								$sql3="UPDATE participant SET Condition_WP = 'WordPress 3' WHERE Id = $id";   
								$rstInsertion3= mysqli_query($cx,$sql3);
			                    echo("<a href=\"instruction3.html\"> <button type=\"button\" id=\"ok\" name=\"ok\"> Suivant</button> </a>");
				                }
								else
								{
									if($id % 4==0)
									{ 
								    $sql4="UPDATE participant SET Condition_WP = 'WordPress 4' WHERE Id = $id";
									$rstInsertion4= mysqli_query($cx,$sql4);
			                        echo("<a href=\"instruction4.html\"> <button type=\"button\" id=\"ok\" name=\"ok\"> Suivant</button> </a>");
								    }
								}
						}
		            }
			}
        ?>
		
		
<form method="Get" action="retourconsentement.html">
<input type="submit" name="retour" value="Retour" >
</form>



</body>

</html>	