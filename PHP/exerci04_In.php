<?php
    function converter($valor){
        switch($valor){
            case "A":
                return 10;
                break;
            case "B":
                return 11;
                break;
            case "C":
                return 12;
                break;
            case "D":
                return 13;
                break;
            case "E":
                return 14;
                break;
            case "F":
                return 15;
                break;
            default:
            return $valor;
            break;
        }
    }

    function quaInver(){
        $hexa = $_GET['hexadecimal'];
        $tamanho = strlen($hexa);
        $cara ="";
        $res = 0;
        for($i = $tamanho-1; $i >= 0; $i--){
            $cara = substr($hexa,$i,1);
            $cara = converter($cara);
            echo "<br>".pow(16,$i);
            $res += $cara * pow(16,$i);
        }
        return $res;
    }

echo quaInver();

?>


<br><br><a href="../HTML/btn.html"><button>Voltar</button></a>