<?PHP
include "../entities/Commande.php";
class CommandeC {

    function afficherCommandeC(){
        $sql = "SELECT * FROM commande ";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' .$e->getMessage());
        }
    }

    function recupererCommande($id){
        $sql="SELECT * from commande where id=$id";
        $db = config::getConnexion();
    	try{
    	    $liste=$db->query($sql);
    		return $liste;
    	}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
}
?>