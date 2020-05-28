<?PHP

class Livraison{
    private $first_name;
    private $last_name;
    private $adresse;
    private $zipcode;
    private $state;
    private $city;
    private $phone_no;
    private $email;
    private $id;

    function __construct($first_name, $last_name, $adresse, $zipcode, $state, $city, $phone_no, $email, $id){
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->adresse = $adresse;
        $this->zipcode = $zipcode;
        $this->state = $state;
        $this->city = $city;
        $this->phone_no = $phone_no;
        $this->email = $email;
        $this->id = $id;
    }
    function getFirstName(){
        return $this->first_name;
    }
    function getLastName(){
        return $this->last_name;
    }
    function getAdresse(){
        return $this->adresse;
    }
    function getZipcode(){
        return $this->zipcode;
    }
    function getState(){
        return $this->state;
    }
    function getCity(){
        return $this->city;
    }
    function getPhoneNo(){
        return $this->phone_no;
    }
    function getEmail(){
        return $this->email;
    }
    function getId(){
        return $this->id;
    }
    function setFirstName($first_name){
        return $this->first_name;
    }
    function setLastName($last_name){
        return $this->last_name;
    }
    function setAdresse($adresse){
        return $this->adresse;
    }
    function setZipcode($zipcode){
        return $this->zipcode;
    }
    function setState($state){
        return $this->state;
    }
    function setCity($city){
        return $this->city;
    }
    function setPhoneNo($phone_no){
        return $this->phone_no;
    }
    function setEmail($email){
        return $this->email;
    }
    function setId($id){
        return $this->id;
    }

}
?>