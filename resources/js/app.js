import { createApp } from 'vue';

//FUNÇÃO QUE VALIDA OS E-MAILS QUANDO ENTRAM EM ALGUM INPUT
function validarEmail(email) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}

//ENQUANTO O CAMPO DE E-MAIL NÃO POSSUIR NENHUM CARACTERE ATIVO PARA SER CONSIDERADO COMO E-MAIL O BOTAO VAI CONTINUAR DESATIVADO
document.addEventListener('DOMContentLoaded', function () {
    //PEGA AS VARIVEIS DENTRO DO DOM
    const inputEmail = document.getElementById('email');
    const botao = document.getElementById('btn');

    //VAI CONSIDERANDO AS MODIFICAÇÕES NO INPUT ATÉ O E-MAIL SER CONSIDERADO VALIDO
    inputEmail.addEventListener('input', function () {
        if (validarEmail(this.value)) {
            botao.disabled = false;
        } else {
            botao.disabled = true;
        }
    });
});

