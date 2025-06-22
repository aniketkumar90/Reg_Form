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
                        <h2 class="text-center">Forget</h2>
                        <form action="login.php" method="post">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="btml">
                                <button type="submit" class="btn btn-primary">Submit</button>
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