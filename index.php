<?php 
require "class.php";

class Post {
public $categoria;
public $title;
public $tag;
function __construct(Category $category, $title, $tag){
    $this->categoria =$category;
    $this->title=$title;
    $this->tag=$tag;
}


function stampa(){
   echo $this->categoria->getMyCategory();
   echo "Il titolo è ".$this->title."\n";
   echo "tag ".$this->tag."\n";
}
}

$Post = new Post(new Attualità, "esercizio", "PHPOOP");

echo $Post->stampa();
