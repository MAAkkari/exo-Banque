<?php 
require_once 'Titulaire.php';
class Compte{ // class compte
    private string $_libelle;
    private float $_solde;
    private string $_devise;
    private Titulaire $_titulaire;
// constructeur , ajoute le compte dans les comptes du titulaire a la creation
    function __construct(string $libelle,float $solde,string $devise,Titulaire $titulaire){  
        $this->_libelle=$libelle;
        $this->_solde=$solde;
        $this->_devise=$devise;
        $this->_titulaire=$titulaire;
        $titulaire->setComptes($this);
    }
// getters et setters
    public function getLibelle(){
        return $this->_libelle;
    }
    public function setLibelle(string $libelle){
        $this->_libelle=$libelle;
    }
    public function getSolde(){
        return $this->_solde;
    }
    public function setSolde(float $solde){
        $this->_solde=$solde;
    }
    public function getDevise(){
        return $this->_devise;
    }
    public function setDevise(string $devise){
        $this->_devise=$devise;
    }
    public function getTitulaire(){
        return $this->_devise;
    }
    public function setTitulaire(Titulaire $titulaire){
        $this->_titulaire=$titulaire;
    }
    //Ajoute un montant au solde du compte verifie si l'entrer donné est >0
    public function Crediter(float $credit){
        if ($credit>0) {
            $this->_solde+=$credit;
        }
    }
    //Enleve un montant au solde du compte verifie si l'entrer donné est >0
    public function Debiter(float $debit){
        if ($debit>0) {
            $this->_solde-=$debit;
        }
    }
    //transfer des fond d'un compte a l'autre, verifie si le compte qui transfer a un solde suffisant
    public function Virement(Compte $compte, float $montant){
        if ($montant<=$this->_solde){
            $this->_solde-=$montant;
            $compte->_solde+=$montant;
        }
    }
    //affiche les informations du compte
    public function Aff_compte(){
        echo "Libellé : ".$this->_libelle."<br>".
        "Solde : ".$this->_solde." ".$this->_devise."<br>".
        "Titulaire : ";echo "$this->_titulaire";
    }
    public function __toString(){ //formate l'affichage du compte 
        return "Libellé : ".$this->_libelle."<br>".
        "Solde : ".$this->_solde." ".$this->_devise."<br>".
        "Titulaire : "."$this->_titulaire"; 
    }
}














?>