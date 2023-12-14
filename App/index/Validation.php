<?php

namespace App\index;

class Validation{

    public $error=[];
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
                $this->error['side']['empty'] = "Entry information is wrong";

            }else{
                return true;
            }
        }
    }
}


?>