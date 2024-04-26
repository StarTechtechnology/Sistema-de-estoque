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
            <button type="button" class="botao1" onclick="abrirModal('modalCriar')">Criar categoria<i class='bx bxs-plus-circle'></i></button>
            <table id="tabelaCategorias" class="tabela">
                <thead>
                    <tr>
                        <th>Categoria</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Categoria 1</td>
                        <td><button type="button" class="botao-visu">Visualizar<i class="fa-solid fa-eye"></i></i></button>
                            <button type="button" class="botao-edit" onclick="editarItem(this)">Editar<i class='bx bxs-pencil'></i></button>
                            <button type="button" class="botao-delete" onclick="abrirModal('modalExcluir')">Deletar<i class='bx bxs-trash'></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Categoria 2</td>
                        <td><button type="button" class="botao-visu">Visualizar<i class="fa-solid fa-eye"></i></i></button>
                            <button type="button" class="botao-edit" onclick="editarItem(this)">Editar<i class='bx bxs-pencil'></i></button>
                            <button type="button" class="botao-delete" onclick="abrirModal('modalExcluir')">Deletar<i class='bx bxs-trash'></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Categoria 3</td>
                        <td><button type="button" class="botao-visu">Visualizar<i class="fa-solid fa-eye"></i></i></button>
                            <button type="button" class="botao-edit" onclick="editarItem(this)">Editar<i class='bx bxs-pencil'></i></button>
                            <button type="button" class="botao-delete" onclick="abrirModal('modalExcluir')">Deletar<i class='bx bxs-trash'></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Categoria 4</td>
                        <td><button type="button" class="botao-visu">Visualizar<i class="fa-solid fa-eye"></i></i></button>
                            <button type="button" class="botao-edit" onclick="editarItem(this)">Editar<i class='bx bxs-pencil'></i></button>
                            <button type="button" class="botao-delete" onclick="abrirModal('modalExcluir')">Deletar<i class='bx bxs-trash'></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Categoria 5</td>
                        <td><button type="button" class="botao-visu">Visualizar<i class="fa-solid fa-eye"></i></button>
                            <button type="button" class="botao-edit" onclick="editarItem(this)">Editar<i class='bx bxs-pencil'></i></button>
                            <button type="button" class="botao-delete" onclick="abrirModal('modalExcluir')">Deletar<i class='bx bxs-trash'></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Categoria 6</td>
                        <td><button type="button" class="botao-visu">Visualizar<i class="fa-solid fa-eye"></i></button>
                            <button type="button" class="botao-edit" onclick="editarItem(this)">Editar<i class='bx bxs-pencil'></i></button>
                            <button type="button" class="botao-delete" onclick="abrirModal('modalExcluir')">Deletar<i class='bx bxs-trash'></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Categoria 7</td>
                        <td><button type="button" class="botao-visu" onclick="abrirVisu('modalVisualizar')">Visualizar<i class="fa-solid fa-eye"></i></i></button>
                            <button type="button" class="botao-edit" onclick="editarItem(this)">Editar<i class='bx bxs-pencil'></i></button>
                            <button type="button" class="botao-delete" onclick="abrirModal('modalExcluir')">Deletar<i class='bx bxs-trash'></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div id="modalCriar" class="modal">
                <div class="modal-conteudo">
                    <form id="formCriar">
                        <p>Adicionar categoria:</p>
                        <input type="text" id="novaCategoria" placeholder="Categoria...">
                        <button type="button" onclick="criarItem()">Salvar</button>
                        <button type="button" onclick="fecharModal('modalCriar')">Cancelar</button>
                    </form>
                </div>
            </div>
             <div id="modalVisualizar" class="modal">
                <div class="modal-conteudo">
                    <form id="formVisualizar">
                        <p>Produtos da categoria:</p>
                        <ol class="listaProdutos">
                            <li>Produto 1</li>
                            <li>Produto 2</li>
                            <li>Produto 3</li>
                            <li>Produto 4</li>
                            <li>Produto 5</li>
                        </ol>
                    </form>
                </div>
            </div> 

            <div id="modalEditar" class="modal">
                <div class="modal-conteudo">
                    <form id="formEditar">
                        <p>Editar categoria:</p>
                        <input type="text" id="categoriaEditada" placeholder="Categoria...">
                        <button type="button" onclick="salvar()">Salvar</button>
                        <button type="button" onclick="fecharModal('modalEditar')">Cancelar</button>
                    </form>
                </div>
            </div>
        
            <div id="modalExcluir" class="modal">
                <div class="modal-conteudo">
                    <form id="formDeletar">
                        <p>Você tem certeza de que quer apagar esse item?</p>
                        <button onclick="salvar()">Sim</button>
                        <button type="button" onclick="fecharModal('modalEditar')">Não</button>
                    </form>
                </div>
            </div>

            <div id="modalVisualizar" class="modal">
                <div class="modal-conteudo">
                    <form id="formVisualizar">
                        <p>Produtos da categoria 1:</p>
                        <h6>Produto A</h6>
                        <h6>Produto D</h6>
                        <h6>Produto Y</h6>
                        <h6>Produto E</h6>
                        <h6>Produto G</h6>
                        <button type="button" onclick="salvar()">Fechar</button>
                    </form>
                </div>
            </div>
        </main>
    </div>
    <script src="testando.js"></script>
</body>
</html>