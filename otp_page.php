<?php include_once 'header.php'; ?>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="imgi_back">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <div class="login_form">
                        <h2 class="text-center">OTO Validation</h2>
                        <form action="login.php" method="post">
                            <div class="mb-3">
                                <label for="password" class="form-label">Enter OTP</label>
                                <input type="number" class="form-control" id="password" name="" placeholder="XXXXXX" required>
                            </div>
                            <div class="btml">
                                <button type="submit" class="btn btn-primary">Verify</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="images/smoth_1.png" class="juice-bottle" alt="Juice Bottle">
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
<?php include_once 'footer.php'; ?>