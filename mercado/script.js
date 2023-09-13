async function logar() {
    var login = document.getElementById('loginInp').value;
    var senha = document.getElementById('senhaInp').value;

    let data = new FormData;
    data.append('login', login);
    data.append('senha', senha);
    data.append('opcao', 1);

    const url = 'validacao.php';

    axios.post(url, data)
        .then(function (response) {
            if (response.data == '') {
                alert('Usuario não encontrado');

            } else {
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = 'gerenciamento.php';

                const input1 = document.createElement('input');
                input1.type = 'hidden'; 
                input1.name = 'login'; 
                input1.value = login;

                const input2 = document.createElement('input');
                input2.type = 'hidden';
                input2.name = 'senha';
                input2.value = senha;

                form.appendChild(input1);
                form.appendChild(input2);

                document.body.appendChild(form);
                form.submit();
            };
        })
}

async function cadastrar() {
    var login = document.getElementById('loginInp').value;
    var nome = document.getElementById('nomeInp').value;
    var email = document.getElementById('emailInp').value;
    var senha = document.getElementById('senhaInp').value;
    var senhaConf = document.getElementById('senhaConfInp').value;

    if (login == '') {
        alert("Login não informado.");
        return;
    }

    if (nome == '') {
        alert("Nome não informado.");
        return;
    }

    if (!validarEmail(email)) {
        alert("O email não é válido.");
        return;
    }

    if(senha.length < 8){
        alert("Sua senha deve conter no minimo 8 caracteres!");
        return;
    }

    if(senha != senhaConf){
        alert("Sua senha deve ser igual nos dois campos!");
        return;
    }

    let data = new FormData;
    data.append('login', login);
    data.append('nome', nome);
    data.append('email', email);
    data.append('senha', senha);
    data.append('opcao', 2);

    const url = 'validacao.php';

    axios.post(url, data)
        .then(function (response) {
            if (response.data == '') {
                alert('Usuario Cadastrado.');
                window.location.href = 'index.php';
            } else {
                alert(response.data);
            };
        })
}

function validarEmail(email) {
    const regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    return regex.test(email);
}

