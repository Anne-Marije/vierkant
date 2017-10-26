
<html>
    <head>
        <style>
            body{
                font-family: 'courier';
            }
        </style>
    </head>
    <?php
    tekenVierkant("U","schuinestreep");
    tekenVierkant("q","gespiegeldeSchuineStreep");
    tekenVierkant("E","schuinestreep");
    tekenVierkant("F","gespiegeldeSchuineStreep");
    tekenVierkant("G","schuinestreep");
    tekenVierkant("H","gespiegeldeSchuineStreep");

    function tekenVierkant($vulCharacter, $figuurkeuze) {
//    $vulCharacter = "u";
        $regel = "";
        $plaats=0;
        $multiplier = 20;
        $teetje = "T";
//$bovensteRegel = "________________________________________________________";
        $bovensteRegel = "<br>" . str_repeat($teetje, $multiplier + 2);


//        echo "<table>  {border: 1px solid black;}<tr><th>oooooooooooooooooooooooooooooooooooooooo</th></tr></table>"
//
//
//        "-----------------------------------------------";
        echo $bovensteRegel;
        switch ($figuurkeuze) {
            case "schuinestreep":
                $plaats = $multiplier;


                break;
            case "gespiegeldeSchuineStreep":
                $plaats = 0;

            default:
                break;
        }
//        if ($richting == "windows") {
//            $plaats = $multiplier;
//        } else {
//            $plaats = 0;
//        }

        for ($i = 0; $i <= $multiplier; $i++) {    // loops vertikaal
//    echo $i . "<br>";
            echo "<br>" . $teetje;
            
            switch ($figuurkeuze) {
            case "schuinestreep":
                $plaats--;


                break;
            case "gespiegeldeSchuineStreep":
                $plaats++;

            default:
                break;
        }
            
//            if ($richting == "windows") {
//                $plaats--;
//            } else {
//                $plaats++;
//            }

            for ($j = 0; $j <= $multiplier; $j++) {  // loop om charactersw  horisontaal neeer te zetten
                if ($j == $plaats) {
                    echo "&nbsp";
                } else {
                    echo $vulCharacter;  // dit is het fvul chracter 
                }
            }
            echo $teetje;
        }
        $ondersteRegel = "<br>" . str_repeat($teetje, $multiplier + 2);
        echo $ondersteRegel;
    }
    ?>

</html>
