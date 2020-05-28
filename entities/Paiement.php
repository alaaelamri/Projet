<?PHP

class paiement{
    private $id_paiement;
    private $id_commande;
    private $id_livraison;
    private $shipping;
    private $prix_total;

    function __construct($id_paiement, $id_commande, $id_livraison, $shipping, $prix_total){
        $this->id_paiement = $id_paiement;
        $this->id_commande = $id_commande;
        $this->id_livraison = $id_livraison;
        $this->shipping = $shipping;
        $this->prix_total = $prix_total;
    }
    function getIdPaiement(){
        return $this->id_paiement;
    }
    function getIdCommande(){
        return $this->id_commande;
    }
    function getIdLivraison(){
        return $this->id_livraison;
    }
    function getShipping(){
        return $this->shipping;
    }
    function getPrixTotal(){
        return $this->prix_total;
    }

    function setIdPaiement($id_paiement){
        return $this->id_paiement;
    }
    function setIdCommande($id_commande){
        return $this->id_commande;
    }
    function setIdLivraison($id_livraison){
        return $this->id_livraison;
    }
    function setShipping($shipping){
        return $this->shipping;
    }
    function setPrixTotal($prix_total){
        return $this->prix_total;
    }
}
?>