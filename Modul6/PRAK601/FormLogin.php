<?php
require('Login.php');
session_start();
if (isset($_SESSION['nomor_member'])) :
    header("location:Index.php");
else :
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Form Login</title>
    </head>

    <body>
        <!-- <div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['error'] ?>
    </div> -->

        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card border-0 shadow rounded-3 my-5">
                        <a type="button" class="btn btn-close pull-right" href="Index.php" aria-label="Close"></a>
                        <div class="card-body p-3 p-sm-5">
                            <h5 class="card-title text-center mb-5 fw-light fs-4">Log In</h5>
                            <form action="" method="post">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="nomor_member" id="nomor_member" value='' placeholder="Nomor Member" required>
                                    <label for="floatingInput">Nomor Member</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" name="password" id="password" value='' placeholder="Password" required>
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" name="login" class="btn btn-primary btn-login text-uppercase fw-bold">Log In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        if (isset($_POST['login'])) {
            Login($_POST['nomor_member'], md5($_POST['password']));
        }
        ?>
    </body>

    </html>

<?php
endif;
?>