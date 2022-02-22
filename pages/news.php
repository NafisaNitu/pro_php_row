<?php include "pages/includes/header.php"?>



<section class="py-5">
    <div class="container border-bottom">
        <div class="row">

            <?php foreach ($getNews as $news){ ?>

            <div class="col-md-6 border-right">
                <div class="card border-0">
                    <img src="<?php echo $news['image'] ?>" alt="" class="card-img-top card-big-img-height" />
                    <div class="card-body">
                        <h2 class="font-weight-bold" style="font-size: 20px"><span class="color-red"><?php echo $news['name'] ?></h2>
                        <p class="card-text" style="font-size: 16px"><?php echo $news['description'] ?></p>
                        <a href="" class="btn btn-warning float-right">View</a>
                    </div>
                </div>
            </div>





            <div class="col-md-3">
                <div class="card border-0 b-b-1 h-275">
                    <img src="<?php echo $news['image'] ?>" alt="" class="card-img-top" />
                    <div class="card-body">
                        <h2 class="fs-16 font-weight-bold mt-2"><?php echo $news['name'] ?></h2>
                    </div>
                </div>
                <div class="card border-0 mt-2 h-275">
                    <img src="<?php echo $news['image'] ?>" alt="" class="card-img-top">
                    <div class="card-body">
                        <h2 class="fs-16 font-weight-bold mt-2"><?php echo $news['name'] ?></h2>
                    </div>
                </div>
            </div>

           <?php } ?>

        </div>
    </div>
</section>

<section class="py-3">
    <div class="container border-bottom">
        <div class="row">

            <?php foreach ($getNews as $news){ ?>
            <div class="col-md-3">
                <div>
                    <a href="" class="nav-link">
                        <div class="card border-0">
                            <img src="<?php echo $news['image'] ?>" alt="" class="card-img-top">
                            <div class="card-body">
                                <h2 class="fs-16 text-dark"><?php echo $news['name'] ?></h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <?php } ?>

        </div>
    </div>
</section>



<?php include "pages/includes/footer.php"?>
