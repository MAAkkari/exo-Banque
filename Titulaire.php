<?php 
require_once 'Compte.php';
class Titulaire{ // classe titulaire
    private string $_nom;
    private string $_prenom;
    private DateTime $_naissance;
    private string $_ville;
    private array $_comptes=[];

    function __construct(string $nom, string $prenom, DateTime $naissance, string $ville){ // constructeur
        $this->_nom=$nom;
        $this->_prenom=$prenom;
        $this->_naissance=$naissance;
        $this->_ville=$ville;
    }
    //getters et setters
    public function getNom(){
        return $this->_nom;
    }
    public function setNom(string $nom){
        $this->_nom=$nom;
    }
    public function getPrenom(){
        return $this->_prenom;
    }
    public function setPrenom(string $prenom){
        $this->_prenom=$prenom;
    }
    public function getNaissance(){
        return $this->_naissance;
    }
    public function setNaissance(DateTime $naissance){
        $this->_naissance=$naissance;
    }
    public function getVille(){
        return $this->_ville;
    }
    public function setVille(string $ville){
        $this->_ville=$ville;
    }
    public function getComptes(){
        return $this->_comptes;
    }
    public function setComptes(Compte $compte){ // ajoute les compte de ce titulaire dans un tableau quand le compte est crée
        array_push($this->_comptes, $compte);
    }
    public function Aff_Titulaire(){ //affiche les informations du titulaire, et calcul son age a partir de la date actuelle,  
        $date_actuelle=date_create();
        $age=$this->_naissance->diff($date_actuelle)->y;
        echo "nom : ".$this->_nom."<br>"."prenom : ".$this->_prenom."<br>"."date de naissance : ".$this->_naissance->format('Y-m-d')
        ."<br>"."Age : ".$age."<br>"."Ville : ".$this->_ville."<br>"."Comptes du client : ";
        foreach($this->_comptes as $comptes){   
            
            echo "<br>".$comptes."<br>";
        }
    }
    public function __toString(){ //affiche les nom et prenom quand on echo un objet de classe titulaire
        return $this->_nom.", ".$this->_prenom;
    }
}













?>