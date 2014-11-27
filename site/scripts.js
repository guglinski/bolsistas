function desabilitaCamposCadastro() {
    
    var coordenador = document.getElementById("coordenador");
    var salarioBox = document.getElementById("salarioBox");
    var emailBox = document.getElementById("emailBox");
    var telefoneBox = document.getElementById("telefoneBox");
    
    if (coordenador.checked) {
        salarioBox.style.display = "none";
        emailBox.style.display = "none";
        telefoneBox.style.display = "none";
    
    } else {
        salarioBox.style.display = "block";
        emailBox.style.display = "block";
        telefoneBox.style.display = "block";
    }
}