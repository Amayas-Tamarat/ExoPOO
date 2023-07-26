<?php
require_once './entity/machine.php';
session_start(); 

if (isset($_SESSION['machine'])) {
    $machine = $_SESSION['machine'];
} else {
    $machine = new Machine("Senseo");
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["allumage"])) {
        echo $machine->allumage();
    } elseif (isset($_POST["mettreDosette"])) {
        echo $machine->mettreUneDosette();
    } elseif (isset($_POST["addSugar"])) {
        $sugarAmount = (int)$_POST["sugarAmount"];
        echo $machine->addSugar(true, $sugarAmount);
    } elseif (isset($_POST["faireCafe"])) {
        $moneyInserted = (float)$_POST["moneyAmount"];
        echo $machine->faireCafe($moneyInserted);
    } elseif (isset($_POST["turningOff"])) {
        echo $machine->turningOff();
    }

    $_SESSION['machine'] = $machine;
}
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <p>Machine Marque: <?php echo $machine->getMarque(); ?></p>

    <form method="post">
        <button type="submit" name="allumage">Allumer la machine</button>
        <button type="submit" name="mettreDosette">Mettre une dosette</button>
        <label for="sugarAmount">Quantité de sucre :</label>
        <input type="number" name="sugarAmount" id="sugarAmount" min="0" max="5" value="2">
        <button type="submit" name="addSugar">Ajouter du sucre</button>
        <label for="moneyAmount">Montant inséré :</label>
        <input type="number" name="moneyAmount" id="moneyAmount" min="0" step="1" value="1">
        <button type="submit" name="faireCafe">Faire un café</button>
        <button type="submit" name="turningOff">Éteindre la machine</button>
    </form>

</body>
</html>
