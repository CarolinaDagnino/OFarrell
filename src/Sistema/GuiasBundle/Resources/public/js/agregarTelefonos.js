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
