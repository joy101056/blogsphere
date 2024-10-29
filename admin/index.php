<?php
include("Class/function.php");
$obj = new adminBlog();

if (isset($_POST['admin_login'])) {
    $obj->admin_login($_POST);
}

session_start();

if (isset($_SESSION['adminID'])) {
    $id = $_SESSION['adminID'];
    header('location:dashboard.php');
    exit();
}
?>


<?php include_once('includes/head.php') ?>

<body class="bg-secondary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-bold my-4">Login</h3>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                                            <input class="form-control py-4 rounded-pill shadow-sm" name="admin_email" id="inputEmailAddress" type="email" placeholder="Enter email address" required />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputPassword">Password</label>
                                            <input class="form-control py-4 rounded-pill shadow-sm" name="admin_pass" id="inputPassword" type="password" placeholder="Enter password" required />
                                        </div>
                                        <!-- <div class="form-group d-flex justify-content-between align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" id="rememberPasswordCheck" type="checkbox" />
                                                <label class="form-check-label" for="rememberPasswordCheck">Remember password</label>
                                            </div>
                                            <a href="#" class="small text-muted">Forgot Password?</a>
                                        </div> -->
                                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button type="submit" name="admin_login" class="btn btn-primary rounded-pill px-4 shadow-sm w-100">Login</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Blogsphere 2024</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <?php include_once('includes/script.php') ?>
</body>

</html>