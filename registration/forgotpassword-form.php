<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot-Password</title>
    <link rel="icon" href="../images/icons/logos.png" type="image/png"/> 

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- CSS LINKS -->
    <link rel="stylesheet" href="../styling/comon.css">
    <style>
        .btn{
            margin: 3rem 0;
        }

        input:focus{
            outline: none;
        }
    </style>
</head>
<body>
    <div class="p-4 ">
        <h2 style="margin:20px">If you have forgotten your password, you can reset it here. </h2>
        <div class="container-fluid  bg-info p-4">
            <form method="post" id="forgotpasswordform">
                <!-- Forgot Password Message -->
                <div id='forgotpasswordmessage'></div>

                <div class="form-group">
                    <label for='fg-email' class='text-white'>Enter your Email</label>
                    <input type='email' class="form-control " id='fg-email' name='fg-email'></input>
                </div>
                <div class="form-group">
                    <label for='fg-pass' class='text-white'>Enter New Password</label>
                    <input type='password' class="form-control " id='fg-pass' name='fg-pass'></input>
                </div>
                <div class="form-group">
                    <input type="submit" id="fg-submit" value="submit" class='btn btn-primary float-left' >
                </div>
                <div class="form-group">
                    <input type="button" id="fg-submit" value="Register" class='btn btn-secondary float-right ' onclick="window.location.href='signup-form.php'">
                </div>

            </form>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../js/index10.js"></script>
    <style>
        input:focus{
            outline: none;
        }
    </style>
</body>
</html>