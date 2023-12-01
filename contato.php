<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="contato.css">
</head>

<body>

        <div class="container text-center">
            <h1>Tela de Contato</h1>
            <br>
            <form action="" method="post">
                <div class="mb-33">
                    <label for="">Nome:</label>
                    <input type="text" name="bt_nome" id="">
                </div>

                <div class="mb-3"> <!-- A class row deixa os elementos em linha -->
                    <label for="">Telefone:</label>
                    <input type="text" name="bt_telefone" id="">
                </div>
                <div class="mb-3">
                    <label for="">Mensagem:</label><br>
                    <textarea name="bt_telefone" id="" cols="30" rows="10"></textarea>
                </div>
                <hr>
                <input class="btn btn-success" type="submit">
                <input class="btn btn-warning" type="reset" value="limpar">
                <a class="btn btn-danger" href="#">Cancelar</a>
                <hr>
            </form>
        </div>


</body>

</html>