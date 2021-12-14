<?php


class note{

    private  int $note;
    private  int $noteMin;
    private  int $noteMax;

    
    public function __construct(string $note = 'reçue', float $noteMin = 0.0, float $noteMax = 20.0)
    {
        $this->note = $note;
        $this->noteMin= $noteMin;
        $this->noteMax = $noteMax;
    }
    /////les getters
    public function getNote(){
        return $this->note;
    }
    public function getNoteMin(){
        return $this->noteMax;
    }
    public function getNoteMax(){
        return $this->noteMin;
    }

    ////les setters
    public function setNote($note){
    if ($note >= $this->noteMin && $note <= $this->noteMax){
            $this->note = $note;
    }else{
        echo 'la note doit être comprise entre '.$this->noteMin. ' et '.$this->noteMax . "\n";
        }
    }
    public function setNoteMin($noteMin)
    {
        $this->noteMax = $noteMin;
    }
    public function setNoteMax($noteMax)
    {
         $this->noteMin = $noteMax;
    }

        public function affiche(){
        echo'La note est de '.$this->note.' comprise entre '.$this->noteMin.' et '.$this->noteMax;
    }
}