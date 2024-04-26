function abrirModal(idModal) {
    document.getElementById(idModal).style.display = "flex";
}

function fecharModal(idModal) {
    document.getElementById(idModal).style.display = "none";
}

//Funções CRUD

function criarItem() {
    let novaCategoria = document.getElementById("novaCategoria").value;
    let tabela = document.getElementById("tabelaCategorias").getElementsByTagName('tbody')[0];
    let novaLinha = tabela.insertRow();
    let celulaCategoria = novaLinha.insertCell(0);
    celulaCategoria.innerText = novaCategoria;
    let celulaAcoes = novaLinha.insertCell(1);
    celulaAcoes.innerHTML = `
        <button type="button" class="botao-visu">Visualizar<i class="bx bxs-eye"></i></button>
        <button type="button" class="botao-edit" onclick="editarItem(this)">Editar<i class='bx bxs-pencil'></i></button>
        <button type="button" class="botao-delete" onclick="abrirModalDeletar(this)">Deletar<i class='bx bxs-trash'></i></button>
    `;
    fecharModal('modalCriar');
}

function editarItem(botaoEditar) {
    let linha = botaoEditar.parentNode.parentNode;
    let categoriaAtual = linha.cells[0].innerText;
    document.getElementById("categoriaEditada").value = categoriaAtual;
    abrirModal('modalEditar');
}

function salvar() {
    let categoriaEditada = document.getElementById("categoriaEditada").value;
    let linha = document.querySelector("tr[data-editando='true']");
    linha.cells[0].innerText = categoriaEditada;
    fecharModal('modalEditar');
}

function deletarItem(botaoDeletar) {
    abrirModal('modalExcluir');
}

function abrirVisu(botaoVisualizar) {
    abrirModal('modalVisualizar');
}