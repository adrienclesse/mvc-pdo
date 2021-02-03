<?php require 'includes/header.php'?>
</div>
    <div class="container justify-content-center pt-2 mt-5">
        <div class="row justify-content-center">
            <div class="col-sm-4 bg-light-purple shadow-lg p-4 rounded text-light-text">
                <h2>Login</h2>
                <p>Please fill in your credentials to login.</p>
                <form action="" method="post">
                    <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                        <label class="m-2">Username</label>
                        <input type="text" name="username" class="form-control m-2" value="<?php echo $username; ?>">
                        <span class="help-block"><?php echo $username_err; ?></span>
                    </div>
                    <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                        <label class="m-2">Password</label>
                        <input type="password" name="password" class="form-control m-2">
                        <span class="help-block"><?php echo $password_err; ?></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-gold m-2 shadow" value="Login">
                    </div>
                    <p>Don't have an account? <a href="index.php?page=register">Sign up now</a>.</p>
                </form>
            </div>
        </div>
    </div>
    <?php require 'includes/footer.php'?>