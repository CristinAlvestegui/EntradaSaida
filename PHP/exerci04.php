<?php
    $deci = $_GET['decimal'];
    function converter($valor){
        switch($valor){
            case 10:
                return "A";
                break;
            case 11:
                return "B";
                break;
            case 12:
                return "C";
                break;
            case 13:
                return "D";
                break;
            case 14:
                return "E";
                break;
            case 15:
                return "F";
                break;
            default:
                return "Erro";
                break;
            }
        }

    function deciHexa(){
        $q = 1;
        $r = 0;
        $msg = "";
        $deci = $_GET['decimal'];
        while($q >=1){
            $q = $deci / 16;
            $r = $deci % 16;
            $deci = $q;
            if($r > 9){
                $r = converter($r);
            }
            $msg .= $r;
        }
        return strrev($msg);
    }

    echo $deci."convertido para decimal fico: ".deciHexa();
?>

<br><br><a href="../HTML/btn.html"><button>Voltar</button></a>