<?php

class Matiere {
    private $libelle;
    private $listeNote;

    public function __construct(string $mat){
        $this->libelle = $mat;
        $this->listeNote = [];
     }
 public function  addNote(Note $note){
     array_push($this->listeNote, $note);
    }
}