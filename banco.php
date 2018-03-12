<html lang="pt">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link
	href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all"
	rel="stylesheet" type="text/css">
<link href="./estilo/bootstrap.min.css" rel="stylesheet">
<title>Banco de horas</title>
<link rel="shortcut icon" href="logo.ico">
</head>
<body style="font-size: 12px">
<?php
$funcionario = $_POST['funcionario'];
$data = $_POST['data'];
$motivo = $_POST['motivo'];
$hora = $_POST['hora'];
$qtd1 = $_POST['qtd1'];
$qtd2 = $_POST['qtd2'];
$hora = $_POST['hora'];

if ($funcionario != "" && $data != "" && $motivo != "" && $qtd1 != "" && $qtd2 != "" && $hora != "") {
    echo "<script>window.print()</script>";
} else {
    echo "<script>alert('Favor Preencher todos os campos!')</script>";
    echo "<script>location.href='banco.html'</script>";
}
?>


	<table style="font-size: 12px" class="table col">
		<thead style="font-size: 12px">
			<td><img src="Imagens/logo2.png" width="50px"></td>
			<td>Termo de autorização para banco de horas</td>
		</thead>
		<tr>
			<td colspan='2' style="text-align: right;">Via da empresa</td>
		</tr>
		<tr>
			<td>Funcionário:</td>
			<td>
            <?php
            echo $funcionario;
            ?>
        </td>
		</tr>
		<tr>
			<td>Tipo de hora:</td>
			<td>
            <?php
            if ($hora == "Positiva") {
                echo "POSITIVA";
            } else {
                echo "NEGATIVA";
            }
            ?>
        </td>
		</tr>
		<tr>
			<td>Quantidade:</td>
			<td>
            <?php
            echo $qtd1 . 'H : ' . $qtd2 . 'Min';
            ?>
        </td>
		</tr>
		<tr>
			<td>Data:</td>
			<td>
            <?php
            echo $data;
            ?>
        </td>
		</tr>
		<tr>
			<td>Motivo:</td>
			<td>
            <?php
            echo $motivo;
            ?>
        </td>
		</tr>
	</table>
	<br>
	<p>
		_____________________________________________________<br> Autorização
		do Gestor <br> <br> <br>
	
	
	<hr>
	<br>
	<table style="font-size: 12px" class="table col">
		<thead style="font-size: 12px">
			<td><img src="Imagens/logo2.png" width="50px"></td>
			<td>Termo de autorização para banco de horas</td>
		</thead>
		<tr>
			<td colspan='2' style="text-align: right;">Via do Funcionário</td>
		</tr>
		<tr>
			<td>Funcionário:</td>
			<td>
            <?php
            echo $funcionario;
            ?>
        </td>
		</tr>
		<tr>
			<td>Tipo de hora:</td>
			<td>
            <?php
            if ($hora == "Positiva") {
                echo "POSITIVA";
            } else {
                echo "NEGATIVA";
            }
            ?>
        </td>
		</tr>
		<tr>
			<td>Quantidade:</td>
			<td>
            <?php
            echo $qtd1 . 'H : ' . $qtd2 . 'Min';
            ?>
        </td>
		</tr>
		<tr>
			<td>Data:</td>
			<td>
            <?php
            echo $data;
            ?>
        </td>
		</tr>
		<tr>
			<td>Motivo:</td>
			<td>
            <?php
            echo $motivo;
            ?>
        </td>
		</tr>
	</table>
	<br>
	<p>
		_____________________________________________________<br> Autorização
		do Gestor

</body>
</html>