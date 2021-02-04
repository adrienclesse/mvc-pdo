<?php require 'includes/header.php'?>
</div>
    <div class="container justify-content-center my-3 py-4 text-center">
        <h1 class="mb-5 text-purple-main">Hi, <b class="text-gold"><?php echo htmlspecialchars($_SESSION["username"]); ?></b>! Welcome to your personal space.</h1>
        <div class="row justify-content-center mt-3">
            <div class="col-sm-6 bg-light-purple shadow-lg p-4 rounded text-light-text d-flex flex-column justify-content-center text-center">
                <p>Time to learn Here you can take a test to evaluate your level by clicking the button or meet people to learn your language with.</p>
                <div class="container d-flex justify-content-center">
                    <a href="view/quiz.php" class="btn btn-gold mx-2">Take a level evaluation</a>
                    <a href="index.php?page=meetpeople" class="btn btn-gold mx-2">Meet other learners</a>
                </div>
                <div class="container d-flex justify-content-center my-5">
                    <a href="index.php?page=reset-password" class="btn btn-purple-main mx-2">Reset Your Password</a>
                    <a href="index.php?page=logout" class="btn btn-outline-purple-main mx-2">Sign Out of Your Account</a>
                </div>

                </div>

            </div>
        </div>
    </div>

<?php require 'includes/footer.php'?>