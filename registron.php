<?php
$c1 = $_GET["couleurs1"];
$c2 = $_GET["couleurs2"];
$c3 = $_GET["couleurs3"];
echo $c1;
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
                <span class="anneau1">1</span>
                <span class="anneau2">2</span>
                <span class="anneau3">3</span>
                <span class="anneau4">4</span>
            </div>
            <div class="containerPanel">
                <select name="couleurs1" id="selectionC1" class="selectionC1">
                    <option value="">Anneaux 1</option>
                    <option value="Noir">Noir 0</option>
                    <option value="Brun">Brun 1</option>
                    <option value="Red">Red 2</option>
                    <option value="Orange">Orange 3</option>
                    <option value="Yellow">Yellow 4</option>
                    <option value="Green" >Green 5</option>
                    <option value="Blue" >Blue 6</option>
                    <option value="Purple">Purple 7</option>
                    <option value="Gray">Gray 8</option>
                    <option value="White">White 9</option>
                </select>
                <select name="couleurs2" id="selectionC2" class="selectionC2">
                    <option value="">Anneaux 2</option>
                    <option value="Noir">Noir 0</option>
                    <option value="Brun">Brun 1</option>
                    <option value="Red">Red 2</option>
                    <option value="Orange">Orange 3</option>
                    <option value="Yellow">Yellow 4</option>
                    <option value="Green">Green 5</option>
                    <option value="Blue">Blue 6</option>
                    <option value="Purple">Purple 7</option>
                    <option value="Gray">Gray 8</option>
                    <option value="White">White 9</option>
                </select>
                <select name="couleurs3" id="selectionC3" class="selectionC3">
                    <option value="">Anneaux 3</option>
                    <option value="Noir">Noir x1Ω</option>
                    <option value="Brun">Brun x10Ω</option>
                    <option value="Red">Red x100Ω</option>
                    <option value="Orange">Orange 1kΩ</option>
                    <option value="Yellow">Yellow 10kΩ</option>
                    <option value="Green">Green x100kΩ</option>
                    <option value="Blue">Blue x1MΩ</option>
                    <option value="Purple">Purple x10MΩ</option>
                    <option value="Gray">Gray x100MΩ</option>
                    <option value="White">White x1GΩ</option>
                    <option value="Gold">Gold x0.1Ω</option>
                    <option value="Silver">Silver x0.01Ω</option>

                </select>
                <select name="couleurs4" id="selectionC4" class="selectionC4">
                    <option value="">Anneaux 4</option>
                    <option value="Brun">Brun ±1%</option>
                    <option value="Red">Red ±2%</option>
                    <option value="Green">Green ±0.5%</option>
                    <option value="Blue">Blue ±0.25%</option>
                    <option value="Purple">Purple ±0.10%</option>
                    <option value="Gray">Gray ±0.05%</option>
                    <option value="Gold">White ±5%</option>
                    <option value="Gray">White ±10%</option>
                </select>
            </div>         
        </div>
        <input type="submit">
        <?php 
        // cercle 1 les valeurs attribuer
            if ($c1 == "Noir")
            {
                $c1 = 0;
                echo "0";
            }
            if ($c1 == "Brun")
            {
                $c1 = 1;
                echo "1";
            }
            if ($c1 == "Red")
            {
                $c1 = 2;
                echo "2";
            }
            if ($c1 == "Orange")
            {
                $c1 = 3;
                echo "3";
            }
            if ($c1 == "Yellow")
            {
                $c1 = 4;
                echo "4";
            }
            if ($c1 == "Green")
            {
                $c1 = 5;
                echo "5";
            }
            if ($c1 == "Blue")
            {
                $c1 = 6;
                echo "6";
            }
            if ($c1 == "Purple")
            {
                $c1 = 7;
                echo "7";
            }
            if ($c1 == "Gray")
            {
                $c1 = 8;
                echo "8";
            }
            if ($c1 == "White")
            {
                $c1 = 9;
                echo "9";
            }
        // cercle 2
        if ($c2 == "Noir")
            {
                echo "0";
            }
            if ($c2 == "Brun")
            {
                echo "1";
            }
            if ($c2 == "Red")
            {
                echo "2";
            }
            if ($c2 == "Orange")
            {
                echo "3";
            }
            if ($c2 == "Yellow")
            {
                echo "4";
            }
            if ($c2 == "Green")
            {
                echo "5";
            }
            if ($c2 == "Blue")
            {
                echo "6";
            }
            if ($c2 == "Purple")
            {
                echo "7";
            }
            if ($c2 == "Gray")
            {
                echo "8";
            }
            if ($c2 == "White")
            {
                echo "9";
            }
        // cercle 3
        if ($c3 == "Noir")
            {
                echo " x 1Ω";
            }
            if ($c3 == "Brun")
            {
                echo " x 10Ω";
            }
            if ($c3 == "Red")
            {
                echo " x 100Ω";
            }
            if ($c3 == "Orange")
            {
                echo " x 1kΩ";
            }
            if ($c3 == "Yellow")
            {
                echo " x 10kΩ";
            }
            if ($c3 == "Green")
            {
                echo " x 100kΩ";
            }
            if ($c3 == "Blue")
            {
                echo " x 1MΩ";
            }
            if ($c3 == "Purple")
            {
                echo " x 10MΩ";
            }
            if ($c3 == "Gray")
            {
                echo " x 100MΩ";
            }
            if ($c3 == "White")
            {
                echo " x 1GΩ";
            }
            if ($c3 == "Gold")
            {
                echo " x 0.1Ω";
            }
            if ($c3 == "Silver")
            {
                echo " x 0.01Ω";
            }
        ?>
    </form>
</body>
</html>

