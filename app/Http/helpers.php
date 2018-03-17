<?php

function sqlToHuman($date) {

  $dtemp = strtotime($date);
  return date('d/m/Y', $dtemp);
}

function humanToSql($date) {

  $dtemp = DateTime::createFromFormat('d/m/Y', $date);
  return $dtemp->format('Y-m-d');
}

function trimestre($datetime)
{
  $mes = date("m",strtotime($datetime));
  $mes = is_null($mes) ? date('m') : $mes;
  $trim = floor(($mes-1) / 3)+1;
  return $trim;
}

function traduceDia($dia) {

  switch ($dia) {
    case 'Monday': $dia = 'Lunes'; break;
    case 'Tuesday': $dia = 'Martes'; break;
    case 'Wednesday': $dia = 'Miércoles'; break;
    case 'Thursday': $dia = 'Jueves'; break;
    case 'Friday': $dia = 'Viernes'; break;
  }
  return $dia;
}

function formatGasto($cantidad, $iva_tipo) {

  $res = '';
  $base = round(($cantidad / (1 + $iva_tipo)), 2); // Sacamos la base sabiendo el iva y el total
  $iva = round(($base * $iva_tipo), 2); // Con esa base, sacamos el iva del gasto

  $res .= '<b>' . number_format($cantidad, 2) . '€</b> = ';
  $res .= '<span class="text-danger">' . number_format($base, 2) . '</span> <i class="fas fa-arrow-right fa-fw"></i> ';
  $res .= '<b class="text-success">' . number_format($iva, 2) . '</b> ';
  $res .= '<small>(' . number_format($iva_tipo, 2) . '%)</small><br>';

  return $res;
}
