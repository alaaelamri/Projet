<?PHP

class Commande{
    private $id;
    private $prix_total;
    private $nom_produit;
    private $quantite;

    function __construct($id, $prix_total, $nom_produit, $quantite){
        $this->id = $id;
        $this->prix_total = $prix_total;
        $this->nom_produit = $nom_produit;
        $this->quantite = $quantite;

    }
    function getId(){
        return $this->id;
    }
    function getPrixTotal(){
        return $this->prix_total;
    }
    function getNomProduit(){
        return $this->nom_produit;
    }
    function getQuantite(){
        return $this->quantite;
    }

    function setId($id){
        return $this->id;
    }
    function setPrixTotal($prix_total){
        return $this->prix_total;
    }
    function setNomProduit($nom_produit){
        return $this->nom_produit;
    }
    function setQuantite($quantite){
        return $this->quantite;
    }
}
?>