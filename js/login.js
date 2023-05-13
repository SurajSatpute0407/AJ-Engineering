$(document).ready(function(){

    $("#submit").click(function(){
      
        var email = $('#email').val();
        var password = $('#password').val();

        if(email!= '' && password!=''){
            $.ajax({
                url: 'php/login.php',
                method: "POST",
                data:{email:email,password:password},
                datatype: "text",
                success:function(){

                }
            });
        }else{
            $('help').html("both fields are required");
        }
    });
});