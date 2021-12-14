<?php
require 'note.php';
require 'Matiere.php';

$mat1 = new Matiere('Php objet');
$n1 = new Note(15);
$mat1->addNote($n1);
$n1 = new Note(15);
$mat1->addNote($n1);
$n1 = new Note(15);
$mat1->addNote($n1);
$n1 = new Note(15);
$mat1->addNote($n1);
$n1 = new Note(15);
$mat1->addNote($n1);
$n1 = new Note(15);
$mat1->addNote($n1);

var_dump($mat1);

$n1->affiche();