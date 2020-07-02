# gerencianet - demo criada a partir da SDK original das dependências da Gerencianet
Autor: Rogério Brito Soares (ORANGEADE X)
Contato: (62)983144287 (Whatsapp)
Intuito: ajudar outros desenvolvedores no que tange a configuração de sistemas envolvendo emissão e administração de boletos via Gerencianet

Apenas peguei a pasta em gerencianet/gerencianet/vendor/gerencianet/gerencianet-sdk-php/examples/ e copiei para gerencianet/examples/charge/

Na referida pasta abri uma nova chamada 'rogerio/' na qual adaptei alguns scripts no que tange a geração do boleto, cancelamento, alteração de vencimento, retorno de dados do boleto, etc. 

Está tudo pronto. Você só precisa ir em gerencianet/examples/charge/credenciais.php e colocar as suas chaves Client_ID e Client_Secret. Só observar que tem as chaves do ambiente de produção e do ambiente de desenvolvimento. Você vai trabalhar com as chaves do ambiente de desenvolvimento para fazer os testes, evidentemente.

Além disso, você vai ver que tem um outro script importante: gerencianet/controledeboletos.php. No arquivo index.php, você vai ver que tem um botão (formulário) cuja ação direciona justamente para esse script, onde é possível 'gerar boleto', 'cancelar', 'alterar vencimento', 'retornar dados', etc. Por isso repito, está tudo pronto. Você só vai adaptar de acordo com as suas variáveis e dados constantes no seu bd.

Site da Gerencianet: https://gerencianet.com.br

É um prazer ajudar.
Obrigado ;)
