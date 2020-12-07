<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trinchelp</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2 class="text-white text-center mb-4">Benvenuto !</h2>
        <div class="card col-lg-5 col-md-6 col-12 mx-auto px-4 py-5">
            <p class="text-center"><small>Accedi con</small></p>
            <form action="./server.php" method="post" id="login_form" onsubmit="return false;">
            <div class="container text-center">
                <a href="">
                <i class="fab fa-google"></i>
                </a>
                <a href="">
                <i class="fab fa-facebook"></i>
                </a>
            </div>
            <p class="text-center"><small>oppure</small></p>
                <div class="form-group d-flex px-3 py-1 m-0">
                    <i class="fas fa-user my-auto"></i>
                    <input type="text"  autocomplete="off" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Username">
                </div>
                <p><small id="user_error_msg" class="text-danger"></small></p>
                <div class="form-group d-flex px-3 py-1 m-0">
                    <i class="fas fa-unlock-alt my-auto"></i>
                    <input type="password" autocomplete="off" name="password" class="form-control" id="password" placeholder="Password">
                </div>
                <p><small id="password_error_msg" class="text-danger"></small></p>
                <div class="form-group d-flex px-3 py-1 m-0">
                    <i class="fas fa-unlock-alt my-auto"></i>
                    <input type="password" autocomplete="off" name="repassword" class="form-control" id="repassword" placeholder="Ripeti la Password">
                </div>
                <p><small id="re_password_error_msg" class="text-danger"></small></p>
                <div class="text-center pt-4">
                    <button type="submit" id="submit_btn" class="btn btn-primary col-4">Registrati</button>
                </div>

                <p class="text-center my-3"><small>Hai già un account? <a href="index.php">Accedi</a></small></p>
              </form>
        </div>
    </div>
    <script>
        $("#submit_btn").click(function(){
            username = $("#username").val();
            password = $("#password").val();
            repassword = $("#repassword").val();
            $("#user_error_msg").html("");
            $("#password_error_msg").html("");
            if(username == ""){
                $("#user_error_msg").html("lo username non può essere vuoto");
                $("#username").focus();
            } else if(password == ""){
                $("#password_error_msg").html("la password non può essere vuota");
                $("#password").focus();
            } else if (password !== repassword) {
                $("#re_password_error_msg").html("le password non combaciano");
                $("#repassword").focus();
            } else {
                var form = $('#login_form');
                $.ajax({
                    type: form.attr('method'),
                    url: form.attr('action'),
                    data: form.serialize(),
                    dataType: 'script'
                });
            }
        });
    </script>
</body>
</html>