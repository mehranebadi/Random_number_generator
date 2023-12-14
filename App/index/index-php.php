<?php
namespace App\index;




class Make_A_Random {
    public $list ;
    public $total = 0;
    public $error =[];
    public $rand_list = [];
    

    public function MakeRandom($var,$var1){
        if(($this->IsPost()) && ($this->EntryValidation())){
            // header("Location:final.php");
            for($i=0 ; $i<$var1; $i++ ){
                $rand = rand(1,$var);
                $this->list = $rand;
                array_push($this->rand_list,$rand);
                $this->total += $rand;
                
                
            }
            
        }
    }

    public function IsPost(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            return true;
    }

    }
    public function EntryValidation(){
        
        if($this->IsPost()){
            if((!is_null($_POST['dice'])) && ($_POST['dice'] == "")){

                $this->error['dice']['empty'] = "dice can't be empty";

            }if((!is_null($_POST['side'])) && (!($_POST['side'] == "")) && ($_POST['side'] == 'Open this select menu')){
                $this->error['side']['empty'] = "entry information is wrong";

            }else{
                return true;
            }
        }
    }
}


?>