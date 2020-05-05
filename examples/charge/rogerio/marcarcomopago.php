<?php
 
require __DIR__.'/../../../vendor/autoload.php'; // caminho relacionado a SDK
 
use Gerencianet\Exception\GerencianetException;
use Gerencianet\Gerencianet;
 
require "credenciais.php";
 
$charge_id = "1007960";
 
$options = [
  'client_id' => $clientId,   //ATENÇÃO: É AQUI QUE VAI O SEU CLIENT ID
  'client_secret' => $clientSecret,   //ATENÇÃO: É AQUI QUE VAI O SEU CLIENT SECRET
  'sandbox' => true // altere conforme o ambiente (true = desenvolvimento e false = producao)
];
 
// $charge_id refere-se ao ID da transação (charge_id) desejado
$params = [
  'id' => $charge_id
];
 
try {
    $api = new Gerencianet($options);
    $charge = $api->settleCharge($params, []);
	
	echo "<pre>";
    print_r($charge);
	echo "</pre>";
} catch (GerencianetException $e) {
	echo "<pre>";
    print_r($e->code);
	echo "<br/>";
    print_r($e->error);
	echo "<br/>";
    print_r($e->errorDescription);
	echo "</pre>"
} catch (Exception $e) {
    echo "<pre>";
	print_r($e->getMessage());
	echo "</pre>";
}
?>