<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Estoque</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
     {{--...--}}

    @vite(['resources/css/stylecontroleestoque2.css', 'resources/js/JsControleEstoque.js'])
    <img src="pesquisa.jpeg" alt="some text" width=60 height=40>
</head>
<body>
    <!--Menu-->
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
    <!--Conteúdo Principal-->
    <div class="content">
        <div class="retangulo"></div>
        <main>
            <button type="button" class="botao1">Criar novo item<i class='bx bxs-plus-circle'></i></button>
            <table class="tabela">
                <thead>
                    <tr>
                        <th>Categoria/Produto</th>
                        <th>Quantidade</th>
                        <th>Usuário</th>
                        <th>Ações</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Produto 1</td>
                        <td>5</td>
                        <td>Usuário 1</td>
                        <td><button type="button" class="botao-edit">Editar<i class='bx bxs-pencil'></i></button></td>
                        <td><button type="button" class="botao-delete">Deletar<i class='bx bxs-trash'></i></button></td>
                    </tr>
                    <tr>
                        <td>Produto 2</td>
                        <td>6</td>
                        <td>Usuário 2</td>
                        <td><button type="button" class="botao-edit">Editar<i class='bx bxs-pencil'></i></button></td>
                        <td><button type="button" class="botao-delete">Deletar<i class='bx bxs-trash'></i></button></td>
                    </tr>
                    <tr>
                        <td>Produto 3</td>
                        <td>3</td>
                        <td>Usuário 3</td>
                        <td><button type="button" class="botao-edit">Editar<i class='bx bxs-pencil'></i></button></td>
                        <td><button type="button" class="botao-delete">Deletar<i class='bx bxs-trash'></i></button></td>
                    </tr>
                    <tr>
                        <td>Produto 4</td>
                        <td>3</td>
                        <td>Usuário 4</td>
                        <td><button type="button" class="botao-edit">Editar<i class='bx bxs-pencil'></i></button></td>
                        <td><button type="button" class="botao-delete">Deletar<i class='bx bxs-trash'></i></button></td>
                    </tr>
                    <tr>
                        <td>Produto 5</td>
                        <td>5</td>
                        <td>Usuário 5</td>
                        <td><button type="button" class="botao-edit">Editar<i class='bx bxs-pencil'></i></button></td>
                        <td><button type="button" class="botao-delete">Deletar<i class='bx bxs-trash'></i></button></td>
                    </tr>
                    <tr>
                        <td>Produto 6</td>
                        <td>6</td>
                        <td>Usuário 6</td>
                        <td><button type="button" class="botao-edit">Editar<i class='bx bxs-pencil'></i></button></td>
                        <td><button type="button" class="botao-delete">Deletar<i class='bx bxs-trash'></i></button></td>
                    </tr>
                    <tr>
                        <td>Produto 7</td>
                        <td>7</td>
                        <td>Usuário 7</td>
                        <td><button type="button" class="botao-edit">Editar<i class='bx bxs-pencil'></i></button></td>
                        <td><button type="button" class="botao-delete">Deletar<i class='bx bxs-trash'></i></button></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="botao2">Atualizar<i class='bx bxs-color'></i></button>
            <div class="modal">
                <div class="modal-conteudo">
                    <form class="modal-form">
                        <p>Adicionar produto:</p>
                        <input type="text" class="modal-campo" placeholder="Produto...">
                        <p>Adicionar quantidade:</p>
                        <input type="number" class="modal-campo" placeholder="Quantidade...">
                        <p>Adicionar usuário:</p>
                        <input type="text" class="modal-campo" placeholder="Usuário...">
                    </form>
                    <footer class="modal-footer">
                        <button class="botao-salvar">Salvar</button>
                        <button class="botao-cancelar">Cancelar</button>
                    </footer>
                </div>
                <div class="modal-editar">
                    <form class="modal-form-editar">
                        <p>Editar produto:</p>
                        <input type="text" class="modal-campo-editar" placeholder="Produto...">
                        <p>Editar quantidade:</p>
                        <input type="number" class="modal-campo-editar" placeholder="Quantidade...">
                        <p>Editar usuário:</p>
                        <input type="text" class="modal-campo-editar" placeholder="Usuário...">
                    </form>
                    <footer class="modal-footer">
                        <button class="botao-salvar-editar">Salvar</button>
                        <button class="botao-cancelar-editar">Cancelar</button>
                    </footer>
                </div>
                <div class="modal-deletar">
                    <p>Você tem certeza de que quer apagar esse item?</p>
                    <footer class="modal-footer-deletar">
                        <button class="botao-salvar-deletar">Sim</button>
                        <button class="botao-cancelar-deletar">Não</button>
                    </footer>
                </div>
            </div>
        </main>
    </div>    
</body>
</html>