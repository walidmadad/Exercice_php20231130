<?php
require_once("Document.php");
class Livre extends Document{
    private $nombreDePages;
    public function __construct($auteur, $titre, $reference, $nombreDePages){
        parent::__construct($auteur, $titre, $reference);
        $this->nombreDePages = $nombreDePages;
    }
    public function getNombreDePages(){
        return $this->nombreDePages;
    }
    public function setNombreDePages($nombreDePages){
        $this->nombreDePages = $nombreDePages;
    }
    public function __toString(){
        return parent::__toString()." Nombre de pages ".$this->nombreDePages;
    }

}
