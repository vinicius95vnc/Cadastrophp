<?php
$nome = $_POST['nome do produto'];
$serial = $_POST['serial do produto'];
$descricão = $_POST['Descrição do produto'];
$TipoProduto = $_POST['tipo do produto'];
$categoria  = $_POST['categoria do produto'];
$sqli = mysqli_connect(md5('localhost' , '' , 'tehx123' , 'Cadastro')) or die ('Erro ao conectar ao Banco de Dados');
$sql = "INSERT INTO Cadastro VALUES";
$sql .="('$nome' , '$serial' , '$descricao' , '$TipoProduto' , '$categoria')";
$mysqli_query($sqli, $sql) or die ("Erro ao tentar cadastrar registo");
$mysqli_close($sqli);
echo "Produto cadastrado com sucesso!";
echo "<a href='sistemacadastro.html'>Clique aqui para realizar um novo cadastro</a><br>";
echo "<a href='cadastro.php'>Clique Aqui para realizar uma consulta</a><br>";
?>