$(document).ready(function(){
    $('#table').DataTable();
$('#ajax-form').validate({
rules:{
    'name':'required',
    'number':{
        required:true,
        minlength:10,
        maxlength:10
    },
    password:{
        required:true,
        minlength:3
    },
    c_password:{
        required:true,
        equalTo:'#password'
    }
  
},messages:{

},submitHandler:function(form,event){
    event.preventDefault();
    $('#btn').val('Please Wait..');
    $('#btn').attr('disabled',true);
    $.ajax({
        url:"ajax",
        method:"POST",
        data:new FormData(form),
        dataType:"json",
        contentType:false,
        processData:false,
        beforeSend:function(){

        },
        success:function(data){
        dataShow();
            console.log(data);
            swal({
                title:data.title,
                msg:data.msg,
                icon:data.icon
            });
        }
    });
}
});

// FETCH DATA 
dataShow();
function dataShow(){
    $.ajax({
        url:"show",
        method:"POST",
        dataType:"html",
        success:function(data){
            console.log(data);
            $('#tr').html(data);
        }
        
    });
}





});