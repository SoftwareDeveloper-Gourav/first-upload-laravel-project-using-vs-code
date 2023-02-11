$('#reg_form').validate({
    rules: {
        'name': 'required',
        'number': {
            "required": true,
            'minlength': 10,
            'maxlength': 10
        },
        'email': {
            'required': true,
            'email': true
        },
        'photo': "required",
        'password': 'required',
        'c_password': 'required'
    }, messages: {

    }, submitHandler: function (form, event) {
        event.preventDefault();
        $('#btn').val('Please Wait');
        $('#btn').attr('disabled', true);
        $.ajax({
            url: "form",
            method: "POST",
            data: new FormData(form),
            dataType: "json",
            contentType: false,
            processData: false,
            success: function (data) {
                $('#btn').val('Registration');
                $('#btn').attr('disabled', false);
                showData();
                swal({
                    title: data.title,
                    // text: "You clicked the button!",
                    icon: data.icon,
                });

            }


        });
    }
});


function showData() {
    $.ajax({
        url: "showdata",
        method: "post",
        dataType: "html",
        success: function (data) {
            $('#tr').html(data);

        }
    });
}
$(document).ready(function () {
    showData();
});
function Delete(id) {
    $.ajax({
        url: "delete_data",
        method: "post",
        data: { id: id },
        success: function (data) {
            alert(data);
            showData();

        }
    });
}