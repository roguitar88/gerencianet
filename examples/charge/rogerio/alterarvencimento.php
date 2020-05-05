<?php

require __DIR__.'/../../vendor/autoload.php'; // caminho relacionado a SDK

use Gerencianet\Exception\GerencianetException;
use Gerencianet\Gerencianet;

require __DIR__ ."/credenciais.php";

$charge_id = "1007960";  //ID da Transação/Cobrança, cole aí

$options = [
  'client_id' => $clientId,  //ATENÇÃO: É AQUI QUE VAI O SEU CLIENT ID
  'client_secret' => $clientSecret,   //ATENÇÃO: É AQUI QUE VAI O SEU CLIENT SECRET
  'sandbox' => $sandbox_boolean // altere conforme o ambiente (true = desenvolvimento e false = producao)
];

// $charge_id refere-se ao ID da transação gerada anteriormente
$params = [
  'id' => $charge_id
];

$body = [
  'expire_at' => '2020-04-20'
];

try {
    $api = new Gerencianet($options);
    $charge = $api->updateBillet($params, $body);
    echo "<pre>";
    print_r($charge);
    echo "</pre>";
    echo "<br/>";
	
	//Atualize os dados no banco de dados, conforme abaixo:
	/*
    $mudarvencimento = $pdo->prepare("UPDATE tabela SET vencimento = ? WHERE iddacobranca = ?");
    $mudarvencimento->execute(array($expire_at, $charge_id));
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
    print_r($e->getMessage());
}
?>
