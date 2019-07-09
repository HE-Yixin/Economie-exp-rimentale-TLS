<?php

// definition des constantes de connexion
define("DB_HOST", "localhost");
define("DB_USER", "stephane");
define("DB_PASSWORD", "Stephane.31!");
define("DB_NAME", "debut");

/* fonction de connexion
 * 
 *  retour : objet connexion (base choisie)
 */

function connexionChoix() {
   $cx=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or
            die("Erreur de connexion :".mysqli_connect_error());
    
    
    mysqli_select_db($cx,DB_NAME) or
            die("Erreur choix base: ". mysqli_error($cx));
            return $cx;
}





/* Verification unicité numéro
 * 
 *   connexion en parm entree
 *   numéro en parm entree
 *   booleen en sortie : vrai si numéro existe sinon faux
 */

function numExiste($cx, $num) {
    $sqlnum = "SELECT * FROM participant WHERE Num_Etu = '$num'";

    $curseur = mysqli_query($cx, $sqlnum);
    if ($curseur == FALSE) {
        die("erreur fonction numéro");
    } 
	else {
        if (mysqli_num_rows($curseur) != 0) {
            return TRUE;
			/* Ce numéro est déjà existé */
        } else {
            return FALSE;
        }
    }
}


		
     
	





?>