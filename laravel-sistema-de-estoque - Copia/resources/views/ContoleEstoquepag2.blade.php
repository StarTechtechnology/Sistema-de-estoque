<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site com Menu</title>
    <link rel="stylesheet" href="">
    <script type="text/javascript" src="./js/JsControleEstoque.js"></script>
    <img src="pesquisa.jpeg" alt="some text" width=60 height=40>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="dropdown">
              <button class="mainmenubtn"> Controle de Estoque </button>
              <div class="dropdown-child">
                <a href="http://wwww.seudominio.com/pagina1.html"> Produtos</a>
                <a href="http://wwww.seudominio.com/pagina2.html"> Categorias</a>
                <a href="http://wwww.seudominio.com/pagina3.html"> Fornecedores</a>
                <a href="http://wwww.seudominio.com/pagina4.html"> Entradas</a>
                <a href="http://wwww.seudominio.com/pagina5.html"> Saídas</a>
                <a href="http://wwww.seudominio.com/pagina5.html"> Usuários</a>
              </div>
            </div>
        </div>
    </header>
    <div class="content">
      <div class="retangulo"></div>
    <main>
        <button type="button" class="botao1">Criar novo item</button>
    <table>
      <thead>
        <tr>
            <th>Categoria/Produto</th>
            <th>Quantidade</th>
            <th>Usuário</th>
            <th>Ações</th>
        </tr>
</thead>
<tbody>
    <tr>
        <td>Produto 1</td>
        <td>5</td>
        <td>Usuário 1</td>
        <td><button type="button" class="">Editar</button></td>
        <td><button type="button">Deletar</button></td>
    </tr>
    <tr>
        <td>Produto 2</td>
        <td>6</td>
        <td>Usuário 2</td>
        <td><button type="button" class="">Editar</button></td>
        <td><button type="button">Deletar</button></td>
    </tr>
    <tr>
        <td>Produto 3</td>
        <td>3</td>
        <td>Usuário 3</td>
        <td><button type="button" class="">Editar</button></td>
        <td><button type="button">Deletar</button></td>
    </tr>
    <tr>
        <td>Produto 4</td>
        <td>3</td>
        <td>Usuário 4</td>
        <td><button type="button" class="">Editar</button></td>
        <td><button type="button">Deletar</button></td>
    </tr>
    <tr>
        <td>Produto 5</td>
        <td>5</td>
        <td>Usuário 5</td>
        <td><button type="button" class="">Editar</button></td>
        <td><button type="button">Deletar</button></td>
    </tr>
    <tr>
        <td>Produto 6</td>
        <td>6</td>
        <td>Usuário 6</td>
        <td><button type="button" class="">Editar</button></td>
        <td><button type="button">Deletar</button></td>
    </tr>
    <tr>
        <td>Produto 7</td>
        <td>7</td>
        <td>Usuário 7</td>
        <td><button type="button" class="">Editar</button></td>
        <td><button type="button">Deletar</button></td>
    </tr>
</tbody>
    </table>
    <button type="button" class="botao1">Atualizar</button>
    </main>
</body>
</html>