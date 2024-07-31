$("#forgotform").validate({
    rules:{
        email:{
            required:true,
            email: true
        },
    },
    messages: {
        email: {
            required: "Please Enter Email Address",
            email: "Please Enter Valid Email Address"
        },
    },

    submitHandler: function () {
        $(".image-loader").fadeIn();
		$("#result").html('');
        var email = $("#email").val();
        $.ajax({
            url: "forgot-submit",
            type: "POST",
            data: {email:email,_token:$("[name=_token]").val()},
            dataType:"JSON",
            success:function(data){
                if(data.result == true){
					setTimeout(function(){
						$("#result").html('<div class="alert alert-success"><strong>'+data.msg+'</strong></div>');
						$(".image-loader").hide();
						$('#forgotform')[0].reset();
					}, 1000);

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
