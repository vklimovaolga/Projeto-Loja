<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Create Shop</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    </head>
    <body>
        <div class="container centered p-3">
            <div class="row">
                <div class="col-sm">   
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]); ?>" class="form was-validated">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" placeholder="Enter username" name="username" id="uname" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" placeholder="Enter email" id="email" name="email" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password</label>
                            <input type="password" class="form-control" placeholder="Enter password" id="pwd" name ="password" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Enter password" id="cpwd" name="confirm_password" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="send" class="btn btn-primary">Submit</button>
                            <a class="btn btn-light rounded-lg" href="<?php echo ROOT;?>">Cancel</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>


    </body>
    <footer>
</html>