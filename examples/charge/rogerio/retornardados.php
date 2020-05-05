<?php

require __DIR__.'/../../../vendor/autoload.php'; // caminho relacionado a SDK

use Gerencianet\Exception\GerencianetException;
use Gerencianet\Gerencianet;

require __DIR__."/credenciais.php";

$charge_id = "1007960";

$options = [
  'client_id' => $clientId,   //ATENÇÃO: É AQUI QUE VAI O SEU CLIENT ID
  'client_secret' => $clientSecret,    //ATENÇÃO: É AQUI QUE VAI O SEU CLIENT SECRET
  'sandbox' => true // altere conforme o ambiente (true = desenvolvimento e false = producao)
];

$params = [
  'id' => $charge_id // $charge_id refere-se ao ID da transação ("charge_id")
];

try {
    $api = new Gerencianet($options);
    $charge = $api->detailCharge($params, []);
    /*
    echo '<pre>';
    print_r($charge);
    echo '</pre>';
    //echo "<br/>";
	//Você pode ainda escolher que dados da cobrança deseja exibir...
    print $charge['data']['items'][0]['name'];
    echo '<br/>';
    print $charge['data']['payment']['banking_billet']['link'];
    */

} catch (GerencianetException $e) {
    echo "<pre>";
	print_r($e->code);
	echo "<br/>";
    print_r($e->error);
	echo "<br/>";
    print_r($e->errorDescription);
	echo "</pre>";
} catch (Exception $e) {
	echo "<pre>";
    print_r($e->getMessage());
	echo "</pre>";
}
