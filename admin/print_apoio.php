<?php
include("conexao_tabela.php");

$consulta = "SELECT * FROM voluntario_apoio"; //*"SELECT*FROM nomedobanco(tabela)"
$con = $mysqli->query($consulta) or die($mysqli->error);
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtd=device-widtd, inicial-scale=1.0">
    <link rel="icon" href="favicon.ico">
	<title>Voluntários de Apoio</title>
	<link rel="stylesheet" type="text/css" href="css/admin_header.css">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css"> 
    a:link 
    { 
    text-decoration:none; 
    } 
    </style>
</head>

<body class="background fundo">
    <?php
    $botao_esquerdo['texto'] = "Voltar";
    $botao_esquerdo['action'] = "acesso.php";
    $welcome["css"] = "welcome-voltar";
    $botao_direito["css"] = "hidden";
    include('admin_header.php');
    ?>
    <?php
	include("_headeredit.php")
	?>
	<br>
	<br>
	
 <h3> Voluntários de Apoio</h3>
 <table border="1" cellpadding="5px" cellspacing="0">
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Sexo</th>
    <th>CPF</th>
    <th>Data de Nascimento</th>
    <th>Endereço</th>
    <th>Cidade</th>
    <th>Telefone</th>
    <th>E-mail</th>
    <th>Profissão</th>
    <th>Disponibilidade</th>
  </tr>
 <?php while($dado=$con->fetch_array()){?>
   <tr>
     <td><?php echo $dado["ID"];?></td>
	 <td><?php echo $dado["Nome"];?></td>
	 <td><?php echo $dado["Sexo"];?></td>
	 <td><?php echo $dado["CPF"];?></td>
	 <td><?php echo $dado["Data de nascimento"];?></td>
	 <td><?php echo $dado["Endereço"];?></td>
	 <td><?php echo $dado["Cidade"];?></td>
	 <td><?php echo $dado["Telefone"];?></td>
	 <td><?php echo $dado["Email"];?></td>
	 <td><?php echo $dado["Profissão"];?></td>
	 <td><?php echo $dado["Disponibilidade"];?></td>
	</tr> 
 <?php }?>
 </table>
    <br>
	<br>
	<br>
	<br>
	<br>
    <hr width="100%">
    <footer>Desenvolvido por Grupo Rocket 2021</footer>
 </body>
</html>