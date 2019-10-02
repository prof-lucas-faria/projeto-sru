/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function carregaModalCardapio(array) {
    document.getElementById('data').value = '' + array;
    document.getElementById('nomeCardapio').value = array.nomeCardapio;
    document.getElementById('pratoPrincipal').value = array.pratoPrincipal;
    document.getElementById('guarnicao').value = array.guarnicao;
    document.getElementById('acompanhamento').value = array.acompanhamento;
    document.getElementById('salada').value = array.salada;
    document.getElementById('sobremesa').value = array.sobremesa;
    document.getElementById('sobremesa').value = array.sobremesa;
    document.getElementById('suco').value = array.suco;
}

function limpa_formulario() {
    //Limpa valores do formulário.
    document.getElementById('data').value = "";
    document.getElementById('nomeCardapio').value = "";
    document.getElementById('pratoPrincipal').value = "";
    document.getElementById('guarnicao').value = "";
    document.getElementById('acompanhamento').value = "";
    document.getElementById('salada').value = "";
    document.getElementById('sobremesa').value = "";
    document.getElementById('sobremesa').value = "";
    document.getElementById('suco').value = "";
}

function formata_data() {
    $("#data").mask("99/99/9999", {
        completed: function () {
            console.log('complete');
            var value = $(this).val().split('/');
            var maximos = [31, 12, 2100];
            var novoValor = value.map(function (parcela, i) {
                if (parseInt(parcela, 10) > maximos[i])
                    return maximos[i];
                return parcela;
            });
            if (novoValor.toString() !== value.toString())
                $(this).val(novoValor.join('/')).focus();
        }
    });
}

jQuery(function ($) {
    $("#data").mask("99/99/9999");
});

