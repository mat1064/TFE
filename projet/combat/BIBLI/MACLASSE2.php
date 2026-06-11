<?php
class Personnage
{          
    private $_Nom;
    private $_Type;
    private $_attaque;      
    private $_defense;  
    private $_Attaque_Special;
    private $_Defense_Special;

    //// fonctions SET //////
    public function setPv($pv)
    {
        $this->_pv = $pv;
    }

    public function setNom($Nom)
    {
        $this->_Nom = $Nom;
    }

    public function setType($Type)
    {
        $this->_Type = $Type;
    }

    public function setAttaque($attaque)
    {
        $this->_attaque = $attaque;
    }

    public function setDefense($defense)
    {
        $this->_defense = $defense;
    }

    public function setAttaqueSpecial($Attaque_Special)
    {
        $this->_Attaque_Special = $Attaque_Special;
    }

    public function setDefenseSpecial($Defense_Special)
    {
        $this->_Defense_Special = $Defense_Special;
    }

    public function setImage($IMG)
    {
        $this->_IMG = $IMG;
    }
   

    //// fonction CONSTRUCTEUR /////
    public function construct($Nom, $Type, $pv, $attaque, $defense, $Attaque_Special, $Defense_Special)
    {
        $this->setNom($Nom);
        $this->setType($Type);
        $this->setPv($pv);
        $this->setAttaque($attaque);
        $this->setDefense($defense);
        $this->setAttaqueSpecial($Attaque_Special);
        $this->setDefenseSpecial($Defense_Special);
        $this->setImage($IMG);
    }

    //// fonctions RETOUR ATTRIBUT ///////  
    public function pv()
    {
        return $this->_pv;
    }

    //// fonctions ACTION ///////
    public function frapper($persoAFrapper)
    {
        $persoAFrapper->_pv -= $this->_attaque;
    }

    public function attspecial($persoAAttspecial)
    {
        $persoAAttspecial->_pv -= $this->_Attaque_Special;
    }

    //// fonctions AFFICHAGE ///////
    public function afficherTout()
    {
        echo "<br>";
        echo "Je suis ", $this->_Nom, "<br>";
        echo "Ma première attaque: ", $this->_Type, "<br>";
        echo "Cette attaque vaut: ", $this->_attaque, "<br>";
        echo "Ma deuxième attaque: ", $this->_defense, "<br>";
        echo "Cette deuxième attaque vaut: ", $this->_Attaque_Special, "<br>";
        echo "Mes points de vie sont: ", $this->_pv, "<br>";
        echo "<br><br><br>";
    }
   
    public function afficherVie1()
    {
        echo "<br>";
        echo "Je suis ", $this->_Nom, " ";
        echo "il a ", $this->_pv, " HP.";
        echo " | ";
    }
   
    public function afficherVie2()
    {
        echo "";
        echo "Je suis ", $this->_Nom, " ";
        echo "il a ", $this->_pv, " HP.<br>";
        echo "<br><br>";
    }
   
    public function afficherApres()
    {
        echo $this->_Nom, " a ", $this->_pv, " points de vie<br>";
    }

    //// Méthode pour vérifier si le personnage est en vie ////
    public function estEnVie()
    {
        return $this->_pv > 0;
    }
}
?>