<?php
    $saleman = $_GET['nomeVende'];
    $sal = $_GET['salaria'];
    $vendas = $_GET['vendas'];
    function exerciMeia(){
        //exercicio 6: Nome do vendedor em tela + salario fixo + total de vendas + 15% de comissão
        //informar o total
        $saleman = $_GET['nomeVende'];
        $sal = $_GET['salaria'];
        $vendas = $_GET['vendas'];
        $total = ($vendas * 15) / 100;
        $fin = $total + $vendas + $sal;
        return $fin."R$";
    }
    echo "Bem-vindo ".$saleman." Seu salário fixo é de:".$sal."R$  junto com as vendas fico um total de: ".exerciMeia();
?>


<br><br><a href="../HTML/btn.html"><button>Voltar</button></a>