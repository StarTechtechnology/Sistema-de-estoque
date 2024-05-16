<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastroItem.css">
    <title>Cadastro</title>
    @vite(['resources/css/cadastroItem.css'])
</head>
<body>
    @if(session('sucess'))
    <span>{{ session('sucess') }} </span>
    @endif
    <div class="conteudo">
        <h2>Cadastro de Produtos</h2>
        <form method="POST">
            @csrf
            <input type="text" name="name" placeholder="Nome" value="{{ $category->name ?? '' }}"class="Box">
            <input type="text" name="description" placeholder="Descrição" value="{{ $category->description ?? '' }}"class="Box">
            <input type="number" name="amount" placeholder="Quantidade" value="{{ $category->amount ?? ''}}" class="Box">
            <input type="number" name="weight" placeholder="Peso" value="{{ $category->weight ?? ''}}" class="Box">
            <input type="number" name="size" placeholder="Tamanho" value="{{ $category->size ?? ''}}" class="Box">
            <button type="submit">Salvar</button>
        </form>
    </div>
</body>
</html>