<?php 

    function SeculoAno($ano)
    {
        $seculo = ceil($ano/100);
        return "O ano é: ".$ano." e o século é: ".$seculo;
    }

    echo SeculoAno(1990);

?>