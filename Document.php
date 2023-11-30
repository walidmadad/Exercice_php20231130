<?php
class Document{
    protected $auteur;
    protected $titre;
    protected $reference;
    
    public function __construct($auteur, $titre, $reference){
        $this->auteur = $auteur;
        $this->titre = $titre;
        $this->reference = $reference;
    }
    public function getAuteur(){
        return $this->auteur;
    }
    public function getTitre(){
        return $this->titre;
    }
    public function getReference(){
        return $this->reference;
    }
    public function setAuteur($auteur){
        $this->auteur = $auteur;
    }
    public function setTitre($titre){
        $this->titre = $titre;
    }
    public function setReference($reference){
        $this->reference = $reference;
    }
    public function __toString(){
        return "Auteur ".$this->auteur." Titre ".$this->titre." Réference ".$this->reference;
    }
}