


 $(document).ready(function(){
	        $("#login").fadeIn(3000);
				$("#h1").fadeIn(3000);

var  validator = $("#form").validate({
        rules: {
         email: {
                     required: true,
                     email:true
               },
         password: { 
         required: true
         }
        },
        messages: {
         email: {
                        required:"Enter email id",
                        email:"Invalid format. The correct format is abc@somaiya.edu"
               },
         password: {
            
         required: "Enter Password"
         }
        }
    });
$('#submit').click(function() {
        $("#form").valid();
    });

});