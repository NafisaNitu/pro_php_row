<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<section class="">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <p class="text-muted fs-13" style="margin-top: 30%">সর্বশেষ সংবাদ | মতামত</p>
            </div>
            <div class="col-md-4">
                <a href=""><img src="assets/img/3.jpg" alt="" style="height: 150px"></a>
            </div>
            <div class="col-md-4">
                <a class="btn btn-outline-success" href="action.php?pages=registration" style="margin-top: 20%;float: right;margin-left: 5px">Registration</a>
                <a class="btn btn-warning" href="action.php?pages=login" style="margin-top: 20%;float: right">Login</a>
            </div>

        </div>
    </div>
</section>

<nav class="navbar navbar-expand-sm border">
    <div class="container">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a href="action.php?pages=news" class="nav-link text-color">সর্বশেষ</a></li>

            <?php foreach ($titles as $title){ ?>
                <li class="nav-item"><a href="action.php?pages=title-news&&title_id=<?php echo $title['id'] ?>" class="nav-link text-color"><?php echo $title['name']; ?></a></li>
            <?php } ?>
        </ul>

    </div>
</nav>