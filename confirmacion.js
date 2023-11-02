function confirmacion(evento){
    if (confirm("¿Esta seguro que desea eliminar el registro del empleado?")) {
        return true;

    } else {
        evento.preventDefault();
    }
}
let linkDelete = document.querySelectorAll(".elimina");

for (var i =0; i < linkDelete.length; i++ ){
    linkDelete[i].addEventListener('click',confirmacion );
}