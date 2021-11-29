<?php 

    function SeculoAno($ano)
    {
        if ($ano >= 1)
        {
            $seculo = ceil($ano/100);
            return "O ano é: ".$ano." e o século é: ".$seculo;
        }
        else
        {
            return "Número invalido";
        }
        
    }

?>