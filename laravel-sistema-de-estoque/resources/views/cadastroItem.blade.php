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
    <div class="conteudo">
        <h2>Cadastro de Produtos</h2>
        <form action="">
            <input type="text" placeholder="Nome" class="Box">
            <input type="text" placeholder="Descrição" class="Box">
            <input type="number" placeholder="Preço" class="Box">
            <input type="number" placeholder="Quantidade" class="Box">
            <button type="submit">Salvar</button>
        </form>
    </div>
</body>
</html>