<?php require 'includes/header.php'?>
</div>

    <div class="container justify-content-center pt-2 mt-5">
        <div class="row justify-content-center">
            <div class="col-sm-4 bg-light-purple shadow-lg p-4 rounded text-light-text">
                <h2>Sign Up</h2>
                <p>Please fill this form to create an account.</p>
                <form action="" method="post" class="row">
                    <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                        <label class="m-2">Username</label>
                        <input type="text" name="username" class="form-control m-2" value="<?php echo $username; ?>">
                        <span class="help-block"><?php echo $username_err; ?></span>
                    </div>
                    <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                        <label class="m-2">Password</label>
                        <input type="password" name="password" class="form-control m-2" value="<?php echo $password; ?>">
                        <span class="help-block m-2"><?php echo $password_err; ?></span>
                    </div>
                    <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                        <label class="m-2">Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control m-2" value="<?php echo $confirm_password; ?>">
                        <span class="help-block"><?php echo $confirm_password_err; ?></span>
                    </div>
                    <div class="form-group <?php echo (!empty($email)) ? 'has-error' : ''; ?>">
                        <label class="m-2">Email</label>
                        <input type="text" name="email" class="form-control m-2" value="<?php echo $email; ?>">
                        <span class="help-block"><?php echo $email_err; ?></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-gold m-2 shadow" value="Submit">
                        <input type="reset" class="btn btn-gold m-2 shadow" value="Reset">
                    </div>
                    <p>Already have an account? <a href="index.php?page=login">Login here</a>.</p>
                </form>
            </div>
        </div>
    </div>
    <?php require 'includes/footer.php'?>