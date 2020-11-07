<?php include('boot_strap.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <div class="container my-5">
        <div class="row">
            <div class="col-lg-6">
                <h1 align="center">Edit Post Here</h1>


                <?php foreach ($con as $content) : ?>

                    <form action="edit_action" method="post">

                        <label for="inputEmail3" class="col-sm-3 col-form-label">Title :</label>
                        <div>
                            <input type="text" class="form-control" id="inputEmail3" name="title" value="<?php echo $content->title; ?>" required="required">
                        </div>


                        <label for="inputPassword3" class="col-sm-3 col-form-label">Description :</label>
                        <div>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <input type="hidden" value="<?php echo $content->id; ?>" name="id">

                        <button class="btn btn-success my-3">Upload</button>

                    </form>

                <?php endforeach; ?>


            </div>
        </div>
    </div>

</body>

</html>