function añadirMaterial() {
    var padre = document.getElementById("registrodemateriales");
    var contenedor = document.querySelector(".contenedor");
    //contenedor.setAttribute("style","display:block; ");
    contenedor.style.display = block;

    padre.appendChild(contenedor);
}



/*var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
        document.querySelector("#registrarclientes").innerHTML = xhttp.responseText;
    }
};
xhttp.open("GET", "<?php echo URL_BASE;?>/index.php/controlador/metodo", true);
xhttp.send();*/



/*
Please consider that the JS part isn't production ready at all, I just code it to show the concept of merging filters and titles together !
*/
$(document).ready(function() {
    $('.filterable .btn-filter').click(function() {
        var $panel = $(this).parents('.filterable'),
            $filters = $panel.find('.filters input'),
            $tbody = $panel.find('.table tbody');
        if ($filters.prop('disabled') == true) {
            $filters.prop('disabled', false);
            $filters.first().focus();
        } else {
            $filters.val('').prop('disabled', true);
            $tbody.find('.no-result').remove();
            $tbody.find('tr').show();
        }
    });

    $('.filterable .filters input').keyup(function(e) {
        /* Ignore tab key */
        var code = e.keyCode || e.which;
        if (code == '9') return;
        /* Useful DOM data and selectors */
        var $input = $(this),
            inputContent = $input.val().toLowerCase(),
            $panel = $input.parents('.filterable'),
            column = $panel.find('.filters th').index($input.parents('th')),
            $table = $panel.find('.table'),
            $rows = $table.find('tbody tr');
        /* Dirtiest filter function ever ;) */
        var $filteredRows = $rows.filter(function() {
            var value = $(this).find('td').eq(column).text().toLowerCase();
            return value.indexOf(inputContent) === -1;
        });
        /* Clean previous no-result if exist */
        $table.find('tbody .no-result').remove();
        /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
        $rows.show();
        $filteredRows.hide();
        /* Prepend no-result row if all rows are filtered */
        if ($filteredRows.length === $rows.length) {
            $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="' + $table.find('.filters th').length + '">No result found</td></tr>'));
        }
    });

    var btnAdd = document.getElementById("singlebutton");
    btnAdd.addEventListener("click", añadirMaterial, false);


    /*$("#form1").on("submit",function(e){
        e.preventDefault();
        $.ajax({
            url: "/proyectoEjemplo/index.php/Cliente/crearCliente",
            data: $("#form1").serialize(),
            dataType: 'json',
            type: "POST",
            success: function(data){
                $("#msg-form").html(data);

            },
            error: function(){

            }
        });
    });*/

    $('#datetimepicker1').datetimepicker({
        locale: "es",
        format: "YYYY-MM-DD HH:mm"
    });


    $('#datetimepicker2').datetimepicker({
        locale: "es",
        format: "YYYY-MM-DD HH:mm"
    });


    $('#datetimepicker3').datetimepicker({
        locale: "es",
        format: "YYYY-MM-DD HH:mm"
    });


    $('#fechanota').datetimepicker({
        locale: "es",
        format: "YYYY-MM-DD HH:mm"
    });



    /*Peticiones ajax*/


    $("#verclientes").load("/proyectoEjemplo/index.php/Cliente/listarClientes");
    $("#verpeticiones").load("/proyectoEjemplo/index.php/Peticion/listarPeticiones");
    $("#materialesdeusuario").load("/proyectoEjemplo/index.php/Peticion/asignarMateriales");

});