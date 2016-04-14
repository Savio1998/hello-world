
 <?
class Auto {
    
    public $merk;
    public $prijs;
    public $img;
 
    
    function getAuto(){
        return array("merk"=> $this->merk,
                     "prijs"=> $this->prijs,
                     "img"=> $this->img);
    }
    function __construct($merk, $prijs, $img){
        $this->merk = $merk;
        $this->prijs = $prijs;
        $this->img = $img;
    }
    
    public function getMerk(){ 
        return $this->merk;
    }
    
    public function setMerk($merk){
        $this->merk = $merk;
    }
    
    public function getPrijs(){
         $this->prijs;
    }
    
    public function setPrijs($prijs){
        $this->prijs = $prijs;
    }
      public function getImg(){ 
        return $this->img;
    }
    
    public function setImg($img){
        $this->img = $img;
    }
    
}
    
class Filter {
    public $autos;
    
    function __construct($autos){
        $this->autos = $autos;
    }
    
    function autoFilter($merken, $min, $max){
        $filtered =  array();

        if($min == null){
            $min = 0;
        }
        
        if($max == null){
            $max = 100000000;
        }
        
        // if($merken == "Alles"){
        //     $filtered = $this->autos;
        // }
        
        foreach($this->autos as $auto){
            
            if($merken == null) {
                
                if($auto->prijs >= $min && $auto->prijs <= $max) {
                    array_push($filtered, $auto);
                }
                
            } else {
                
                if($auto->merk == $merken || $merken == "Alles") {
                    
                    if($auto->prijs >= $min && $auto->prijs <= $max){
                        array_push($filtered, $auto);
                    }
                    
                }
                
            }
        }
        
        return $filtered;
    }
    
}


?>

