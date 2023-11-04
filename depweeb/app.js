const formulario = document.getElementById("formulario")
let respuesta = document.getElementById("respuesta")

formulario.addEventListener("submit", e => {
    e.preventDefault()
    // console.log('me diste un click')

    let datos = new FormData(formulario)

    // console.log(datos)
    console.log(datos.get("usuario"))
    console.log(datos.get("pass"))

    fetch("post.php", {
        method: "POST",
        body: datos
    })
    .then(res => res.json())
    .then(data =>{
        console.log(data)
        if(data === 'error') {
    respuesta.innerHTML = `<div class="alert alert-danger" role="alert">
    Llena todos los campos
    </div>
    `
        } else {
            respuesta.innerHTML = `<div class="alert alert-primary" role="alert">
        ${data}
            </div>
            `
        }
    })
})