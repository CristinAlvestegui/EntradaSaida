<?php
    function calcular(){
        $dis = $_POST['distancia'];
        $cons = $_POST['consumo']; //aqui nos estamos referendo ao name do input em HTML
        return $dis / $cons;
    }

?>
<br><a href="../HTML/btn.html"><button>Voltar</button></a>