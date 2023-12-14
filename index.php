<?php

require_once ".\App\index\index-php.php";
use App\index\Make_A_Random;

$new = new Make_A_Random();
$new->EntryValidation();


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $side =(int)strtok($_POST["side"],$_POST["side"][0]);
    $dice = (int)$_POST["dice"];
    $new->MakeRandom($side,$dice);
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href=".\styles\style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Roll a Die</title>
</head>

<body>
    <?php include (".\header.php"); ?>
    <div id="main-div">
        <div>
            <h2 style="font-size:1rem">
                <?php for($i = 0;$i<count($new->rand_list);$i++){ ?>
                    <?php echo "Dice number {$i}:"." ".$new->rand_list[$i]."," ?>

                 <?php } ?>   
            </h2>
        <h2>
            <?php if($new->total != 0){ ?>
            <?php echo "Total is:"." ".$new->total ?> </h2>
            <?php } ?>
        </div><br>
        
    <form action="" method="post" class="">

    <div class="input-group mb-3">
        <span  class="input-group-text" id="inputGroup-sizing-default">Dice</span>
        <input  style="width: 10px;" id="dice"  type="text" class="form-control " aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="dice">
    </div>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
        <?php $error = isset($new->error['dice']['empty']) ?>
        <?php if($error) { ?>
                <p style="color:red"> <?php echo $new->error["dice"]["empty"]; ?> </p>
        <?php } ?>   
        <?php } ?><br>  

        <label for="side" style="color:aliceblue;text-align:left;">Select Sides</label><br>
        <select class="form-select" aria-label="Default select example" name="side" id="side">
            <option selected>Open this select menu</option>
            <option value="d4">d4</option>
            <option value="d6">d6</option>
            <option value="d8">d8</option>
            <option value="d10">d10</option>
            <option value="d12">d12</option>
            <option value="d20">d20</option>
        </select>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
            
                <?php $error = isset($new->error['side']['empty']) ?>
                <?php if($error) { ?>

                <p style="color:red;"><?php echo $new->error['side']['empty'] ?> </p>

        <?php } ?>
        <?php } ?><br>    
        
        
        <input type="submit" class="btn btn-secondary btn-lg" value="Generate">
    </form>

    </div>



</body>
</html>