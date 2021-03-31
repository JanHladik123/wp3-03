<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $HPShip = 200;
    $suppliesApal = 100;
    $suppliesBotak = 0;

    while (($suppliesBotak < 100) && ($HPShip > 0)) {
        $suppliesApal -= 10;
        echo "Z Apalu jsme vyskladnili 10 a zbývá: $suppliesApal <br>"; 

        for ($i=0; $i < 5; $i++) {
            $damage = rand(0,20);
            $HPShip -= $damage;
            echo "Piráti vystřelili na loď a ubrali jí $damage. <br> ";
            echo "Loď má nyní $HPShip HP.";  
            if ($HPShip <1) {
                echo "Loď byla zničena a už do ní nemohou střílet! <br>";
                break;
            }
        }

            if ($HPShip <1) {
                echo "Loď byla zničena a už do ní nemohou střílet! <br>.";
                break;
            }
            $suppliesBotak += 10;
            echo "Na Botak jsme přivezli 10 a nyní zde máme: $suppliesBotak <br> ";
            echo "Loď jede zpátky <br> ";
    }
    echo "zápatí webu";

    ?>
</body>
</html>