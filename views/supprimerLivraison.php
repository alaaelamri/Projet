<?PHP
include "../core/LivraisonC.php";
    $Livraison1C=new LivraisonC();
    if (isset($_POST["id"])){
	    $Livraison1C->supprimerLivraison($_POST["id"]);
	    header('Location: affichage.php');
    }
?>