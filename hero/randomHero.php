<?
require "hero".rand(1,3).".php";

class SuperEroe {
    public $braccia;
    public $gambe;
    public function __construct(Braccia $Braccia, Gambe $Gambe ){
     $this->braccia = $Braccia;
    $this->gambe= $Gambe; 
    }  


}

$SuperEroe= new SuperEroe(new colpo(), new colpoBasso());
var_dump($SuperEroe->braccia->EsteticaBraccia());
