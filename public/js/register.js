$(document).ready(function(){
	$(document).on("focusout", "#cardnumber", verifyAccount);
});

function verifyAccount(){
	var acc_num = $("#cardnumber").val();
	
	$.ajax({
		url: "/user/get/"+acc_num,
		type: "get",
		dataType: 'json',
		success:function(data){
			console.info(data);
			console.log(data[0].account_name);

			$("#account_name").val(data[0].account_name);
		}
	});
}