<?php require 'includes/header.php'?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
    <section id="homesection" class="d-flex justify-content-center ms-5 me-0 pe-0">
        <div class="container m-3 p-4 align-content-center text-light-text d-flex justify-content-center">
            <div class="row justify-content-center text-end pe-0 me-0">
                <h3 class="my-1">Jiōrnon!</h3>
                <h5 class="my-0">That's welcome in <span class="text-gold">Valyrian</span>!</h5>
                <p class="my-1"> Want to learn this awesome fantasy language?<br>
                    Sign up, find a buddy and get on learning
                </p>
                <div class="container">
                    <div class="container d-flex justify-content-end align-items-start px-0">
                        <button class="btn btn-gold mx-2 shadow" onclick="window.location.href='index.php?page=register';">Sign up</button>
                        <button class="btn btn-outline-gold mx-2 shadow" onclick="window.location.href='index.php?page=login';">Log in</button>
                    </div>
                </div>

            </div>
            <div class="container mx-0">
                <img src="view/includes/img/dragon.png" alt="dragon" width="300px" height="338px">
            </div>
        </div>

    </section>

<?php require 'includes/svg_end.php'?>
<?php require 'includes/footer.php'?>