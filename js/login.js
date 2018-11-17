$(function(){
	$("#loginForm").on("submit", function(e){
		e.preventDefault();

		var inputEmail = $("#inputEmail");
		var inputPassword = $("#inputPassword");
		var loginButton = $("#loginBtn");
		$.ajax({
                url: 'validate.php', // form action url
                type: 'POST', // form submit method get/post
                dataType: 'html', // request type html/json/xml
                data: $("#loginForm").serialize(), // serialize form data
                beforeSend: function() {

					inputEmail.prop( "disabled", true );
					inputPassword.prop( "disabled", true );
					loginButton.text("Unlocking Comic...");
					loginButton.prop( "disabled", true );

                },
                success: function(data) {
                   var json = eval('(' + data + ')');
                   var status = json['status'];
                   if(status == "success")
                   {
                        loginButton.text("Yay! Redirecting...");
                        //redirect user.
                        setTimeout(function(){
                            //do what you need here
                            window.location.replace("comic.php");
                        }, 2000);
                   }
                   else
                   {
                        inputEmail.removeAttr( "disabled");
                        inputPassword.removeAttr( "disabled");
                        loginButton.text("Dang! Let's try again?");
                        loginButton.removeAttr("disabled");
                   }
                },
                error: function(e) {
                    console.log(e)
                    inputEmail.removeAttr( "disabled");
                    inputPassword.removeAttr( "disabled");
                    loginButton.text("Let's try again?");
                    loginButton.removeAttr("disabled");
                }
            });
	});
});