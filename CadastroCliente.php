<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="sistemacadastro.css" media="">
    <title>Cadastro de Cliente</title>
</head>

<body>
    <div>
        <h1 id="titulo">Cadastro de Clientes</h1>
        <p id="subtitulo">Insira os Dados do Cliente</p>
        <br>
    </div>

    <form>
        <fieldset class="grupo">
            <div class="grupo">
                <label for="nome"><strong>Nome do Cliente</strong></label><br>
                <input type="text" name="nomecliente" id="cliente" required>
            </div>
            <div class="endereco">
                <label for="endereco"><strong>Endereço</strong></label><br>
                <input type="text" name="endereco" id="endereco" required><br>
                <label for="numerocasa"><strong>Número</strong></label><br>
                <input type="text" name="endereco" id="endereco" required><br>
                <label for="endereco"><strong>Complemento</strong></label><br>
                <input type="text" name="endereco" id="endereco" required><br>
                <div class="contato">
                    <label for="telefone"><strong>Telefone</strong></label><br>
                    <input type="serial" name="serial" id="serial" required><br>
                </div>
                <div class="veiculo">
                    <h1 id="veiculo">Veiculo do Cliente</h1>
                    <label for="veiculo"><strong>Marca</strong></label><br>
                    <input type="text" name="veiculo" id="marcaveiculo" required><br>
                    <label for="veiculo"><strong>Modelo</strong></label><br>
                    <input type="text" name="veiculo" id="modeloveiculo" required><br>
                </div>
                <div>
                    <br>
                    <label><strong>Observação</strong></label><br>
                    <textarea row="6" style="width: 30em" id="observacao" name="observacao"></textarea>
                </div>
        </fieldset>
    </form>



</body>

</html>