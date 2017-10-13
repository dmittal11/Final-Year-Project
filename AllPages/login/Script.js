
function Konsole(){


var User = $('#User').val();
var Pass = $('#pass').val();

console.log(User);
console.log(Pass);


var insertData = {

  'post_Username' : User,
  'post_Password' : Pass
}
$.ajax({
  type : 'POST',
  url : 'Insert.php',
  data : insertData,
  dataType : 'json',
        encode		:true

})
location.reload();

/*
setTimeout(function(){
	
	
	location.reload();
	//console.log('Hello');
	
}, 1000)

*/
}
