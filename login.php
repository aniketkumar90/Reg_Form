<?php include_once 'header.php'; ?>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="imgi_back">
            <div class="row">
                <div class="col-md-2"></div>

                <!-- Login Form -->
                <div class="col-md-4">
                    <div class="login_form">
                        <h2 class="text-center">Login</h2>
                        <form action="db/log-in.php" method="post">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="lemail" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="lpassword" required>
                            </div>
                            <div class="forg">
                                <a href="forget.php">Forget Password</a>
                            </div>
                            <div class="btml">
                                <button type="submit" class="btn btn-primary">Login</button>
                                <button class="btn btn-primary"><a href="signup.php">Sign up</a></button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-6 smoooth">
                    <img src="images/smoth_1.png" class="juice-bottle" alt="Juice Bottle">

                </div>


            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
<?php include_once 'footer.php'; ?>