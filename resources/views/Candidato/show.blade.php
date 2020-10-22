@extends('layouts/app')

@section('content')
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
        
        <div class = 'jumbotron' id='jumbotron'>
            @can('adicionarCurriculoCheck', $candidato)
                <div class="col-md-4">
                    <a class="btn btn-success" href="{{route('curriculos.create', $candidato)}}" role="button">Adicionar Curriculo</a>
                </div>
            @endcan

            @can('verCurriculoCheck', $candidato)
                <div class="col-md-4">
                    <a class="btn btn-success" href="{{route('curriculos.show', $candidato)}}" role="button">Ver Curriculo</a>
                </div>
            @endcan

            @can('portfolioCheck', $candidato)
                <div class="col-md-4">
                    <a class="btn btn-success" href="{{route('portfolios.create', $candidato)}}" role="button">Adicionar Portfólio</a>
                </div>
            @endcan

            @can('update', $candidato)
                <div class="col-md-4">
                    <a class="btn btn-primary" href="{{route('candidatos.edit', $candidato)}}" role="button">Editar Perfil</a>
                </div>
            @endcan

            @can('apagarCandidato', $candidato)
                <div class="col-md-4">
                    <a class="btn btn-danger" href="{{route('candidatos.destroy', $candidato)}}" role="button">Apagar Perfil</a>
                </div>
            @endcan
        </div>
    </body>
    </html>
@endsection