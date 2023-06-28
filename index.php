<?php 
require_once 'Titulaire.php';
require_once 'Compte.php';
$date1=new DateTime("1999-05-21");
$titulaire1=new Titulaire("jean","pierre",$date1,"strasbourg");
$compte1=new Compte("courant",500,"euro",$titulaire1);

$date2=new DateTime("1980-08-11");
$titulaire2=new Titulaire("aziz","aka",$date2,"marseille");
$compte2=new Compte("Livré A",150,"dollar",$titulaire1);

//sur comptes: utiliser Debiter(x) , Crediter(x), Virement($compte au quel virer, x) , Aff_compte() pour afficher les info du compte
//sur titulaires: Aff_Titulaire() pour afficher les info du titulaire ainsi que tout ses comptes

$titulaire1->Aff_Titulaire();

?>