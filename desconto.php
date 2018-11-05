<title>Desconto</title>
<?php
require_once ("funcoes_desconto.php");

$valor_total = 800;
$desconto = 10;

$valor_total_com_desconto = calculo_desconto($valor_total,$desconto);

echo 'Valor Total: R$',$valor_total,'<br>';
echo 'Valor Desconto: ',$desconto,'%<br>';
echo 'Valor total com desconto: R$',$valor_total_com_desconto;


