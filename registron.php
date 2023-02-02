<?php

if (empty ($c1)){
    $c1 = 0;
    
   } 
   if (empty ($c2)) { 
    $c2 = 0;
   }
   if (empty ($c3)) { 
    $c3 = 0;
   }
   if (empty ($c4)) { 
    $c4 = 0;
   }

?>


<?php

    $c1=[

        [
            "colorName" => "noir",
            "value" => 0,
        ],
        [
            "colorName"=> "brun",
            "value" => 1
        ],
            
        [
            "colorName"=> "rouge",
            "value" => 2
        ],

        [

            "colorName"=> "orange",
            "value" => 3
        ],
        
        [
            "colorName" => "jaune",
            "value" => 4
        ],
        
        [

            "colorName"=> "vert",
            "value" => 5
        ],

        [

            "colorName"=> "bleu",
            "value" => 6
        ],

        [

            "colorName"=> "violet",
            "value" => 7
        ],

        [

            "colorName"=> "gris",
            "value" => 8
        ],

        [

            "colorName"=> "blanc",
            "value" => 9
        ],
      
    ];

    $c2=[
        [
            "colorName" => "noir",
            "value" => 0
        ],

        [
            "colorName"=> "brun",
            "value" => 1
        ],
            
        [
            "colorName"=> "rouge",
            "value" => 2
        ],

        [

            "colorName"=> "orange",
            "value" => 3
        ],
        
        [
            "colorName" => "jaune",
            "value" => 4
        ],
        
        [

            "colorName"=> "vert",
            "value" => 5
        ],

        [

            "colorName"=> "bleu",
            "value" => 6
        ],

        [

            "colorName"=> "violet",
            "value" => 7
        ],

        [

            "colorName"=> "gris",
            "value" => 8
        ],

        [

            "colorName"=> "blanc",
            "value" => 9
        ],
    ];

    $c3=[
        [
            "colorName"=> "noir",
            "value" => 1
        ],

        [
            "colorName"=> "brun",
            "value" => 10
        ],
        [
            "colorName"=> "rouge",
            "value" => 100
        ],
        [
            "colorName"=> "orange",
            "value" => 1
        ],
        [
            "colorName"=> "jaune",
            "value" => 10
        ],
        [
            "colorName"=> "vert",
            "value" => 100
        ],
        [
            "colorName"=> "bleu",
            "value" => 1
        ],
        [
            "colorName"=> "violet",
            "value" => 10
        ],
        [
            "colorName"=> "gris",
            "value" => 100
        ],
        [
            "colorName"=> "blanc",
            "value" => 1
        ],
        [
            "colorName"=> "or",
            "value" => 0.1
        ],
        [
            "colorName"=> "argent",
            "value" => 0.01
        ],
    
    ];

    $c4=[
        [
            "colorName"=> "brun",
            "value" => 1
        ],
        [
            "colorName"=> "rouge",
            "value" => 2
        ],
        [
            "colorName"=> "vert",
            "value" => 0.5
        ],
        [
            "colorName"=> "bleu",
            "value" => 0.25
        ],
        [
            "colorName"=> "violet",
            "value" => 0.10
        ],
        [
            "colorName"=> "gris",
            "value" => 0.05
        ],
        [
            "colorName"=> "or",
            "value" => 5
        ],
        [
            "colorName"=> "argent",
            "value" => 10
        ],
  
    ];
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registron.css">
    <title>Registron Calcul</title>
</head>
<body>
    <h1>Generator Resistance</h1>
    <form>
        <div class="containerResistance">
            <div class="resistance">
                <span id="anneau1" class="anneau1"></span>
                <span id="anneau2" class="anneau2"></span>
                <span id="anneau3" class="anneau3"></span>
                <span id="anneau4" class="anneau4"></span>
            </div>
            <div class="containerPanel">
            
                <select id="selectionC1" name="couleurs1"  class="selectionC1">
                <option>Choisir </option>
                    <?php foreach($c1 as $ourColors) : ?>
                        <option value=" <?= $ourColors["value"]?>"> <?=$ourColors["colorName"]?></option>            
                    <?php endforeach ?>
                </select>
                <select name="couleurs2"  class="selectionC1">
                <option>Choisir  </option>
                <?php foreach($c2 as $ourColors) :?>
                        <option value="<?= $ourColors["value"]?>"<?=$ourColors["value"]?> > <?=$ourColors["colorName"]?></option>            
                    <?php endforeach ?>
                </select>
                <select name="couleurs3"  class="selectionC1">
                <option>Choisir  </option>
                <?php foreach($c3 as $ourColors) :?>
                        <option value="<?= $ourColors["value"]?>"<?=$ourColors["value"]?> > <?=$ourColors["colorName"]?> </option>            
                    <?php endforeach ?>
                 

                </select>
                <select name="couleurs4"  class="selectionC1">
                    <option>Choisir  </option>
                <?php foreach($c4 as $ourColors) :?>
                        <option value="<?= $ourColors["value"]?>" <?=$ourColors["value"]?> > <?=$ourColors["colorName"]?></option>            
                    <?php endforeach ?>
            </div>         
        </div>
        <div class="submit">
            <input type="submit">
        </div>
    <!-- // calcule de la multiplications -->
    <div> 
        <?php

$opt1 =$_GET["couleurs1"];
$opt2 =$_GET["couleurs2"];
$opt3 =$_GET["couleurs3"];
$opt4 =$_GET["couleurs4"];

$resultM = ($opt1.$opt2)*$opt3;

echo ($opt1.$opt2). " x " . $opt3 . " " . "=" . $resultM. "= " . $resultM . "Ω " . "±" . $opt4 . "%";
?></div>
</form>
<script src="registron.js"></script>
</body>
</html>


<!-- < ? php
        $resultM = ($c1.$c2)*$c3;
        echo ($c1.$c2). " x " . $c3 . " " . "=" . $resultM
        . "= " . $resultM . "Ω " . "±" . $c4 . "%"
?> -->
 <!-- < ? php   Ancienne méthode
        // cercle 1 les valeurs attribuer
            if ($c1 == "Noir")
            {
                $c1 = 0;
                
            }
            if ($c1 == "Brun")
            {
                $c1 = 1;
                
            }
            if ($c1 == "rouge")
            {
                $c1 = 2;
                
            }
            if ($c1 == "Orange")
            {
                $c1 = 3;
                
            }
            if ($c1 == "jaune")
            {
                $c1 = 4;
                
            }
            if ($c1 == "vert")
            {
                $c1 = 5;
                
            }
            if ($c1 == "Blue")
            {
                $c1 = 6;
                
            }
            if ($c1 == "Purple")
            {
                $c1 = 7;
                
            }
            if ($c1 == "Gray")
            {
                $c1 = 8;
                
            }
            if ($c1 == "blanc")
            {
                $c1 = 9;
                
            }
        // cercle 2
        if ($c2 == "Noir")
            {
                $c2 = 0;
                
            }
            if ($c2 == "Brun")
            {
                $c2 = 1;
                
            }
            if ($c2 == "rouge")
            {
                $c2 = 2;
                
            }
            if ($c2 == "Orange")
            {
                $c2 = 3;
                
            }
            if ($c2 == "jaune")
            {
                $c2 = 4;
                
            }
            if ($c2 == "vert")
            {
                $c2 = 5;
                
            }
            if ($c2 == "Blue")
            { $c2 = 6;
                
            }
            if ($c2 == "Purple")
            {
                $c2 = 7;
                
            }
            if ($c2 == "Gray")
            {
                $c2 = 8;
                
            }
            if ($c2 == "blanc")
            {
                $c2 = 9;
                
            }
        // cercle 3
        if ($c3 == "Noir")
            {
                $c3 = 1;
            }
            if ($c3 == "Brun")
            {
                $c3 = 10;
            }
            if ($c3 == "rouge")
            {
                $c3 = 100;
            }
            if ($c3 == "Orange")
            {
                $c3 = 1000;
            }
            if ($c3 == "jaune")
            {
                $c3 = 10000;
            }
            if ($c3 == "vert")
            {
                $c3 = 100000;
            }
            if ($c3 == "Blue")
            {
                $c3 = 1000000;
            }
            if ($c3 == "Purple")
            {
                $c3 = 10000000;
            }
            if ($c3 == "Gray")
            {
                $c3 = 100000000;
            }
            if ($c3 == "blanc")
            {
                $c3 = 1;
            }
            if ($c3 == "Gold")
            {
                $c3 = 0.1;
            }
            if ($c3 == "Silver")
            {
                $c3 = 0.01;
            }


            // cercle 4
        
        if ($c4 == "Brun")
        {
            $c4 = 0;
        }

        if ($c4 == "rouge")
        {
            $c4 = 1;
        }
    
        if ($c4 == "vert")
        {
            $c4 = 2;
        }
        if ($c4 == "Blue")
        {
            $c4 = 3;
        }
        if ($c4 == "Purple")
        {
            $c4 = 4;
        }
        if ($c4 == "Gray")
        {
            $c4 = 5;
        }
    
        if ($c4 == "Gold")
        {
            $c4 = 6;
        }
        if ($c4 == "Silver")
        {
            $c4 = 7;
        }
        // calcule de la multiplications
        $resultM = ($c1.$c2) * $c3;
        echo ($c1.$c2). " x " . $c3 . " " . "=" . $resultM
        . "= " . $resultM . "Ω " . "±" . $c4 . "%"
        //calcul du pourcentage
        ?>
    </form>
</body>
</html>

