<?PHP
include "config.php";
include "../entities/Livraison.php";
include "../core/PaiementC.php";
class LivraisonC {

    function ajouterLivraison($Livraison){
        $sql = "INSERT INTO livraison (first_name,last_name,adresse,zipcode,state,city,phone_no,email,id) VALUES (:first_name,:last_name,:adresse,:zipcode,:state,:city,:phone_no,:email,:id)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $first_name=$Livraison->getFirstName();
            $last_name=$Livraison->getLastName();
            $adresse=$Livraison->getAdresse();
            $zipcode=$Livraison->getZipcode();
            $state=$Livraison->getState();
            $city=$Livraison->getCity();
            $phone_no=$Livraison->getPhoneNo();
            $email=$Livraison->getEmail();
            $id=$Livraison->getId();
            $req->bindValue(':first_name',$first_name);
            $req->bindValue(':last_name',$last_name);
            $req->bindValue(':adresse',$adresse);
            $req->bindValue(':zipcode',$zipcode);
            $req->bindValue(':state',$state);
            $req->bindValue(':city',$city);
            $req->bindValue(':phone_no',$phone_no);
            $req->bindValue(':email',$email);
            $req->bindValue(':id', 0);
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur:' .$e->getMessage();
        }
    }

    function afficherLivraisonsA(){
        $sql = "SELECT * FROM livraison";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' .$e->getMessage());
        }
    }
    function afficherLivraisonB($id){
        $sql = "SELECT FROM livraison WHERE id=$id";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' .$e->getMessage());
        }
    }
    function supprimerLivraison($id){
        $sql = "DELETE FROM livraison WHERE id=:id";
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

    function modifierLivraison($Livraison, $id){
        $sql = "UPDATE livraison SET first_name=:first_name,last_name=:last_name,adresse=:adresse, zipcode=:zipcode, state=:state, city=:city, phone_no=:phone_no, email=:email, id=:id WHERE id=$id";
        $db = config::getConnexion();
        try{
            $req = $db->prepare($sql);
            $first_name=$Livraison->getFirstName();
            $last_name=$Livraison->getLastName();
            $adresse=$Livraison->getAdresse();
            $zipcode=$Livraison->getZipcode();
            $state=$Livraison->getState();
            $city=$Livraison->getCity();
            $phone_no=$Livraison->getPhoneNo();
            $email=$Livraison->getEmail();
            $datas = array(':first_name'=>$first_name, ':last_name'=>$last_name, ':adresse'=>$adresse, ':zipcode'=>$zipcode, ':state'=>$state, ':city'=>$city, ':phone_no'=>$phone_no, ':email'=>$email,':id'=>$id );
            $req->bindValue(':first_name',$first_name);
            $req->bindValue(':last_name',$last_name);
            $req->bindValue(':adresse',$adresse);
            $req->bindValue(':zipcode',$zipcode);
            $req->bindValue(':state',$state);
            $req->bindValue(':city',$city);
            $req->bindValue(':phone_no',$phone_no);
            $req->bindValue(':email',$email);
            $req->bindValue(':id', $id);
            $s = $req->execute();
        }
        catch (Exception $e){
            echo "Erreur! " .$e->getMessage();
            echo "Les datas: ";
            print_r($datas);
        }
    }

    function recupererLivraison($id){
        $sql="SELECT * from livraison where id=$id";
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