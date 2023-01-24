<?php
    function exerciTres(){
        /*
        exercicio 3: Criar um conversor de binários para decimal, e inverter
        cada valor binaria deve ser multiplacdo por 2 elevado de ero ate 7
        */
        //$den = 1*2**5 + 0*2**4 + 1*2**3 + 0*2**2 + 1*2**1 + 1*2**0;
        $den = 0;
        $bin = $_GET['binario']; //Binario
        $cont = strlen($bin) - 1; //contador do tamanho da string -1, já que strlne conta desde 1 não de zero!
        for($i = 0; $i < strlen($bin); $i++){ //
            $carac = substr($bin, $i,1);

            if($carac == 1){
                $den += pow(2,$cont);
            }
            $cont--;
        }
        return $den;
    } 
?>
<p>O valor em Decimal é: </p>
<?php
echo exerciTres();
?>

<br><br><a href="../HTML/btn.html"><button>Voltar</button></a>