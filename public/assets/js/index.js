function changeProduto(e){
    const element = e.target.querySelector(':checked');

    const valor = element.getAttribute('data-valor');
    const quantidade = element.getAttribute('data-quantidade');

    let elementValorUnitario = document.querySelector('#valorUnitarioVenda');
    let elementQuantidade = document.querySelector('#quantidadeVenda');

    elementValorUnitario.value = valor;
    elementQuantidade.max = quantidade;

    changeValorVenda();
    
}

function changeValorVenda(e){

    let valorUnitario = document.querySelector('#valorUnitarioVenda').value;
    let quantidade = document.querySelector('#quantidadeVenda').value;
    let elementValorTotal = document.querySelector('#valorTotalVenda');

    if(!valorUnitario || !quantidade){
        elementValorTotal.value = '';
    } else {
        elementValorTotal.value = parseFloat(quantidade) * parseFloat(valorUnitario);
    }


}
