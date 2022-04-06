function validateMyForm () {
    let campo1 = document.getElementById('senha').value;
    let campo2 = document.getElementById('novasenha').value;
    if (campo1 == campo2) {
        return true;
    } else {
        event.preventDefault();
        alert('Senhas não conferem')
    }
}