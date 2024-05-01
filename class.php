<?php 

/* TRACCIA 1------- */
abstract class Category {
    public $category;
    abstract function getMyCategory();
}

class Attualità extends Category {


public function getMyCategory(){
echo "Attualità"."\n";
}

}
class Sport extends Category {

 
 public function getMyCategory(){
 echo "Sport"."\n";
 }
 
 }

 class Gossip extends Category {
 
 public function getMyCategory(){
 echo "Gossip"."\n";
 }
 
 }

 class Storia extends Category {
 
 public function getMyCategory(){
 echo "Storia"."\n";
 }
 
 }

$Attualità = new Attualità();
$Sport = new Sport();
$Gossip = new Gossip();
$Storia = new Storia();


echo $Sport -> getMyCategory();
echo $Attualità->getMyCategory();
echo $Gossip->getMyCategory();
echo $Storia->getMyCategory();



