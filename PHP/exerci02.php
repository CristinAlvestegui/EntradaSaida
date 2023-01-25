<?php
function fibonacci(){
    $ant = 0;
    $pro = 1;
    $res = 0;
    $smg = $ant." ".$pro;
    $n = $_GET['seque'];
    for($i = 0; $i <= $n; $i++){
        $res = $ant + $pro;
        $smg .=" ".$res;
        $ant = $pro;
        $pro = $res;
    }
    return $smg;
}
    echo fibonacci()
?>

<br><a href="../HTML/btn.html"><button>Voltar</button></a>