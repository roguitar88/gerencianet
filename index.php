<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Gerencianet - DEMO por Rogério Brito Soares</title>
</head>
<body>
	<br/><br/><br/>
    <div style="margin: auto; width: 80%; height: auto; padding: 3%; border:2px solid #ccc453; text-align: center; font-size: 120%;">
		<h1 style="color: #ccc453; font-weight: bolder;">Bem-vindo a Orangeade X</h1>
		<br/>
		<p>Este é apenas um DEMO de geração de boletos via Gerencianet implementado pelo desenvolvedor Rogério Soares</p>
		<p>link do GitHub: https://github.com/roguitar88/gerencianet</p> 
		<p>link do Whatsapp: https://wa.me/5562982134287</p>
		<br/>
		<p>
			<!-- Uma dica: você pode estar passando os parâmetros via url, via GET, assim: 'controledeboletos.php?iddousuario=$iddousuario', morou? -->
			<form action="controledeboletos.php" method="post" enctype="multipart/form-data">
				<input style="font-size:150%; cursor: pointer;" type="submit" value="Gerar e enviar boleto, meu brother!" name="gerarboleto"/>
			</form>
		</p>
	</div>
</body>
</html>