MyForm = document.getElementById("formlogin");

MyForm.addEventListener("submit", function(event){

    const formData = new FormData(MyForm);

    fetch('login.php', {
    method: 'POST',
    body: formData
    })
    .then(response => response.text())
    .then(data => console.log(data))
    .catch(error => console.error(error));

    event.preventDefault();
});

MyFormReserva = document.getElementById("formreserva");

MyFormReserva.addEventListener("submit", function(event){

    const formData = new FormData(MyFormReserva);

    fetch('reserva.php', {
    method: 'POST',
    body: formData
    })
    .then(response => response.text())
    .then(data => console.log(data))
    .catch(error => console.error(error));

    event.preventDefault();
});

FormCadastro = document.getElementById("formcadastro");

FormCadastro.addEventListener("submit", function(event){

    const formData = new FormData(FormCadastro);

    fetch('cadastro.php', {
    method: 'POST',
    body: formData
    })
    .then(response => response.text())
    .then(data => console.log(data))
    .catch(error => console.error(error));

    event.preventDefault();
});