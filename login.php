<?php include_once 'header.php'; ?>

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="imgi_back">
            <div class="row">
                <div class="col-md-2"></div>

                <div class="col-md-4">
                    <div class="login_form">
                        <h2 class="text-center">Login</h2>
                        <form action="db/log-in.php" method="post">

                            <!-- Email Field -->
                            <div class="mb-3 db-flex justify-content:center">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="lemail" required>
                                <span id="emailErr" style="color:red;">
                                    <?php
                                    if (isset($_GET['emailErr'])) {
                                        echo htmlspecialchars($_GET['emailErr']);
                                    }
                                    ?>
                                </span>
                            </div>

                            <!-- Password Field -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="lpassword" required>
                                <span id="passErr" style="color:red;">
                                    <?php
                                    if (isset($_GET['passErr'])) {
                                        echo htmlspecialchars($_GET['passErr']);
                                    }
                                    ?>
                                </span>
                            </div>

                            <div class="forg">
                                <a href="forget.php">Forget Password</a>
                            </div>

                            <div class="btml">
                                <button type="submit" class="btn btn-primary">Login</button>
                                <button class="btn btn-primary"><a href="signup.php" style="color:white; text-decoration:none;">Sign up</a></button>
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
