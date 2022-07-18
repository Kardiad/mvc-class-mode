const btn = document.getElementById('btn');
const tabla = document.getElementById('tabla');

const funcionAjaxQueDaUsuarios = async()=>{
    const conn = await fetch('http://localhost/App/?url=walter');
    const json = await conn.json();
    json.forEach(element => {
        tabla.innerHTML+=`<tr>
            <td>${element.nombre}</td>
            <td>${element.apellidos}</td>
            <td>${element.usuario}</td>
            <td>${element.contrasena}</td>
            <td>${element.mail}</td>
        </tr>`    
    });
}

btn.addEventListener('click', funcionAjaxQueDaUsuarios);