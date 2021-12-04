<?php
	if(isset($_POST["submit"])) {
		$primeiroNome=$_POST["primeiroNome"];
		$sobrenome=$_POST["sobrenome"];
		$email=$_POST["email"];
		$endereco=$_POST["endereco"];
		$pais=$_POST["pais"];
		$estado=$_POST["estado"];
        $paymentMethod=$_POST["paymentMethod"];
		$nomeCartao=$_POST["nomeCartao"];
		$numeroCartao=$_POST["numeroCartao"];
		$expedicao=$_POST["expedicao"];
		$CVV=$_POST["CVV"];
	

		file_put_contents("dados.csv", "$primeiroNome,$sobrenome,$email,$endereco,$pais,$estado,$paymentMethod,$nomeCartao,$numeroCartao,$expedicao,$CVV\n", FILE_APPEND);

	} 

?>
