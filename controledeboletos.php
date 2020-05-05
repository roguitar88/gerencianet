<?php
include "changeurl.inc.php";

if(isset($_POST['gerarboleto'])){
	require "examples/charge/rogerio/gerarboleto.php";
	//require "examples/charge/rogerio/retornardados.php";
}elseif(isset($_POST['cancelarboleto'])){
	require "examples/charge/rogerio/cancelarboleto.php";
}elseif(isset($_POST['reenviarboleto'])){
	require "examples/rogerio/charge/reenviarboleto.php";
}elseif(isset($_POST['alterarvencimento'])){
	require "examples/charge/rogerio/alterarvencimento.php";
}else{
	header('Location: '.$urltochange.'/demo');
	exit;
}
?>
