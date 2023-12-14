<?php

require_once "E:\PHP\Projects\Random_number_generator\App\index\Validation.php";
require_once "E:\PHP\Projects\Random_number_generator\App\index\Make_A_Random.php";
use App\index\Make_A_Random;
use App\index\Validation;


$Object2= new Validation();
$Object = new Make_A_Random($Object2);


if(($_SERVER["REQUEST_METHOD"] == "POST"))
{
    $side =(int)strtok($_POST["side"],$_POST["side"][0]);
    $dice = (int)$_POST["dice"];
    $Object->MakeRandom($side,$dice);
}

?>