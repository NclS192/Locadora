const form = document.querySelector('#valida'); 
let input_telefone = document.getElementById('telefone');
let input_cpf = document.getElementById('cpf')

function validarTelefone(telefone) {

  // 1. Remove tudo que não é número
  let numeros = telefone.replace(/\D/g, '');

  // 2. Verifica tamanho (10 fixo / 11 celular)
  if (!(numeros.length === 10 || numeros.length === 11)) return false;

  // 3. DDDs válidos
  const dddsValidos = [
    11,12,13,14,15,16,17,18,19,
    21,22,24,27,28,31,32,33,34,
    35,37,38,41,42,43,44,45,46,
    47,48,49,51,53,54,55,61,62,
    64,63,65,66,67,68,69,71,73,
    74,75,77,79,81,82,83,84,85,
    86,87,88,89,91,92,93,94,95,
    96,97,98,99
  ];

  const ddd = parseInt(numeros.substring(0, 2));
  if (!dddsValidos.includes(ddd)) return false;

  // 4. Celular tem que começar com 9
  if (numeros.length === 11 && numeros[2] !== '9') return false;

  return true;
}

function validarCPF(cpf) {

  // Remove tudo que não for número
  let numeros = cpf.replace(/\D/g, '');

  // CPF tem que ter 11 dígitos
  if (numeros.length !== 11) return false;

  // Bloqueia CPFs inválidos conhecidos
  if (/^(\d)\1+$/.test(numeros)) return false;

  let soma = 0;
  let resto;

  // 1º dígito verificador
  for (let i = 1; i <= 9; i++) {
    soma += parseInt(numeros.substring(i - 1, i)) * (11 - i);
  }

  resto = (soma * 10) % 11;
  if (resto === 10 || resto === 11) resto = 0;
  if (resto !== parseInt(numeros.substring(9, 10))) return false;

  // 2º dígito verificador
  soma = 0;

  for (let i = 1; i <= 10; i++) {
    soma += parseInt(numeros.substring(i - 1, i)) * (12 - i);
  }

  resto = (soma * 10) % 11;
  if (resto === 10 || resto === 11) resto = 0;
  if (resto !== parseInt(numeros.substring(10, 11))) return false;

  return true;
}

form.addEventListener('submit', function(event) {

  // pega valor REAL do input
  const telefone = input_telefone.value;
  const cpf = input_cpf.value;
  let validtell = validarTelefone(telefone)
  let validcpf = validarCPF(cpf)

  if (!validtell || !validcpf) {
    event.preventDefault();
    if(validcpf === false && validtell === false)
      alert('Telefone e CPF inválido');
    if(validcpf === true && validtell === false)
      alert ('Telefone inválido');
    if(validcpf === false && validtell === true)
      alert ('CPF inválido');
  }

});


