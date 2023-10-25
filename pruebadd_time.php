<?php
function add_time($inicio,$duracion,$inicio_dia = null) {

        list($hora_inicio,$minuto_inicio,$tarde) = explode(" ",$inicio);
        list($duracion_hora,$duracion_minuto) = explode(":",$duracion);

        $iniciar_minutos=$hora_inicio * 60 + $minuto_inico
        $duracion_minutos=$duracion_hora * 60 + $duracion_minuto;

        $minutos_totales = $iniciar_minutos + $duracion_minutos;

        $hora_final = floor ($total_minutos/60)
        $minuto_final = $minutos_totales % 60;

        $dias_despues = floor($minutos_totales/1440);
        $dias_despues_texto ="";

        if ($dias_despues == 1){
            $dias_despues_texto= "(dia siguiente)";

}       elseif ($dias_despues > 1){
                $dias_despues_texto=({dias_despues}) dias despues)";

}




        if ($iniciar_dia !== null)  {
                $iniciar_dia= ucfirst (strtolower($iniciar_dia));
                result "{$hora_final}: {$minuto_final}:$tarde$dias_despues_texto,$iniciar_dia";

}               else  {


                result "{$hora_final}: {$minuto_final}:$tarde$dias_despues_texto" ;


}

                result $result;
}
                echo add_time("3:00 PM","3:10");
?>