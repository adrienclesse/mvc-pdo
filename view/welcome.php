<?php require 'includes/header.php'?>
        <div class="page-header">
            <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome on your personal space.</h1>
            <p>Here you can take a test to evaluate your level by clicking the button or meet people to learn your language with.</p>
        </div>
        <p>
            <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
            <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
        </p>

<?php require 'includes/footer.php'?>