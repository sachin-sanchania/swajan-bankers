$("#resetform").validate({
    rules:{
        password:{
            required:true,
            minlength:6
        },
		repassword:{
            required:true,
            minlength:6,
			equalTo:"#password"
        },
    },
    messages: {
        password: {
            required: "Please Enter New Password",
            minlength: "Password must be atleast 6 characters."
        },
		repassword: {
            required: "Please Re-Enter New Password",
            minlength: "Password must be atleast 6 characters.",
			equalTo : "Password Does Not Match."
        },
    },

    submitHandler: function () {
        $(".image-loader").fadeIn();
		$("#result").html('');
        var password = $("#password").val();
        var repassword = $("#repassword").val();
        $.ajax({
            url: "../reset-password-submit",
            type: "POST",
            data: {password:password,repassword:repassword,_token:$("[name=_token]").val()},
            dataType:"JSON",
            success:function(data){
                if(data.result == true){
                    window.location.href="../login";
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
