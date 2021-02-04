<?php require 'includes/header.php'?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
    <section class="d-flex justify-content-center mx-5">
        <div class="container m-5 p-5 justify-content-center text-light-text">
            <h3 class="my-2">Jiōrnon!</h3>
            <h5>That's welcome in <span class="text-gold">Valyrian</span>!</h5>
            <p class="my-4"> Want to learn this awesome fantasy language?<br>
                Sign up, find a buddy and get on learning
            </p>
            <button class="btn btn-gold mx-2 shadow" onclick="window.location.href='index.php?page=register';">Sign up</button>
            <button class="btn btn-outline-gold mx-2 shadow" onclick="window.location.href='index.php?page=login';">Log in</button>

        </div>

    </section>

<?php require 'includes/svg_end.php'?>
<?php require 'includes/footer.php'?>