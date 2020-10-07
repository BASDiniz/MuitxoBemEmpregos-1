<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Cadastrar Candidato</title>
</head>
<body>
    <div class="col-md-8">
        <h1>Bem vindo </h1> {{--{{$candidato->nome}} Mostrar o nome do usuário após ser cadastrado ou logado no sistema--}}
    </div>

    <div class="col-md-4">
        <button type="button" class="btn btn-success" onclick="">Editar Perfil</button>
    </div>

    <div class="col-md-4">
        <button type="button" class="btn btn-danger" onclick="">Apagar Perfil</button>
    </div>
</body>
</html>