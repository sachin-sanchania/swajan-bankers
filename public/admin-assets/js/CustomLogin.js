$("#loginform").validate({
    rules:{
        username:{
            required:true,
        },

        password:{
            required:true,
        }
    },
    messages: {
        username: {
            required: "Please Enter Username"
        },
        password: "Please Enter Password",
    },

    submitHandler: function () {
        $(".image-loader").fadeIn();
		$("#result").html('');
        var username = $("#username").val();
        var password = $("#password").val();
        $.ajax({
            url: "login-submit",
            type: "POST",
            data: {username:username,password:password,_token:$("[name=_token]").val()},
            dataType:"JSON",
            success:function(data){
                if(data.result == true){
                    window.location.href=data.redirect_uri;
                }
                else{
					setTimeout(function(){
						$("#result").html('<div class="alert alert-danger"><strong>'+data.msg+'</strong></div>');
						$(".image-loader").hide();
					}, 1000);
                }
            }
        });
    }
});
