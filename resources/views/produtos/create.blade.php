<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Produto</title>
</head>
<body>
    <form action="{{ route('produtos.store') }}" method="POST">
        @csrf

        @include('produtos._form')


        <button type="submit">Criar Produto</button>
    </form>
</body>
</html>