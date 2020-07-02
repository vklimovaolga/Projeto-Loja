<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Create Shop Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  </head>
  <body> 
    <h1>Create Shop</h1>
    <main class="wrapper"> 
        <form method="post" class="form" action="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]);?>" enctype="multipart/form-data">
            <?php 
                if(!empty($message)){
                    echo "<p>" .$message. "</p>";
                }
            ?>
            <div class="form-group">
                <label for="shop_name">Shop Name</label>
                <input type="text" class="form-control" name="shop_name" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description">
            </div>
            <div class="form-group">
                <label for="url">Url</label>
                <input type="text" class="form-control" name="url">
            </div>
            <div class="form-group">
                <label for="country">Country</label>
                <input type="text" class="form-control" name="country" required>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" name="city">
            </div>
            <div class="form-group">
                <label for="region">Region</label>
                <input type="text" class="form-control" name="region">
            </div>
            <div class="form-group">
                <label for="adress">Address</label>
                <input type="text" class="form-control" name="address">
            </div>
            <div class="form-group">
                <label for="zip_code">Zip Code</label>
                <input type="text" class="form-control" name="zip_code">
            </div>
            <div class="form-group">
                <label for="image">Picture</label>
                <input type="file" class="form-control" name="picture">
            </div>
            <div class="form-group">
                <button type="submit" name="send" class="btn btn-primary">Create</button>
                <a class="btn btn-light rounded-lg" href="<?php echo ROOT;?>" class="backbutton">Back</a>
            </div>
        </form>
    </main>
    <footer>
      <div class="footer">
      </div>
    </footer>
  </body>
</html>