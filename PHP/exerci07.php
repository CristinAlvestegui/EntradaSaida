<?php
 function mediaNotas(){
    $name = $_GET['nome'];
    $nota1 = $_GET['notaUm'];
    $nota2 = $_GET['notaDois'];
    $nota3 = $_GET['notaTres'];

    $media = ($nota1* $nota2*$nota3) / 3
    return $media;
 }

 echo mediaNotas();
?>
    
<br><br><a href="../HTML/btn.html"><button>Voltar</button></a>