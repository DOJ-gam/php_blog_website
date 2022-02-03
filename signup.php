<?php 
include('includes/header.php');

?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">

                    <div class="card-header">
                        <h4>Sign Up</h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="post">
                            <div class="form-group mb-3">
                                <label for="fname">First Name</label>
                                <input class="form-control" type="text" name="fname" id="fname" placeholder="Enter First Name">
                            </div>
                            <div class="form-group mb-3">
                                <label for="lname">Last Name</label>
                                <input class="form-control" type="text" name="lname" id="lname" placeholder="Enter Last Name">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input class="form-control" type="text" name="email" id="email" placeholder="Enter Email">
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" name="password" id="password" placeholder="Enter Password">
                            </div>
                            <div class="form-group mb-3">
                                <label for="confirm_password">Confirm Password</label>
                                <input class="form-control" type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Your Password">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php') ?>