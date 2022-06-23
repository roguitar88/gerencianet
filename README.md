# gerencianet - demo criada a partir da SDK original das dependências da Gerencianet
Autor: Rogério Brito Soares
Contato: (62)983144287 (Whatsapp)
Intuito: ajudar outros desenvolvedores no que tange a configuração de sistemas envolvendo emissão e administração de boletos via Gerencianet

Apenas peguei a pasta em gerencianet/gerencianet/vendor/gerencianet/gerencianet-sdk-php/examples/ e copiei para gerencianet/examples/charge/

Na referida pasta criei uma nova chamada 'rogerio/' na qual adaptei alguns scripts no que tange a geração do boleto, cancelamento, alteração de vencimento, retorno de dados do boleto, etc. 

Está tudo pronto. Você só precisa ir em gerencianet/examples/charge/credenciais.php e colocar as suas chaves Client_ID e Client_Secret. Só observar que tem as chaves do ambiente de produção e do ambiente de desenvolvimento. Você vai trabalhar com as chaves do ambiente de desenvolvimento para fazer os testes, evidentemente. Ao fazer os teste, não esqueça também de alterar/atualizar as datas (data de vencimento e data de desconto).

Além disso, você vai ver que tem um outro script importante: gerencianet/controledeboletos.php. No arquivo index.php, você vai ver que tem um botão (formulário) cuja ação direciona justamente para esse script, onde é possível 'gerar boleto', 'cancelar', 'alterar vencimento', 'retornar dados', etc. Por isso repito, está tudo pronto. Você só vai adaptar de acordo com as suas variáveis e dados constantes no seu bd.

Este é um exemplo de resultado que você verá na tela:

```
Array
(
    [code] => 200
    [data] => Array
        (
            [barcode] => 00000.00000 00000.000000 00000.000000 0 00000000000000
            [link] => https://visualizacaosandbox.gerencianet.com.br/emissao/240410_27_LOLE6/A4XB-240410-1-CAXI1
            [pdf] => Array
                (
                    [charge] => https://download.gerencianet.com.br/240410_27_LOLE6/240410-1-CAXI1.pdf?sandbox=true
                )

            [expire_at] => 2021-01-23
            [charge_id] => 1229737
            [status] => waiting
            [total] => 801
            [payment] => banking_billet
        )

)

Boleto gerado com sucesso e enviado para o e-mail do cliente.

Este é o ID da cobrança (plataforma Gerencianet):

1229737
```

Site da Gerencianet para criar a conta: https://gerencianet.com.br

É um prazer ajudar.
Obrigado ;)
