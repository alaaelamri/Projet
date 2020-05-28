<?PHP
include "../entities/Paiement.php";
include "../core/CommandeC.php";
class PaiementC {

    function ajouterPaiement($Paiement){
        $sql = "INSERT INTO paiement (id_paiement,id_commande,id_livraison,shipping,prix_total) VALUES (:id_paiement,:id_commande,:id_livraison,:shipping,:prix_total)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $id_paiement=$Paiement->getIdPaiement();
            $id_commande=$Paiement->getIdCommande();
            $id_livraison=$Paiement->getIdLivraison();
            $shipping=$Paiement->getShipping();
            $prix_total=$Paiement->getPrixTotal();

            $req->bindValue(':id_paiement',0);
            $req->bindValue(':id_commande',$id_commande);
            $req->bindValue(':id_livraison',$id_livraison);
            $req->bindValue(':shipping',$shipping);
            $req->bindValue(':prix_total',$prix_total);
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur:' .$e->getMessage();
        }
    }

    function afficherPaiement($id_paiement){
        $sql = "SELECT FROM paiement WHERE id_paiement=$id_paiement";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' .$e->getMessage());
        }
    }
        function afficherPaiementB(){
            $sql = "SELECT * FROM paiement";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch(Exception $e){
                die('Erreur:' .$e->getMessage());
            }
        }

    function supprimerPaiement($id){
        $sql = "DELETE FROM paiement WHERE id_paiement=:id";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id', $id);
        try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur:' .$e->getMessage());
        }
    }

}
?>