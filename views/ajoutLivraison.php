<?PHP
include "../core/LivraisonC.php";
    @$first_name=$_POST['first_name'];
    @$last_name=$_POST['last_name'];
    @$adresse=$_POST['adresse'];
    @$zipcode=$_POST['zipcode'];
    @$state=$_POST['state'];
    @$city=$_POST['city'];
    @$phone_no=$_POST['phone_no'];
    @$email=$_POST['email'];
    @$id=$_POST['id'];
    if (isset($first_name) and isset($last_name) and isset($adresse) and isset($zipcode)  and isset($state) and isset($city) and isset($phone_no) and isset($email)){
        $Livraison1=new Livraison($first_name, $last_name, $adresse, $zipcode, $state, $city, $phone_no, $email, $id);
        $Livraison1C=new LivraisonC();
        $Livraison1C->ajouterLivraison($Livraison1);
        echo "L'ajout a été éffectué";
        header('Location: ../views/affichage.php');
        $to = $email;
        $subject = "My subject";
        $txt = "Hello world!";
        $headers = "From: alaa.elamri@gmail.com" . "\r\n" .
        "CC: somebodyelse@example.com";

        mail($to,$subject,$txt,$headers);
	}
	else{
	    echo "vérifier les champs";
    }
?>