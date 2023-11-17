<?php
namespace App\model;
class Dog{
    public $nome;
    public $raca;
    public $idade;
    public $dono;
public function __construct($nome, $raca, $idade, $dono){
     $this -> nome= $nome;
     $this -> raca=  $raca;
     $this -> idade= $idade;
     $this -> dono= $dono;
}
}