let boton = document.querySelector("#enviar");
let respuesta = document.querySelector("#respuesta-nombre");
let respuestaCorrecta = document.querySelector("#correcto");
let respuestaCorreo = document.querySelector("#respuesta-correo");

let respuestaTel = document.querySelector("#respuesta-tel");
let respuestaFecha = document.querySelector("#respuesta-fecha");
let respuestaObra = document.querySelector("#respuesta-obra");
let respuestaTipoAtencion = document.querySelector("#respuesta-tipoAtencion");
let respuestaTerminos= document.querySelector("#respuesta-terminos");

boton.addEventListener("click", function () {
    //limpiar los mensajes de error
    respuesta.textContent = "";
    respuestaCorrecta.textContent = "";
    respuestaFecha.textContent = "";
    respuestaCorreo.textContent = "";
    respuestaTel.textContent = "";
    respuestaObra.textContent = "";
    respuestaTerminos.textContent = "";
    respuestaTipoAtencion.textContent = "";


    let nombre = document.querySelector("#nombre");
    let correo = document.querySelector("#correo");
    let telefono = document.querySelector("#telefono");
    let fecha = document.querySelector("#fecha");
    let obra = document.querySelector("#obra");
    let presencial = document.querySelector("#presencial");
    let virtual = document.querySelector("#virtual");
    let terminos = document.querySelector("#terminos");

    //validar campo vacio
    if (nombre.value === "") {
        respuesta.textContent = "Debe completar el campo nombre";
        respuesta.style.color = "red";
    
    //comprobar longitud
    } else if(nombre.value.length < 3){
        respuesta.textContent = "El nombre debe ser mayor a 3 caracteres";
        respuesta.style.color = "red";

    //validar campo vacio correo
    }else if (correo.value === "") {
        respuestaCorreo.textContent = "Debe completar el campo correo";
        respuestaCorreo.style.color = "red";

    //comprobar si el correo es valido
    }else if (!correo.value.includes("@")) {
        respuestaCorreo.textContent = "Debe ingresar un correo valido";
        respuestaCorreo.style.color = "red";

    //validar campo vacio telefono  
    } else if(telefono.value === "") {
        respuestaTel.textContent = "Debe completar el campo telefono";
        respuestaTel.style.color = "red";

    //validar campo vacio fecha
    } else if(fecha.value === "") {
        respuestaFecha.textContent = "Debe completar el campo fecha";
        respuestaFecha.style.color = "red";

    //validar campo vacio obra
    } else if(obra.value === "") {
        respuestaObra.textContent = "Debe completar el campo obra social";
        respuestaObra.style.color = "red";

    //validar que este seleccionado tipo de atencion
    } else if(!presencial.checked && !virtual.checked) {
        respuestaTipoAtencion.textContent = "Debe seleccionar un tipo de atención";
        respuestaTipoAtencion.style.color = "red";

    //validar que este seleccionado terminos y condiciones
    } else if(!terminos.checked) {
        respuestaTerminos.textContent = "Debe aceptar los términos y condiciones";
        respuestaTerminos.style.color = "red";

    } else{
        respuestaCorrecta.textContent = "Turno guardado correctamente";
        respuestaCorrecta.style.color = "green";
    }
}) 

