<?php
header('Content-Type: text/html; charset=UTF-8');
ini_set('default_charset', 'UTF-8');
$funcionario = $_POST['funcionario'];
$data = $_POST['data'];
$motivo = $_POST['motivo'];
$qtd1 = $_POST['qtd1'];
$qtd2 = $_POST['qtd2'];
$qtd3 = $_POST['qtd3'];
$qtd4 = $_POST['qtd4'];
if ($funcionario != "" && $data != "" && $motivo != "" && $qtd1 != "" && $qtd2 != "" && $qtd3 != "" && $qtd4 != "") {
    echo "<script>window.print()</script>";
} else {
    echo "<script>alert('Favor Preencher todos os campos!')</script>";
    echo "<script>location.href='almoco2.html'</script>";
}
?>
<Html>
<head>
<meta charset="UTF-8">
<link
	href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all"
	rel="stylesheet" type="text/css">
<link href="./estilo/bootstrap.min.css" rel="stylesheet">
<title>Almoço</title>
</head>
<body style="font-size: 12px">
	<table style="font-size: 12px" class="table col">
		<thead style="font-size: 12px">
			<td><img src="Imagens/logo2.png" width="50px"></td>
			<td>Autorização de mudança de horário de almoço</td>
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
			<td>Horário de almoço realizado:</td>
			<td>
            <?php
            echo $qtd1 . 'H &nbsp; : &nbsp;' . $qtd2 . 'Min' . '&nbsp; até &nbsp;' . $qtd3 . 'H &nbsp; : &nbsp;' . $qtd4 . 'Min';
            ?>
        </td>
		</tr>
		<tr>
			<td>Data:</td>
			<td>
            <?php
            echo date('d/m/Y', strtotime($data));
            ;
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
	<br>
	<br>
	<p>
		_____________________________________________________<br> Autorização
		do Gestor <br> <br>
	
	
	<hr>
	<br>
	<table style="font-size: 12px" class="table col">
		<thead style="font-size: 12px">
			<td><img src="Imagens/logo2.png" width="50px"></td>
			<td>Autorização de mudança de horário de almoço</td>
		</thead>
		<tr>
			<td colspan='2' style="text-align: right;">Via do funcionário</td>
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
			<td>Horário de almoço realizado:</td>
			<td>
            <?php
            echo $qtd1 . 'H :' . $qtd2 . 'Min' . '&nbsp; até &nbsp;' . $qtd3 . 'H : ' . $qtd4 . 'Min';
            ?>
        </td>
		</tr>
		<tr>
			<td>Data:</td>
			<td>
            <?php
            echo date('d/m/Y', strtotime($data));
            ;
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
	<br>
	<br>
	<p>
		_____________________________________________________<br> Autorização
		do Gestor

</body>
</html>