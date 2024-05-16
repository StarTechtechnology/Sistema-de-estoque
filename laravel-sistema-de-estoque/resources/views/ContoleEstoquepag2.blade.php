<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Estoque</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
     
    @vite(['resources/css/stylecontroleestoque2.css'])
    <img src="pesquisa.jpeg" alt="some text" width=60 height=40>
</head>
<body>

    @foreach ($category as $c)
        <span>{{ $c->name }}</span>
    @endforeach
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
             <div id="modalVisualizar1" class="modal">
                <div class="modal-conteudo">
                    <form id="formVisualizar1">
                        <p>Produtos da categoria:</p>
                        <ol class="listaProdutos">
                            <li>Produto 1</li>
                            <li>Produto 2</li>
                            <li>Produto 3</li>
                            <li>Produto 4</li>
                            <li>Produto 5</li>
                        </ol>
                        <button type="button" onclick="fecharModal('modalVisualizar1')">Cancelar</button>
                    </form>
                </div>
            </div> 

            <div id="modalVisualizar2" class="modal">
                <div class="modal-conteudo">
                    <form id="formVisualizar2">
                        <p>Editar categoria:</p>
                        <input type="text" id="categoriaEditada" placeholder="Categoria...">
                        <button type="button" onclick="salvar()">Salvar</button>
                        <button type="button" onclick="fecharModal('modalVisualizar2')">Cancelar</button>
                    </form>
                </div>
            </div>
        
            <div id="modalVisualizar3" class="modal">
                <div class="modal-conteudo">
                    <form id="formVisualizar3">
                        <p>Você tem certeza de que quer apagar esse item?</p>
                        <button onclick="salvar()">Sim</button>
                        <button type="button" onclick="fecharModal('modalExcluir')">Não</button>
                    </form>
                </div>
            </div>

            <div id="modalVisualizar4" class="modal">
                <div class="modal-conteudo">
                    <form id="formVisualizar4">
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
   <script>
    function abrirModal(idModal) {
    document.getElementById(idModal).style.display = "flex";
}

function fecharModal(idModal) {
    let modal = document.getElementById(idModal);
    if (modal) {
        modal.style.display = "none";
        console.log("Modal fechado com sucesso:", idModal);
    } else {
        console.error("Modal não encontrado:", idModal);
    }
}

//Funções CRUD
var proximoId = 1;

function criarItem() {
    let novaCategoria = document.getElementById("novaCategoria").value;
    let tabela = document.getElementById("tabelaCategorias").getElementsByTagName('tbody')[0];
    let novaLinha = tabela.insertRow();
    let idItem = proximoId; // Salva o ID atual antes de incrementar
    novaLinha.setAttribute('data-id', idItem); // Define o atributo data-id
    let celulaCategoria = novaLinha.insertCell(0);
    celulaCategoria.innerText = novaCategoria;
    let celulaAcoes = novaLinha.insertCell(1);
    celulaAcoes.innerHTML = `
        <button type="button" class="botao-visu" onclick="abrirVisu(1)">Visualizar<i class="bx bxs-eye"></i></button>
        <button type="button" class="botao-edit" onclick="abrirVisu(2)">Editar<i class='bx bxs-pencil'></i></button>
        <button type="button" class="botao-delete" onclick="deletarItem(this)">Deletar<i class='bx bxs-trash'></i></button>
    `;
    fecharModal('modalCriar');
    let botoesEditar = novaLinha.querySelectorAll('.botao-edit');
    botoesEditar.forEach(botao => {
        botao.addEventListener('click', function() {
            editarItem(botao); // Passa o botão clicado como argumento
        });
    });
    proximoId++;
}


function editarItem(botaoEditar) {
    let linha = botaoEditar.parentNode.parentNode; // Obtém a linha associada ao botão "Editar" clicado
    let idItem = linha.getAttribute('data-id'); // Obtém o ID do item
    linha.setAttribute('data-editando', 'true'); // Marca a linha como editando
    let categoriaAtual = linha.cells[0].innerText;
    document.getElementById("categoriaEditada").value = categoriaAtual;
    abrirModal('modalVisualizar2');
}

function salvar() {
    let categoriaEditada = document.getElementById("categoriaEditada").value;
    let linhaEditando = document.querySelector("tr[data-editando='true']");
    let celulaCategoria = linhaEditando.cells[0];
    celulaCategoria.innerText = categoriaEditada;
    linhaEditando.removeAttribute('data-editando'); // Remove a marcação de edição
    fecharModal('modalVisualizar2');
}

function deletarItem(botaoDeletar) {
    let linha = botaoDeletar.parentNode.parentNode; // Obtém a linha associada ao botão "Deletar" clicado
    linha.remove(); // Remove a linha da tabela
    fecharModal('modalVisualizar3'); // Fecha o modal de confirmação de exclusão
}

function abrirVisu(numeroModal) {
        abrirModal('modalVisualizar' + numeroModal); // Concatene o número do modal ao ID
    }
   </script>
</body>
</html>