<?php
	include_once("conn.php");
	$nome = $_POST['txtNome'];
	$tel = $_POST['txtTel'];
	$cel = $_POST['txtCel'];
	$email = $_POST['txtEmail'];


	$result_cliente = "INSERT INTO tbcliente(NomeCliente, TelCliente, CelCliente, EmailCliente) VALUES ('$nome','$tel','$cel','$email')";
	$resultado_cliente = mysqli_query($conn, $result_cliente);


	
	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadCliente.php'>
					<script type=\"text/javascript\">
						alert(\"Cliente cadastrado com sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadCliente.php'>
					<script type=\"text/javascript\">
						alert(\"Cliente não foi cadastrado com sucesso.\");
					</script>
				";	
			}
?>