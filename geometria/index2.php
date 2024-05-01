<? trait Calculator{
    public function sum($a, $b) { 
        return $a + $b;
     }
     
     public function sub($a, $h) { 
        return $a - $h;
     }
     
     public function mul($a, $h) {
        return $a * $h;
     }
     
     public function div($a, $h) {
        return $a / $h;
     }
     
     public function sqr($a){
        return sqrt($a);
     }
}


class Rettangolo{
    use Calculator;
    public $b;
    public $h;

    function __construct($b, $h){
        $this->b= $b;
        $this->h = $h;
    }

    public function radiceSomma(){
        return $this->b+$this->h;
    }
}

$rettangolo = new Rettangolo(5,10);

echo "l'area del rettangolo è ".$rettangolo->mul(5, 10)."\n";
echo "Il Perimetro del rettangolo è ".$rettangolo->sum(2*5, 2*10)."\n";
echo "la diagonale del rettangolo è ".$rettangolo->sum(2*5, 2*10)."\n";
echo "La diagonale del rettangolo è ".$rettangolo->sqr($rettangolo->radiceSomma())."\n";