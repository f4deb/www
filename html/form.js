function submit() {
    var submitForm = document.getElementById('edit_form');

    /*--------------------- items table -------------------------*/
    // set availableItems
    var availableItems = document.getElementById('availableItems');
    var availableItems_dict = {};

    var table = document.getElementById('itemsTable');
    var rowLength = table.rows.length;
    for (i = 1; i < rowLength; i++){
        if (table.rows[i].cells[0].getElementsByTagName("input")[0] == undefined) {
            var item = table.rows[i].cells[0].innerHTML;
        } else {
            var item = String(table.rows[i].cells[0].getElementsByTagName("input")[0].value);
        }

        var typesTable = table.rows[i].cells[1].getElementsByTagName("table")[0];
        var typesTableLength = typesTable.rows.length;
        types_dict = {};

        for (j = 1; j < typesTableLength; j++){
            if (typesTable.rows[j].cells[0].getElementsByTagName("input")[0] == undefined) {
                var type = typesTable.rows[j].cells[0].innerHTML;
            } else {
                var type = typesTable.rows[j].cells[0].getElementsByTagName("input")[0].value;
            }
            var value = parseInt(typesTable.rows[j].cells[1].getElementsByTagName("input")[0].value);
            var unit = typesTable.rows[j].cells[1].getElementsByTagName("select")[0].value;
            if (typesTable.rows[j].cells[2].getElementsByTagName("input")[0] == undefined) {
                var box = typesTable.rows[j].cells[2].innerHTML;
            } else {
                var box = typesTable.rows[j].cells[2].getElementsByTagName("input")[0].value;
            }
            var nbr = parseInt(typesTable.rows[j].cells[3].getElementsByTagName("input")[0].value);

            types_dict[type] =  {
                "value" : value,
                "unit" : unit,
                "box" : box,
                "nbr" : nbr,
            };
        }

        availableItems_dict[item] = JSON.stringify(types_dict);
    }
    availableItems.value = JSON.stringify(availableItems_dict);
    console.log(availableItems_dict);

    /*--------------------- bords Table -------------------------*/
    // set availableItems
    var craftebalBoard = document.getElementById('availableItems');
    var craftebalBoard_dict = {};

    var table = document.getElementById('bordsTable');
    var rowLength = table.rows.length;
    for (i = 1; i < rowLength; i++){

        table_requirements = table.rows[i].cells[1].getElementsByTagName("table")[0];
        rowLength_requirements = table_requirements.rows.length;
        var requirements = {};

        if (table.rows[i].cells[0].getElementsByTagName("input")[0] == undefined) {
            var item = table.rows[i].cells[0].innerHTML;
            for (j = 0; j < rowLength_requirements; j++){
                requiredItem = String(table_requirements.rows[j].cells[0].innerHTML);
                requirements[requiredItem] = parseInt(table_requirements.rows[j].cells[1].getElementsByTagName("input")[0].value);
            }

        } else {
            var item = String(table.rows[i].cells[0].getElementsByTagName("input")[0].value);

            for (j = 0; j < rowLength_requirements; j++){
                requiredItem = table_requirements.rows[j].cells[0].getElementsByTagName("select")[0].value;
                requirements[requiredItem] = parseInt(table_requirements.rows[j].cells[1].getElementsByTagName("input")[0].value);
            }
        }

        craftebalBoard_dict[item] = requirements;
    }

    craftebalBoards.value = JSON.stringify(craftebalBoard_dict);

    submitForm.submit(); // submit data
}
