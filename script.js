const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const errorMessage = document.getElementById('errorMessage');

    // Simulação de validação simples (aqui você pode fazer requisições a uma API, por exemplo)
    if (email === 'admin@gmail.com' && password === '12345') {
        alert('Login bem-sucedido!');
        // Redirecionar para outra página ou realizar outras ações
    } else {
        errorMessage.textContent = 'Email ou senha incorretos.';
    }
});