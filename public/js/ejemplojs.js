function crearDin()
{
         
    var padre = document.getElementById("padre");
    var input = document.createElement("INPUT");         
    input.type = 'text';

    padre.appendChild(input);
} 
window.onload = function()
{
    var btnAdd = document.getEmentById("btn_agregar");   
    btnAdd.onclick = crearDin;
}    