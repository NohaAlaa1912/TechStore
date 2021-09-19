<?php


include("inc/header.php");?>
    

<div class="container py-5">
        <div class="row">

            <div class="col-md-6 offset-md-3">
                <h3 class="mb-3">Add Category</h3>
                <div class="card">
                    <div class="card-body p-5">
                        
                    <?php include(APATH . "inc/errors.php"); ?>

                        <form method="POST" action="handlers/add-category.php">
                            <div class="form-group">
                              <label>Name</label>
                              <input type="text" name="name" class="form-control">
                            </div>
                            <div class="text-center mt-5">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                <a class="btn btn-dark" href="<?= AURL ;?>categories.php">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

<?php include("inc/footer.php");?>
  