<?PHP
    include "cart.php";
    $id_paiement=0;
    @$id_commande=$row['idd'];
    $etat=0;
    @$prix_total=$row['prix_total'];
    $Paiement1=new paiement($id_paiement, $id_commande, $id_livraison, $etat, $prix_total);
    $Paiement1C=new PaiementC();
    $Paiement1C->ajouterPaiement($Paiement1);
?>