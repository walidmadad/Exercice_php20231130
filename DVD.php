<?php
class DVD extends Document{
    private $duree;
    private $bonus;
    public function __construct($auteur, $titre, $reference, $duree, $bonus){
        parent::__construct($auteur, $titre, $reference);
        $this->duree = $duree;
        $this->bonus = $bonus;
    }
    public function getDuree(){ return $this->duree; }
    public function getBonus(){ return $this->bonus; }
    public function setBonus($bonus){ $this->bonus = $bonus; }
    public function setDuree($duree){ $this->duree = $duree; }
    public function __toString(){
        return parent::__toString()." Durée ".$this->getDuree()." Bonus ".$this->bonus;
    }
}