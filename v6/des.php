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
<title>Jeu_des </title>
</head>

<body>

<?php
header("Cache-control:no-cache,no-store,must-revalidate");
header("Pragma:no-cache");
header("Expires:0");
?>

<h2>Le résultat de lancer les dés:</h2>



<?php

$num= mt_rand(1,6);

echo ($num);
echo("<br>");

if ($num!=6)
{
    if($num==1)
	  {
	   echo("<img src=\"img/des1.PNG\" alt=\"1\" />");
	   echo("<br>");
	   echo("Désolé, vous avez perdu...");
	   
	   echo("<form action=\"restdes1_4.php\" method=\"get\">");
	   echo("Veuillez saisir votre numéro d'étudiant");
	   echo("<input type=\"text\" id=\"gain\" name=\"gain\" />");
	   echo(" <input type=\"submit\" value=\"Valider\" name=\"Valider\" />");
	   echo("</form>");
	   echo("<br>");
	   
	  }

    if($num==2)
	  {
	   echo("<img src=\"img/des2.PNG\" alt=\"2\" />");
	   echo("<br>");
	   echo("Désolé, vous avez perdu...");
	   
	   echo("<form action=\"restdes1_4.php\" method=\"get\">");
	   echo("Veuillez saisir votre numéro d'étudiant");
	   echo("<input type=\"text\" id=\"gain\" name=\"gain\" />");
	   echo(" <input type=\"submit\" value=\"Valider\" name=\"Valider\" />");
	   echo("</form>");
	   echo("<br>");
	   
	  
	  }
     if($num==3)
	   {
	    echo("<img src=\"img/des3.PNG\" alt=\"3\" />");
	    echo("<br>");
	    echo("Désolé, vous avez perdu...");
	   
	    echo("<form action=\"restdes1_4.php\" method=\"get\">");
	    echo("Veuillez saisir votre numéro d'étudiant");
	    echo("<input type=\"text\" id=\"gain\" name=\"gain\" />");	   
		echo(" <input type=\"submit\" value=\"Valider\" name=\"Valider\" />");
		echo("</form>");
	    echo("<br>");
	   }
	    

    if($num==4)
	   {
	     echo("<img src=\"img/des4.PNG\" alt=\"4\" />");
	     echo("<br>");
	     echo("Désolé, vous avez perdu...");
	   
	     echo("<form action=\"restdes1_4.php\" method=\"get\">");
	     echo("Veuillez saisir votre numéro d'étudiant");
	     echo("<input type=\"text\" id=\"gain\" name=\"gain\" />");	   
		 echo(" <input type=\"submit\" value=\"Valider\" name=\"Valider\" />");
		 echo("</form>");
	     echo("<br>");
	   }
	   
	
    if($num==5)
		{
		 echo("<img src=\"img/des5.PNG\" alt=\"5\" />");
		 echo("<br>");
	     echo("Bravo ! vous avez gagné !!!!");
		 echo("<br>");
	   
	     echo("<form action=\"restdes_5.php\" method=\"get\">");
	     echo("Veuillez saisir votre numéro d'étudiant");
	     echo("<input type=\"text\" id=\"gain\" name=\"gain\" />");	   
		 echo(" <input type=\"submit\" value=\"Valider\" name=\"Valider\" />");
		 echo("</form>");
	     echo("<br>");
	 
        }
		
	

 }	
		 	
	
if($num==6)
		{
		echo("<img src=\"img/des6.PNG\" alt=\"6\" />");
		echo("Vous pouvez rejouer une fois");
		echo("<a href=\"des.php\"/><button type=\"button\" id=\"ok\" name=\"ok\"> rejouer</button></a>");
                }	
		

		 ?>

</body>

</html>	

		 