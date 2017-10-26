
<html>
    <head>
        <style>
            body{
                font-family: 'courier';
            }
        </style>
    </head>
    <?php
    tekenVierkant("U", "kruis");
    tekenVierkant("q", "gespiegeldeSchuineStreep");
    tekenVierkant("m", "schuinestreep");
    tekenVierkant("F", "hyperbool");
    
//    tekenVierkant("G", "schuinestreep");
//    tekenVierkant("H", "gespiegeldeSchuineStreep");

    function tekenVierkant($vulCharacter, $figuurkeuze) {
//    $vulCharacter = "u";
        $regel = "";
        $plaats2 = 0;
        $plaats = 0;
        $multiplier = 100;
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
            case "hyperbool":
                $plaats = $multiplier;
                $gerardHeeftNietsMeeTeMaken = array("x", "o", "x", "x", "x", "o");
                break;
            case "gespiegeldeSchuineStreep":
                $plaats = 0;
                break;
            case "kruis":
                $plaats = 0;
                $plaats2 = $multiplier;

                break;

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
                case "hyperbool":
                    $plaats = $plaats - $i;
                    break;
                case "gespiegeldeSchuineStreep":
                    $plaats++;
                    break;
                case "kruis":
                    $plaats++;
                    $plaats2--;

                    break;
                default:
                    break;
            }

//            if ($richting == "windows") {
//                $plaats--;
//            } else {
//                $plaats++;
//            }

            for ($j = 0; $j <= $multiplier; $j++) {  // loop om charactersw  horisontaal neeer te zetten
                if ($figuurkeuze == "kruis") {
                    if ($j == $plaats || $j == $plaats2) {
                        echo $vulCharacter;
                    }else {
                        echo "&nbsp";
                        
                    }
                    
                    
                } else {
                    if ($j != $plaats) {
//                if ($j <= $plaats and $j > $plaats + 8) {
                        echo "&nbsp";
                    } else {
                        echo $vulCharacter;  // dit is het fvul chracter 
                    }
                }
            }
            echo $teetje;
        }
        $ondersteRegel = "<br>" . str_repeat($teetje, $multiplier + 2);
        echo $ondersteRegel;
    }
    ?>

</html>
