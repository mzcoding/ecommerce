//Error
function error(layout) {
		  noty({"text": layout,
             "layout":"top",
             "type":"error",
             "textAlign":"center",
             "easing":"swing",
             "animateOpen":{"height":"toggle"},
             "animateClose":{"height":"toggle"},
             "speed":"500",
             "timeout":"5000",
             "closable":true,
             "closeOnSelfClick":true,
           });
 }
 //Success
function success(layout){
        noty({"text": layout,"layout":"top","type":"success",
        "textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},
        "speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});
        
       
}

$(function(){
	var opts = {
  lines: 9, // The number of lines to draw
  length: 15, // The length of each line
  width: 14, // The line thickness
  radius: 20, // The radius of the inner circle
  corners: 1, // Corner roundness (0..1)
  rotate: 44, // The rotation offset
  direction: 1, // 1: clockwise, -1: counterclockwise
  color: '#000', // #rgb or #rrggbb or array of colors
  speed: 0.7, // Rounds per second
  trail: 72, // Afterglow percentage
  shadow: true, // Whether to render a shadow
  hwaccel: true, // Whether to use hardware acceleration
  className: 'spinner', // The CSS class to assign to the spinner
  zIndex: 2e9, // The z-index (defaults to 2000000000)
  top: '50%', // Top position relative to parent
  left: '50%' // Left position relative to parent
};
var target = document.getElementById('loader');
var spinner = new Spinner(opts).spin(target);
///delete category
$(".delete_category").on('click', function(){
	 var id = $(this).attr('rel');
	 var type = 'delete_category';
	if(confirm("Вы действительно хотите удалить запись с #ID" + id + " ?")){
		$.ajax({
			type:"POST",
			dataType:"json",
			cache: false,
			url: "/application/ajax/init.php",
			data:{id:id, type:type},
			success: function(data){
				if(data.type == 'success'){
				success(data.message);
				setTimeout('location.reload()', 3000);
				}else{
					error(data.message);
				}
			},
			complete: function(){
				$("#loader").hide();
			} 
			
		});
		$("#loader").show();
	}else{
		alert("Удаление отменено");
	}
});
//delete article
$(".delete_article").on('click', function(){
	 var id = $(this).attr('rel');
	 var type = 'delete_article';
	if(confirm("Вы действительно хотите удалить запись с #ID" + id + " ?")){
		$.ajax({
			type:"POST",
			dataType:"json",
			cache: false,
			url: "/application/ajax/init.php",
			data:{id:id, type:type},
			success: function(data){
				if(data.type == 'success'){
				success(data.message);
				setTimeout('location.reload()', 3000);
				}else{
					error(data.message);
				}
			},
			complete: function(){
				$("#loader").hide();
			} 
			
		});
		$("#loader").show();
	}else{
		alert("Удаление отменено");
	}
});
//delete user
$(".delete_user").on('click', function(){
	 var id = $(this).attr('rel');
	 var type = 'delete_user';
	if(confirm("Вы действительно хотите удалить пользователя с #ID" + id + " ?")){
		$.ajax({
			type:"POST",
			dataType:"json",
			cache: false,
			url: "/application/ajax/init.php",
			data:{id:id, type:type},
			success: function(data){
				if(data.type == 'success'){
				success(data.message);
				setTimeout('location.reload()', 3000);
				}else{
					error(data.message);
				}
			},
			complete: function(){
				$("#loader").hide();
			} 
			
		});
		$("#loader").show();
	}else{
		alert("Удаление отменено");
	}
});
});
