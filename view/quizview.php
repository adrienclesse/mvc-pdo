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

</div>
    <div class="container justify-content-center my-5 py-5">
            <div class="row justify-content-center">
                <div class="col-sm-6 bg-light-purple shadow-lg p-4 rounded text-light-text d-flex flex-column justify-content-center text-center">
                <h3 class="p-3">Answer the questions and track your progress!</h3>
                <form method="get" action="score.php">
                    <?php
                        foreach($questions as $question) :?>
                        <?php $i += 1; ?>
                    <div class="container d-flex justify-content-center">
                        <div id="question<?= $i ?>">
                            <h5 class="p-2"><?= $question['question'] ?></h5>
                            <?php
                            $options = array($question['right_answer'], $question['wrong1'], $question['wrong2']);
                            shuffle($options);
                            foreach($options as $option):
                                ?>
                                <input type="radio" onchange="toggleQuestions(<?= $i ?>)" name="<?= $question['id']?>" id="<?= $option ?>" value="<?= $option ?>"  class="btn-check">
                                <label for="<?= $option ?>" class="btn btn-gold shadow m-2"><?= $option?></label>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <div id="enter" class="container justify-content-center">
                        <h5>Enter your anwers</h5>
                        <button class="btn btn-gold shadow align-content-center" name="enter" type="submit">Enter</button>
                    </div>

                </form>
            </div>
        </div>

    </div>



        <script src="includes/script/quizscript.js"></script>
<footer>
    &copy; BeCode <?php echo date('Y')?>
</footer>
</body>
</html>