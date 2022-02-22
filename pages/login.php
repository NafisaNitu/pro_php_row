<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
<!--    <link rel="stylesheet" href="assets/css/style.css">-->
    <style>
        .mt-custom{
            margin-top: 120px;
        }
    </style>
</head>
<body>

<section class="mt-custom">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Login Form</h3>
                    </div>
                    <div class="card-body">

                        <?php if (isset($message)){ ?>
                            <h6 class="text-success text-center"><?php echo $message ?></h6>
                        <?php } ?>
                        <form action="action.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Email</label>
                                <div class="col-md-8">
                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Password</label>
                                <div class="col-md-8">
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                    <input type="submit" name="loginBtn" class="btn btn-outline-success btn-block" value="Login">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "pages/includes/footer.php"?>

