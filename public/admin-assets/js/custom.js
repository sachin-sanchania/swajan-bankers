
var sweet_loader = '<div class="sweet_loader"><svg viewBox="0 0 140 140" width="140" height="140"><g class="outline"><path d="m 70 28 a 1 1 0 0 0 0 84 a 1 1 0 0 0 0 -84" stroke="rgba(0,0,0,0.1)" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"></path></g><g class="circle"><path d="m 70 28 a 1 1 0 0 0 0 84 a 1 1 0 0 0 0 -84" stroke="#71BBFF" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-dashoffset="200" stroke-dasharray="300"></path></g></svg></div>';

$(function(){

    $('.dataTables-example').DataTable({
        pageLength: 25,
        responsive: true,
        dom: '<"html5buttons"B>lTfgitp',
        buttons: [
            { extend: 'copy'},
            {extend: 'csv'},
            {extend: 'excel', title: 'ExampleFile'},
            {extend: 'pdf', title: 'ExampleFile'},

            {extend: 'print',
             customize: function (win){
                    $(win.document.body).addClass('white-bg');
                    $(win.document.body).css('font-size', '10px');

                    $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
            }
            }
        ]
    });
    $(".numericOnly").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
            // Allow: Ctrl+A, Command+A
        (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
        // Allow: home, end, left, right, down, up
        (e.keyCode >= 35 && e.keyCode <= 40)) {
        // let it happen, don't do anything
        return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
    /*$("#dataTables").DataTable();*/
});
var GeneralFile = "../php/genLib.php";
function form_reset(element){
    // $("#")
	//$("#"+element)[0].reset();
    // $("#"+element+ "select").val("").trigger("change.select2");
	//$('select:not([name^="dataTables_length"])').val("").trigger("change.select2");
	$('select').not( ".dataTables_length select").val("").trigger("change.select2");
    // $("select").trigger("change");
	$("#"+element).closest('form').find("input[type=text],select,input[type=hidden], textarea").val("");
    $(".image-loader").fadeOut();
    $('#'+element).trigger("reset");
    $("#"+element).validate().resetForm();
    $("#"+element).find('.error').removeClass('error');
	//$("select").select2("val", "");
	$("#"+element).find('input:first').focus();
}
function ConfirmDelete(){
    return confirm("Are you sure you want to delete ?");
}
function ConfirmStatus(){
    return confirm("Are you sure you want to change status ?");
}
function randomPassword(element,length) {
    var chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
    var pass = "";
    for (var x = 0; x < length; x++) {
        var i = Math.floor(Math.random() * chars.length);
        pass += chars.charAt(i);
    }
	$(element).val(pass);
    //return pass;
}

function GetState(thiselement,nextelement){
	var country_id = $(thiselement).val();
	$.ajax({
        type: "POST",
        url: GeneralFile,
		data:{cmd:"GetState",id:country_id},
        dataType: "JSON",
        success: function(data){
            $(nextelement).html(data.country).trigger('change');
			//$("#phone").attr("placeholder",data.code);
        }
    });
}
function GetCity(thiselement,nextelement){
	var state_id = $(thiselement).val();
	$.ajax({
        type: "POST",
        url: GeneralFile,
		data:{cmd:"GetCity",id:state_id},
        dataType: "JSON",
        success: function(data){
            $(nextelement).html(data.state).trigger('change');
        }
    });
}
function convertImageName(imageName) {
    // Find the last occurrence of the dot
    const dotIndex = imageName.lastIndexOf('.');

    // Split the name into filename and extension
    const fileName = imageName.substring(0, dotIndex);
    const extension = imageName.substring(dotIndex + 1);

    // Construct the new name
    return `${fileName}@lg.${extension}`;
}
