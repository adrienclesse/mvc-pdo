<?php require 'includes/header.php'?>
<<<<<<< HEAD
        <div class="page-header">
            <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome on your personal space.</h1>
            <p>Here you can take a test to evaluate your level by clicking the button or meet people to learn your language with.</p>
        </div>
        <p>
            <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
            <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
        </p>

=======
<div class="page-header my-auto">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome on your personal space.</h1>
        <p>Here you can take a test to evaluate your level by clicking the button or meet people to learn your language with.</p>
        <a href="reset-password.php" class="btn btn-info">Take a level evaluation</a>
        <a href="logout.php" class="btn btn-success">Meet other learners</a>
    
    <br><br>
    <p>
        <a href="index.php?page=reset-password" class="btn btn-warning">Reset Your Password</a>
        <a href="index.php?page=logout" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
    </div>
>>>>>>> dd3daeff6bf4e06bf7705b90d77959aa8bb0aede
<?php require 'includes/footer.php'?>