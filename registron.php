<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registron.css">
    <title>Registron Calcul</title>

<body>

<?php
echo'
    <h1>Generator Resistance</h1>
    <section class="containerResistance">
        <div class="resistance">
            <span class="anneau1">1</span>
            <span class="anneau2">2</span>
            <span class="anneau3">3</span>
            <span class="anneau4">4</span>

        </div>
        <div class="containerPanel">
            <select name="couleurs" id="selectionC1" class="selectionC1">
                <option value="">Anneaux 1</option>
                <option value="Noir">Noir 0</option>
                <option value="Brun">Brun 1</option>
                <option value="Red">Red 2</option>
                <option value="Orange">Orange 3</option>
                <option value="Yellow">Yellow 4</option>
                <option value="Green">Green 5</option>
                <option value="Blue">Blue 6</option>
                <option value="Pink">Pink 7</option>
                <option value="Gray">Gray 8</option>
                <option value="White">White 9</option>
            </select>
            <select name="couleurs" id="selectionC2" class="selectionC2">
                <option value="">Anneaux 2</option>
                <option value="Noir">Noir 0</option>
                <option value="Brun">Brun 1</option>
                <option value="Red">Red 2</option>
                <option value="Orange">Orange 3</option>
                <option value="Yellow">Yellow 4</option>
                <option value="Green">Green 5</option>
                <option value="Blue">Blue 6</option>
                <option value="Pink">Pink 7</option>
                <option value="Gray">Gray 8</option>
                <option value="White">White 9</option>
            </select>
            <select name="couleurs" id="selectionC3" class="selectionC3">
                <option value="">Anneaux 3</option>
                <option value="Noir">Noir x1Ω</option>
                <option value="Brun">Brun x10Ω</option>
                <option value="Red">Red x100Ω</option>
                <option value="Orange">Orange 1kΩ</option>
                <option value="Yellow">Yellow 10kΩ</option>
                <option value="Green">Green x100kΩ</option>
                <option value="Blue">Blue x1MΩ</option>
                <option value="Pink">Pink x10MΩ</option>
                <option value="Gray">Gray x100MΩ</option>
                <option value="White">White x1GΩ</option>
            </select>
            <select name="couleurs" id="selectionC4" class="selectionC4">
                <option value="">Anneaux 4</option>
                <option value="Brun">Brun ±1%</option>
                <option value="Red">Red ±2%</option>
                <option value="Green">Green ±0.5%</option>
                <option value="Blue">Blue ±0.25%</option>
                <option value="Pink">Pink ±0.10%</option>
                <option value="Gray">Gray ±0.05%</option>
                <option value="Gold">White ±5%</option>
                <option value="Gray">White ±10%</option>

            </select>
            
        </div>         
</section>

<script src="registron.js"></script>


</body>
</html>'

?>
<img src="images/couleur.png" alt="" srcset="">

