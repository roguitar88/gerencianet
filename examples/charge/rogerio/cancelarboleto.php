<?php

require __DIR__.'/../../../vendor/autoload.php'; // caminho relacionado a SDK

use Gerencianet\Exception\GerencianetException;
use Gerencianet\Gerencianet;

require __DIR__ . "/credenciais.php";

$charge_id = "1016586";

$options = [
  'client_id' => $clientId,
  'client_secret' => $clientSecret,
  'sandbox' => true // altere conforme o ambiente (true = desenvolvimento e false = producao)
];

// $charge_id refere-se ao ID da transação ("charge_id")
$params = [
  'id' => $charge_id
];

try {
    $api = new Gerencianet($options);
    $charge = $api->cancelCharge($params, []);
    echo "<pre>";
    print_r($charge);
    echo "</pre>";
	
	//Atualizando tabela como boleto cancelado
	/*
    $updateascanceled = $pdo->prepare("UPDATE tabela SET cancelado = ? WHERE iddacobranca = ?");
    $updateascanceled->execute(array(1, $charge_id));     //coluna cancelado configurada como Boolean, 1 = true
	*/
	
} catch (GerencianetException $e) {
    print_r($e->code);
    print_r($e->error);
    print_r($e->errorDescription);
} catch (Exception $e) {
    print_r($e->getMessage());
}
?>
