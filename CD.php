<?php
class CD extends Document {
    private $duree;
    private $nombreDePages;
    public function __construct($auteur, $titre, $reference, $duree, $nombreDePages){
        parent::__construct($auteur, $titre, $reference) ;
        $this->duree = $duree;
        $this->nombreDePages = $nombreDePages;
    }
    public function getDuree(){ return $this->duree; }
    public function getNomDePages(){ return $this->nombreDePages; }
    public function __toString(){
        return parent::__toString()." Durée ".$this->duree." Nombre de pages ".$this->nombreDePages;
    }

}