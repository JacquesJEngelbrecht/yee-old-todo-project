<?php 
    include_once('validate.php'); 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Todo</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
    </head>
    <body>
    <?php $page = 'home'; ?>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($page == 'home') ? 'active':''; ?>" href="">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($page == 'todo1') ? 'active':''; ?>" href="">Todo1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($page == 'todo2') ? 'active':''; ?>" href="">Todo2</a>
                </li>
                </ul>
            </div>
            <div class="float-left">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#registerModal">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                </ul>
            </div>
        </nav>
        <h1>Welcome to To-Do List Creator</h1>
        <!-- Register/Login Form -->
        <div class="modal fade registerModal" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Register New User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" method="POST" id="register-form">
                        <div class="form-group">
                        <div class="form-group">
                            <label>Username</label>
                            <input id="username" type="text" name="username" class="form-control">
                            <span class="username_error" id="username_error">*</span>
                        </div>
                            <label>Email</label>
                            <input id="email" type="email" name="email" class="form-control">
                            <span class="email_error" id="email_error">*</span>
                            <span class="email_valid_error" id="email_valid_error">*</span>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input id="password" type="text" name="password" class="form-control">
                            <span class="password_error" id="password_error">*</span>
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input id="confirm-password" type="text" name="confirm-password" class="form-control">
                            <span class="confirn_password_error" id="confirn_password_error">*</span>
                            <span class="password_match_error" id="password_match_error"></span>
                        </div>
                        <div class="form-group remember">
                            <label>Remember Me</label>
                            <input type="checkbox" name="remember" class="form-control" value="1">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" name="registerBtn" class="btn btn-primary">Register</button>
                        </div>
                    </form>    
                </div>
            </div>
        </div>
    </body>
</html>
<script type="text/javascript">
    $(document).ready(function() {
        $("form").submit(function(event) {
            // event.preventDefault();
            var username = $("#username").val();
            var email = $("#email").val();
            var password = $("#password").val();
            var confirm_password = $("#confirm-password").val();
                $("#username_error").load("validate.php", {
                    username: username
                    });
                //});
            
                var error_count = "<?php echo $error_count; ?>";
                var email_error = "<?php echo $email_error; ?>";
                var email_valid_error = "<?php echo $email_valid_error; ?>";
                var password_error = "<?php echo $password_error; ?>";
                var confirn_password_error = "<?php echo $confirm_password_error; ?>";
                var password_match_error = "<?php echo $password_match_error; ?>";
                var username_error = "<?php echo $username_error; ?>";

                if(error_count > 0) {
                    document.getElementById("username_error").innerHTML = username_error;
                    document.getElementById("email_error").innerHTML = email_error;
                    document.getElementById("email_valid_error").innerHTML = email_valid_error;
                    document.getElementById("password_error").innerHTML = password_error;
                    document.getElementById("confirn_password_error").innerHTML = confirn_password_error;
                    document.getElementById("password_match_error").innerHTML = password_match_error;
                }
            });    
                email_error = '';
                email_valid_error = '';
                password_error = '';
                confirn_password_error = '';
                password_match_error = '';
                username_error = '';
        //});
    });    
        </script>