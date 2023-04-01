$(document).ready(function() {

    // Example only some columns editable & removed actions column label
    var editable = new BSTable("example2", {
        editableColumns:"0,2",
        advanced: {
            columnLabel: ''
        }
    });
    editable.init();

} );