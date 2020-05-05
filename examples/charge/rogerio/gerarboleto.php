<?php
   require __DIR__ . '/../../vendor/autoload.php'; // caminho relacionado a SDK

	//require 'gerencianet/composer/vendor/autoload.php'; //Gerencianet
   use Gerencianet\Exception\GerencianetException;
   use Gerencianet\Gerencianet;

	require __DIR__ . "/credenciais.php";

    $options = [
        'client_id' => $clientId,   //ATENÇÃO: É AQUI QUE VAI O SEU CLIENT ID
        'client_secret' => $clientId,   //ATENÇÃO: É AQUI QUE VAI O SEU CLIENT SECRET
        'sandbox' => $sandbox_boolean // altere conforme o ambiente (true = desenvolvimento e false = producao)
    ];

   $item_1 = [
       'name' => 'Plano Mensal Orangeade X', // nome do item, produto ou serviço
       'amount' => 1, // quantidade
       'value' => '1000' // valor (1000 = R$ 10,00) (Obs: É possível a criação de itens com valores negativos. Porém, o valor total da fatura deve ser superior ao valor mínimo para geração de transações.)
   ];
   $items = [
       $item_1
   ];
   $metadata = array('notification_url'=>$notification_url); //Url de notificações
   $customer = [
       'name' => 'Gorbadoc Oldbuck',
       'cpf' => '94271564656', //
       'phone_number' => '62982570993',
	   'email' => 'rogeriobsoares5@gmail.com'
   ];
   $discount = [ // configuração de descontos
       'type' => 'currency', // tipo de desconto a ser aplicado
       'value' => 199 // valor de desconto
   ];
   $configurations = [ // configurações de juros e mora
       'fine' => 200, // porcentagem de multa
       'interest' => 33 // porcentagem de juros
   ];
   $conditional_discount = [ // configurações de desconto condicional
       'type' => 'percentage', // seleção do tipo de desconto
       'value' => 500, // porcentagem de desconto
       'until_date' => '2021-04-22' // data máxima para aplicação do desconto
   ];
   $bankingBillet = [
       'expire_at' => '2020-04-24', // data de vencimento do titulo
       'message' => 'Acesse a painel do portal para saber sobre valores', // mensagem a ser exibida no boleto
       'customer' => $customer,
       'discount' =>$discount,
       'conditional_discount' => $conditional_discount
   ];
   $payment = [
       'banking_billet' => $bankingBillet // forma de pagamento (banking_billet = boleto)
   ];
   $body = [
       'items' => $items,
       'metadata' =>$metadata,
       'payment' => $payment
   ];
   try {
     $api = new Gerencianet($options);
     $pay_charge = $api->oneStep([],$body);
     echo '<pre>';
     print_r($pay_charge);
     echo '<pre>';
     echo '<br/>';
     echo '<p>Boleto gerado com sucesso e enviado para o e-mail do cliente.</p>';
     echo '<p>Este é o ID da cobrança (plataforma Gerencianet):</p>';
     print $pay_charge['data']['charge_id'];
	 
	 //pegando as informações do curl, do array, isolando e armazenando em variáveis pra depois por no seu banco
     /*
	 $iddacobranca = $pay_charge['data']['charge_id'];
     $barcode = $pay_charge['data']['barcode'];
     $vencimento = $pay_charge['data']['expire_at'];
     $boletostatus = $pay_charge['data']['status'];
     $linkparavisualizar = $pay_charge['data']['link'];
     $visualizarpdf = $pay_charge['data']['pdf']['charge'];
     $valor = $pay_charge['data']['total'];
	*/
	
	//Você também pode salvar as informações desta transação no seu banco de dados, brother
     /*
	 $savetodb = $pdo->prepare("INSERT INTO tabela(iddacobranca, codigodebarras, vencimento, valor, status, link, pdf, data_cadastro) VALUES(?, ?, ?, ?, ?, ?, ?, NOW())");
     $savetodb->execute(array($iddacobranca, $barcode, $vencimento, $valor, $boletostatus, $linkparavisualizar, $visualizarpdf));
	*/
	
    } catch (GerencianetException $e) {
      echo "<pre>";
       print_r($e->code); //Levar este código em consideração
       echo "<br/>";
       print_r($e->error);
       echo "<br/>";
       print_r($e->errorDescription); //Levar esta parte aqui em consideração, ao criar a confirmação do erro
       echo "</pre>";
   } catch (Exception $e) {
      echo "<pre>";
       print_r($e->getMessage());
       echo "</pre>";
   }
?>
