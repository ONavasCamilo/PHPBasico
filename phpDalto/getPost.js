// const request = new XMLHttpRequest()

// request.addEventListener('readystatechange', ()=>{
//     // console.log(request.readyState)
//     // console.log(request.response)
//     if(request.readyState === 4 && request.status === 200) {
//         console.log(request.response)
//         // console.log(request.status)
//     }
// })

// request.open("GET",  "inforsmacion.txt")

// request.send()

// console.log(request)

// let peticion

// if (window.XMLHttpRequest) peticion = new XMLHttpRequest()
// else peticion = new ActiveXObject("Microsoft.XMLHTTP")


// peticion.addEventListener('load', ()=>{
//     let respuesta
//     if(peticion.status === 200) respuesta = peticion.response
//     else respuesta = "Lo siento, no se encontro resultado"
//     console.log(JSON.parse(respuesta))
//     // console.log(typeof JSON.parse(respuesta).nombre)
//     // console.log(typeof respuesta)
//     // console.log(JSON.stringify(respuesta))
// })
// peticion.open("GET", "https://reqres.in/api/users?page=2")
// peticion.send()
//     // console.log(peticion.response)

    // let peticion

// if (window.XMLHttpRequest) peticion = new XMLHttpRequest()
// else peticion = new ActiveXObject("Microsoft.XMLHTTP")


// peticion.addEventListener('load', ()=>{
//     let respuesta
//     if(peticion.status === 200 || peticion.status === 201) respuesta = peticion.response
//     else respuesta = "Lo siento, no se encontro resultado"
//     console.log(JSON.parse(respuesta))
//     // console.log(typeof JSON.parse(respuesta).nombre)
//     // console.log(typeof respuesta)
//     // console.log(JSON.stringify(respuesta))
// })
// peticion.open("POST", "https://reqres.in/api/users")

// peticion.setRequestHeader("Content-type", "application/json;charset=UTF8" )

// peticion.send(JSON.stringify({
//     "nombre": "morfeo",
//     "trabajo": "líder"
// }))

// fetch('https://reqres.in/api/unknown/2')
//     .then(res=>res.json())
//     .then(res=>console.log(res))

    // fetch('https://reqres.in/api/users', {
    //     method : "POST",
    //     body : JSON.stringify({
    //         "nombre": "Lucas",
    //         "apellido": "Dalto"
    //     }),
    //     header : {"Content-type" : "application/json"}
    // }).then(res=>res.json())
    //   .then(res=>console.log(res))

    // AXIOS LIBRERIA

    // axios("informacion.txt")
    //     .then(res=>console.log(res.data))

        // axios.post("informacion.txt", {
        //     "nombre":"lucando libreria"
        // })
        // .then(res=>console.log(res.data))

          const getName = async () => {
            let peticion = await fetch("informacion.txt")
            let resultado = await peticion.json()
            let HTMLCode = `Nombre: ${resultado.nombre}<br>
                                        Edad: ${resultado.edad}`
            document.querySelector(".resultado").innerHTML = HTMLCode
        }

          document.getElementById('nombre').addEventListener('click', getName) 