<?php 
class primeMaster {
    
    const intLimit = 10;
    public $intStartNumber = 1;
    public $intInnerStartNumber = 1;
    public $countPrimeNumber = 1;
    public $countInnerPrimeNumber = 1;
    
    private function IsPrime($n) {
        for($x=2; $x<$n; $x++) {
          if($n % $x ==0) { return false;}
        } 
        return true;
    }
    
    public function printPrimeSeries(){

        if($this->IsPrime($this->intStartNumber))
            {
                if($this->IsPrime($this->intInnerStartNumber))
                {
                    echo $primerNumber = $this->intStartNumber*$this->intInnerStartNumber;
                    echo " ";
                    $this->countInnerPrimeNumber++;
                }
                $this->intInnerStartNumber++;
                
                if($this->countInnerPrimeNumber<=self::intLimit){
                    $this->printPrimeSeries();
                }
                $this->countInnerPrimeNumber = 1;
                echo "\n";
                
                $this->countPrimeNumber++;
            }
            
            $this->intStartNumber++;
            
            if($this->countPrimeNumber<=self::intLimit){
                $this->intInnerStartNumber = 1;
                $this->printPrimeSeries();
            }else{
                die();
            }
    }
    
}    
$objPrime = new primeMaster();
$objPrime->printPrimeSeries();
?>
