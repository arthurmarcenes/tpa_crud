<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO FUNCIONARIO</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<?php require ("conexao.php"); ?>

<div class="container">
    <h2>CADASTRO DE FUNCIONARIOS</h2>
    <form>
        <div class="form-group">
        <label>Nome</label>
        <input type="text" class="form-control" name="nome" placeholder="Informe o nome">
        <label>Email</label>
        <input type="email" class="form-control" name="email" placeholder="Informe o email">

        <label>cargo</label>
        <input type="text" class="form-control" name="cargo" placeholder="Informe o seu cargo">
       
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
</body>
</html>