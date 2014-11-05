/*Función general para remover línea*/
function deleteRow($deleteButton) {
    var $divContent = jQuery($deleteButton).parent().parent();
    $divContent.remove();
}
