<!DOCTYPE html>
<?php

if (!empty($_GET['susername'])) {
    $susername = 'email sudah terdaftar';
}
if (isset($_COOKIE['signup'])) {
    
    $data = unserialize($_COOKIE['signup'], ["allowed_classes" => false]);
    setcookie('signup','',-3);
    extract($data);
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/darkly/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="css/global.css" rel=stylesheet>
    <link href="css/signup.css" rel=stylesheet>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Sign Up</title>
</head>

<body>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">



    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" role="form" method="post" action="signup_process.php" enctype="multipart/form-data">
                <header class="card-header">
                    <a href="login.php" class="float-right btn btn-outline-primary mt-1">Log in</a>
                    <h4 class="card-title mt-2">Sign up</h4>
                </header>
                <article class="card-body">
                    <form>
                        <div class="form-row">
                            <div class="col form-group">
                                <label>Name </label>
                                <input name="nama" type="text" class="form-control" placeholder="" id="nama"
                                value="<?php if (isset($nama)) echo $nama ?>" 
                                <?php if(!isset($_GET['susername'])) echo 'autofocus' ?> required>
                            </div> <!-- form-group end.// -->
                        </div> <!-- form-row end.// -->

                        <div class="form-group">
                            <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="m"
                                <?php if (isset($gender)) {if ($gender == 'm') echo 'checked';} ?> required>
                                <span class="form-check-label"> Male </span>
                            </label>
                            <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="f"
                                <?php if (isset($gender)) {if ($gender == 'f') echo 'checked';} ?> required>
                                <span class="form-check-label">Female</span>
                            </label>
                        </div> <!-- form-group end.// -->

                        <div class="form-group">
                            <label>Create username</label>
                            <input class="form-control" type="text" id="username" name="username"
                            value="<?php if (isset($username)) echo $username ?>"
                            <?php if (isset($_GET['susername'])) echo 'autofocus' ?> required>
                        </div> <!-- form-group end.// -->

                        <div class="form-group">
                            <label>Create password</label>
                            <input class="form-control" type="password" id="password" name="password"
                            value="<?php if (isset($password)) echo $password ?>" required>
                        </div> <!-- form-group end.// -->

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block"> Register </button>
                        </div> <!-- form-group// -->
                        <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>
                    </form>
                </article> <!-- card-body end .// -->
                <div class="border-top card-body text-center">Have an account? <a href="login.php" class="login-link">Log In</a></div>
            </div> <!-- card.// -->
        </div> <!-- col.//-->

    </div> <!-- row.//-->


    </div>
    <!--container end.//-->

</body>

</html>
