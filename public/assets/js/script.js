$(document).ready(function() {

    console.log('hi');

    $('#myTable').DataTable();


    $('.action').on('change', function() {

        var action = $(this).val();
        var id = $(this).attr("data-id")
        console.log(action);

        if (action == 'delete') {
            let message = "are you sure you want to delete the record?";
            if (confirm(message) == true) {
                window.location = '/delete/' + id;
            }
        }
        else{
            window.location = '/' + action + '/' + id;
        }

    });

    $('#edit-roles').on('change hide.bs.select', function(){

        var roles=$('#edit-roles').val();

        var rolestring = roles.join(',');

        console.log(rolestring);

        $('#roles').val(rolestring);

    })


});