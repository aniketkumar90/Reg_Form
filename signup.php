<?php include_once 'header.php'; ?>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="imgi_back">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <div class="login_form">
                        <h2 class="text-center">Sign up</h2>
                        <form action="db/sin-up.php" method="post">
                             <div class="mb-3">
                                <label for="Name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="sName" name="sName" >
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="semail" name="semail" >
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="spassword" name="spassword" >
                            </div>
                             <div class="mb-3">
                                <label for="password1" class="form-label">Re Enter Password</label>
                                <input type="password" class="form-control" id="spassword1" name="spassword1" >
                            </div>
                            <div class="btml">

                                <button type="submit" class="btn btn-primary">Sign up</button>
                                <button type="submit" class="btn btn-primary"><a href="login.php">Login</a></button>

                            </div>

                        </form>
                    </div>
                    <!-- <div class="col-md-6">
                        
                    </div> -->
                  

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