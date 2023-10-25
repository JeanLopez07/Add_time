<?php
function add_time($inicio, $duracion, $inicio_dia = null) {

        list($hora_inicio, $minuto_inicio,$tarde) = explode(" ", $inicio);
        list($duracion_hora, $duracion_minuto) = explode(":", $duracion);
    
        $iniciar_minutos = $hora_inicio * 60 + $minuto_inicio;
        $duracion_minutos = $duracion_hora * 60 + $duracion_minuto;
    
        $minutos_totales = $iniciar_minutos + $duracion_minutos;
    
        $hora_final = floor($minutos_totales / 60);
        $minuto_final = $minutos_totales % 60;
    
        $dias_despues = floor($minutos_totales / 1440);
        $dias_despues_texto = "";
    
        if ($dias_despues == 1) {
            $dias_despues_texto = " (día siguiente)";
        } elseif ($dias_despues > 1) {
            $dias_despues_texto = " ({$dias_despues} días después)";
        }
    
        if ($inicio_dia !== null) {
            $inicio_dia = ucfirst(strtolower($inicio_dia));
            $result = "{$hora_final}:{$minuto_final} {$tarde}{$dias_despues_texto}, {$inicio_dia}";
        } else {
            $result = "{$hora_final}:{$minuto_final} {$tarde}{$dias_despues_texto}";
        }
    
        return $result;
    }
    
    echo add_time("3:00 PM", "3:10");

?>
