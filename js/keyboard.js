
function handleSkip() {
    restartTimer();
    disableButton1();
}

// Adiciona o listener para o evento keydown
document.addEventListener('keydown', function(event) {
    if (event.code === 'Space') { // Verifica se a tecla pressionada é a tecla Espaço
        event.preventDefault(); // Impede o comportamento padrão da tecla Espaço (rolar a página)
        const button = document.getElementById('skip-btn');
        button.click(); // Aciona o clique no botão
    }
});



$(document).keydown(function(event) {
    switch (event.code) {
        case 'Digit1':
            $('#btn1').click();
            break;
        case 'Digit2':
            $('#btn2').click();
            break;
        case 'Digit3':
            $('#btn3').click();
            break;
        case 'Digit4':
            $('#btn4').click();
            break;
        default:
            return; // Não faz nada se não for um dos números especificados
    }
    event.preventDefault(); // Impede o comportamento padrão do teclado
});

document.addEventListener('keydown', function(event) {
    const key = event.key;
    if (key >= '1' && key <= '4') {
        // Encontre o primeiro elemento de entrada de rádio que corresponda ao número da tecla
        const radio = document.querySelector(`input[type="radio"][value="${key}"]`);
        if (radio) {
            radio.checked = true;
        }
    }
});