// AJAX call for the signup form
// Once the form is submitted
$('#signupform').submit(function(event){
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
    console.log(datatopost);
    //send them to signup.php using AJAX
    $.ajax({
        url: "signup.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data){    
                $("#signupmessage").html(data);
            }
        },
        error: function(){
            $("#signupmessage").html("<div class='emessage'>There was an error with the Ajax Call. Please try again later.</div>");   
        }
    });

});

// AJAX call for the login form
// Once the form is submitted
$(".signin-form").submit(function(event){ 
    event.preventDefault();
    var datatopost = $(this).serializeArray();
    $.ajax({
        url: "signin.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            data = data.replace(/(\r\n|\n|\r)/gm,"");
            if(data == "<div class='smessage'>success</div>"){
                window.location = "../mainpage.php";
            }
            else{
                $('#loginmessage').html(data);
                console.log(data);
            }
        },
        error: function(){
            $("#loginmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });

});

// AJAX call for the Update Password
$('#forgotpasswordform').submit(function(event) {
    event.preventDefault();
    console.log("hello");
    var datatopost = $(this).serializeArray();
    console.log(datatopost);
    $.ajax({
        url: "forgotpassword.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            $('#forgotpasswordmessage').html(data);
        },
        error: function(){
            $('#forgotpasswordmessage').html("<div class='alert alert-danger font-weight-bold'>ERROR: Running the AJAX!</div>")
        }
    });
});


// AJAX call for the Update Profile
$("#updateform").submit(function(event){ 
    event.preventDefault();
    var datatopost = $(this).serializeArray();
    // console.log(datatopost);
    //send them to login.php using AJAX
    $.ajax({
        url: "profile.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            $('#updatemessage').html(data);
            if(data == "<div class='alert alert-success'>Updated Your Detail Successfully!</div>"){
                console.log(data);
                $('#updatemessage').html(data);
                setInterval('location.reload()', 3000); 
            }
        },
        error: function(){
            $("#updatemessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");         
        }
    
    });

});
// AJAX call for the Delete Account from Profile Page
$(".deleteaccount").click(function(event){ 
    event.preventDefault();
    var datatopost = $(this).serializeArray();
    // console.log(datatopost);
    //send them to login.php using AJAX
    $.ajax({
        url: "delete-account.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            console.log(data);
            $('#updatemessage').html(data);
            window.location.href="index.php?delete=1";
        },
        error: function(){
            $("#updatemessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });

});