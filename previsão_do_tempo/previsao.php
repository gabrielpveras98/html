<?php
function prevtempo($cidade, $tpm1=true, $tpm2=true, $st1=false, $st2=false, $vt=true, $pres=false, $umd=true)
{
$url="http://tempoagora.uol.com.br/previsaodotempo.html/brasil/" .
$cidade;
$andle=file_get_contents($url);
if(!$andle) echo "Erro Ao Abrir a p�gina de previs�o do tempo";
$temperatura = explode("&deg;C",$andle);
$vento = explode("km/h",$andle);
$umidade = explode("%",$andle);
$pressao = explode("hPa",$andle);
$wind =trim( substr($vento[0],-1));
$humidity =trim( substr($umidade[0],-2));
$pressure =trim( substr($pressao[0],-6));
$tempmin=trim(substr($temperatura[3],-2));
$tempmax=trim(substr($temperatura[4],-2));
$senstmin=trim(substr($temperatura[5],-2));
$senstmax=trim(substr($temperatura[6],-2));
$previsao="";
if($tpm1) $previsao.="temperatura M�nima: " . $tempmin . " Graus Cent�grados<br/>";
if($tpm2) $previsao.="temperatura m�xima: " . $tempmax . " Graus Cent�grados<br/>";
if($st1) $previsao.="Sensa��o t�rmica m�nima: " . $senstmin . " Graus Cent�grados<br/>";
if($st2) $previsao.="Sensa��o t�rmica m�xima:  " . $senstmax . " Graus Cent�grados<br/>";
if($vt) $previsao.="Velocidade do Vento: " . $wind . " KM / H<br/>";
if($umd) $previsao.="Umidade: " . $humidity."%<br/>";
if($pres) $previsao.="Press�o: " . $pressure . " hPa<br/>";
return $previsao;
}
?>
