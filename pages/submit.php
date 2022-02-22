<?php include "pages/includes/header.php"?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Submit Information</h3>
                    </div>
                    <div class="card-body">
                        <?php if (isset($result)) { ?>
                            <h2 class="text-success">Registration Successfully</h2>
                        <?php } elseif(!isset($result['name'])) { ?>
                        <h2 class="text-danger">Blank Data</h2>
                        <?php } ?>

                        <form action="action.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control" value="<?php echo $result['name'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Email</label>
                                <div class="col-md-8">
                                    <input type="email" name="email" class="form-control" value="<?php echo $result['email'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Password</label>
                                <div class="col-md-8">
                                    <input type="number" name="password" class="form-control" value="<?php echo $result['password'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Phone Number</label>
                                <div class="col-md-8">
                                    <input type="number" name="phone" class="form-control" value="<?php echo $result['phone'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                    <input type="submit" name="btn" class="btn btn-outline-success btn-block" value="Submit info">
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