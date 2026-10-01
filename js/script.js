function avisarCompra(event, urlDestino) {
    event.preventDefault();
    alert("Você selecionou o produto e escolheu comprar!");
    window.location.href = urlDestino;
}

document.addEventListener("DOMContentLoaded", function () {
    const formulario = document.querySelector('form');
    
    if (formulario) {
        formulario.addEventListener('submit', function(event) {
            const pagamentoCredito = document.querySelector('input[name="pagamento"][value="credito"]');
            const pagamentoDebito = document.querySelector('input[name="pagamento"][value="debito"]');
            
            const nomeCartao = document.getElementById('nome-cartao');
            const numeroCartao = document.getElementById('numero-cartao');
            const validadeCartao = document.getElementById('validade');
            const cvvCartao = document.getElementById('cvv');

            const ehCartao = (pagamentoCredito && pagamentoCredito.checked) || (pagamentoDebito && pagamentoDebito.checked);

            if (ehCartao) {
                nomeCartao.setCustomValidity("");
                numeroCartao.setCustomValidity("");
                validadeCartao.setCustomValidity("");
                cvvCartao.setCustomValidity("");

                if (nomeCartao.value.trim() === "") {
                    event.preventDefault();
                    nomeCartao.setCustomValidity("Por favor, preencha o nome no cartão.");
                    nomeCartao.reportValidity();
                    return;
                }
                
                if (numeroCartao.value.trim() === "") {
                    event.preventDefault();
                    numeroCartao.setCustomValidity("Por favor, preencha o número do cartão.");
                    numeroCartao.reportValidity();
                    return;
                }
                
                if (validadeCartao.value.trim() === "") {
                    event.preventDefault();
                    validadeCartao.setCustomValidity("Por favor, preencha a validade do cartão.");
                    validadeCartao.reportValidity();
                    return;
                }
                
                if (cvvCartao.value.trim() === "") {
                    event.preventDefault();
                    cvvCartao.setCustomValidity("Por favor, preencha o CVV do cartão.");
                    cvvCartao.reportValidity();
                    return;
                }
            }
        });
    }
});