<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <!-- Bootstrap core CSS-->
    <link href="css/styles.css" rel="stylesheet">
    <!-- animate CSS-->
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <!-- Icons CSS-->
    <link href="css/icons.css" rel="stylesheet" type="text/css">

</head>

<body>
<!-- Start wrapper-->
<div id="wrapper">
    <div class="card border-primary border-top-sm border-bottom-sm card-authentication1 mx-auto my-5 animated bounceIn">
        <div class="card-body">
            <div class="card-content p-2">
                <div class="card-title text-uppercase text-center py-3">Sign In</div>
                <form method="post" action="includes/login.inc.php">
                    <div class="form-group">
                        <div class="position-relative has-icon-right">
                            <input type="text" id="exampleInputUsername" class="form-control form-control-rounded" placeholder="Username" id="username" name="username">
                            <div class="form-control-position">
                            <i class="icon-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="position-relative has-icon-right">
                            <input type="password" id="exampleInputPassword" class="form-control form-control-rounded" placeholder="Password" id="password" name="password">
                            <div class="form-control-position">
                            <i class="icon-lock"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-row mr-0 ml-0">
                        <div class="form-group col-6">
                            <div class="icheck-primary">
                                <input type="checkbox" id="user-checkbox" checked="" />
                                <label for="user-checkbox">Remember me</label>
                            </div>
                        </div>
                        <div class="form-group col-6 text-right">
                            <a href="authentication-reset-password.html">Reset Password</a>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary shadow-primary btn-round btn-block waves-effect waves-light">Sign In</button>
                    <div class="text-center pt-3">
                        <p>or Sign in with</p>
                        <a href="javascript:void()" class="btn-social btn-social-circle btn-facebook waves-effect waves-light m-1"><i class="fa fa-facebook"></i></a>
                        <a href="javascript:void()" class="btn-social btn-social-circle btn-google-plus waves-effect waves-light m-1"><i class="fa fa-google-plus"></i></a>
                        <a href="javascript:void()" class="btn-social btn-social-circle btn-twitter waves-effect waves-light m-1"><i class="fa fa-twitter"></i></a>
                        <hr>
                        <p class="text-muted">Do not have an account? <a href="signup.php"> Sign Up here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
    </div><!--wrapper-->


</body>

</html>
