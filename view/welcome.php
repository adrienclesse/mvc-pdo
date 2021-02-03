<?php require 'includes/header.php'?>
<div class="page-header my-auto">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome on your personal space.</h1>
        <p>Here you can take a test to evaluate your level by clicking the button or meet people to learn your language with.</p>
        <a href="reset-password.php" class="btn btn-info">Take a level evaluation</a>
        <a href="logout.php" class="btn btn-success">Meet other learners</a>
    
    <br><br>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
    </div>
<?php require 'includes/footer.php'?>