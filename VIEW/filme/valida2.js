const form = document.querySelector('#valida2');
const input_status = document.getElementById('situacao');

function validarSituacao(valor) {
    valor = valor.trim().toUpperCase();

    return valor === 'I' || valor === 'D';
}

form.addEventListener('submit', function(event) {

    const situacao = input_status.value;

    if (!validarSituacao(situacao)) {
        event.preventDefault();
        alert('Digite apenas I ou D');
    }

});