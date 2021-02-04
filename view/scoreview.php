<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="includes/styling/css/style.css" rel="stylesheet" type="text/css">
    <title>Becode - Boiler plate MVC</title>
</head>
<body>
<div class="wave-container-purple">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark m-2 bg-purple-main">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo01">
                <a class="navbar-brand mx-3 px-3" href="index.php?page=home">Fantalang</a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 mx-3 px-3">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php?page=home">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php?page=info">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=login">Log in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="index.php?page=register">Sign up</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</div>
<div>
    <h4>Your score this time is <?= $score ?></h4>
</div>
<footer>
    &copy; BeCode <?php echo date('Y')?>
</footer>
</body>
</html>