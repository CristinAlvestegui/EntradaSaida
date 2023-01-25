<?php
    $deci = $_GET['decimal'];
    function exerciTres2(){
        $bin = "";
        $deci = $_GET['decimal'];
        while($deci >=1){
            $bin .= $deci % 2;
            $deci = $deci /2;

        }
    return strrev($bin);
    }
    echo "<p>O valor decimal $deci convertido em binário é:</p>".exerciTres2();
?>

<br><br><a href="../HTML/btn.html"><button>Voltar</button></a>