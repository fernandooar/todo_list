
    var senha = document.getElementById("senha");
    var confirmar_senha = document.getElementById("confirmar_senha");

    function validatePassword() {
        if (senha.value != confirmar_senha.value) {
            confirmar_senha.setCustomValidity("Senhas diferentes!");
        } else {
            confirmar_senha.setCustomValidity('');
        }
    }

    senha.onchange = validatePassword;
    confirmar_senha.onkeyup = validatePassword;


    function updateTime() {
        const now = new Date();
        const timeString = now.toLocaleString('pt-BR', {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric',
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit'
        });
        document.getElementById('current-time').textContent = timeString;
    }
    
    setInterval(updateTime, 1000); // Atualiza a cada 1 segundo
    updateTime(); // Executa imediatamente ao carregar a página