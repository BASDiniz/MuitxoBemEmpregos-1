@extends('layouts/app')

@section('content')

<!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Empregador</title>
        
    </head>
    <body>

        <div class="col-md-8">
            <h1>Bem vindo </h1> {{--{{$empregador>nome}} Mostrar o nome do usuário após ser cadastrado ou logado no sistema--}}
        </div>


        @can('update', $empregador)
            <div class="col-md-4">
                <a class="btn btn-primary" href="{{route('empregadores.edit', $empregador)}}" role="button">Editar Perfil</a>
            </div>
        @endcan

        @can('vagaEmpregoCheck', $empregador)
            <div class="col-md-4">
                <a class="btn btn-primary" href="{{route('vagas.create', $empregador)}}" role="button">Cadastrar vaga</a>
            </div>
        @endcan

        <div class="col-md-4">
            <a class="btn btn-primary" href="#" role="button">Listar vagas cadastradas</a>
        </div>

        {{-- <div class="col-md-4">
            <a class="btn btn-danger" href="#" role="button">Apagar Perfil</a>
        </div> --}}
    </body>
    </html>
@endsection