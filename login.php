<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Todo</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                    <a class="nav-link" href="#">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                </ul>
            </div>
        </nav>
    </body>
</html>