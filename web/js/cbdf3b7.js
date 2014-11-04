/**
* Agregar formulario
*
* @param collectionHolder variable global sotiene el prototype
* @param $target          el DOM donde se inserta
* @param regName          Si tenemos un nested embebido no vamos a poder usar el __name__ por que sería reemplazado en todos este es un agregado mio ya que a través de este parámetro podemos agregar la expreción desearamos reemplazar en cada embed form
*
* @return void
*/
function addForm(collectionHolder, target, regName) {
    /*Obtien el data-prototype*/
    var prototype = collectionHolder.data('prototype');

    /*Obtiene el valor del index actual*/
    var index = collectionHolder.data('index');
    /*Reemplaza el valor '__name__' en el HTML del prototype por el número
    según la cantidad de items que tengamos*/
    if (regName == null) {
        regName = /__name__/g;
    }
    var newForm = prototype.replace(regName, index);
    /*incrementa el indice con uno por cada item que agregáramos*/
    collectionHolder.data('index', index + 1);
    /*Agrega el formulario al DOM*/
    target.append(newForm);
}


/* Implentación de Agregar Formularios y remover formularios */
collectionTelefonosHolder = jQuery('.telefonos');
collectionTelefonosHolder.data('index', collectionTelefonosHolder.find(':input').length);
jQuery('.add-telefono-form').click(function(e) {
    e.preventDefault();
    addForm(jQuery(this).parent().find('.telefonos'), jQuery(this).parent().find('.telefonos'));
});
jQuery('.telefonos').delegate('.delete-form','click', function(e) {
    e.preventDefault();
    deleteRow(this);
});

/*Función general para remover línea*/
function deleteRow($deleteButton) {
    var $divContent = jQuery($deleteButton).parent().parent();
    $divContent.remove();
}
