<?php
namespace App\HTML;


/**
 * Class Form
 * Permet de générer des éléments de formulaire rapidement facilement...
*/
class Form{
    /**
     * @var array Données utilisées par le formulaire 
     */
    private $data;
    /**
     * @var string Tag utilisé pour entourer les champs de formulaire
     */
    public $surround = 'p';

    /**
     * @param array $data Permet de renseigner l'attribut value des champs
     */
    public function __construct($data=array())
    {
        $this->data = $data;
    }

    protected function surround($html){
        return '<'.$this->surround.'>'.$html.'</'.$this->surround.'>';
    }

    protected function getValue($index){
        return isset($this->data[$index]) ? $this->data[$index] : null ;
    }

    /**
     * @param string $name Permet de préciser le nom du champs input
     * @param string $type Permet de préciser le type du champs input
     * @return string Retourne un champs input formaté
     */
    public function input($name,$type="text"){

        return $this->surround('<input type="'.$type.'" name="'.$name.'" value="'.$this->getValue($name).'">');
    }

    public function submit(){
        return $this->surround('<button type="submit">Envoyer</button>');
    }

    public function displayDate(){
        $d = new \DateTime();
        return $d->format("Y-m-d");
    }
}