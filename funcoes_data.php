<?php

$data = date("Y-m-d H:i");

$data_inicial = '2015-04-02';
$data_final = '2015-04-05';

$time_inicial = strtotime($data_inicial);
$time_final = strtotime($data_final);

$diferenca_times = $time_final - $time_inicial;


$diasegundos= 24*60*60;

$diferenca_dias = $diferenca_times/$diasegundos;
echo $diferenca_dias;