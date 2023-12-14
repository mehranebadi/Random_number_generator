<?php
namespace App\index;

require_once "E:\PHP\Projects\Random_number_generator\App\index\Validation.php";
use App\index\Validation;



class Make_A_Random {

    public $list ;
    public $total = 0;
    public $rand_list = [];
    public $class;


    
    public function __construct($class){
        $this->class = $class;
    }

    public function MakeRandom($var,$var1){
        if(($this->class->IsPost()) && ($this->class->EntryValidation())){
            // header("Location:final.php");
            for($i=0 ; $i<$var1; $i++ ){
                $rand = rand(1,$var);
                $this->list = $rand;
                array_push($this->rand_list,$rand);
                $this->total += $rand;
                
                
            }
            
        }
    }

    
}



$newObject = new Make_A_Random(new Validation)

?>