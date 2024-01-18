<?php

if (isset($_POST["submit"])) {
    require_once("database.php");
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form test</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <section class="chapsoko__registration d-flex justify-content-center">
        <div class="card col-md-5 mt-5">
            <div class="card-header">
                <h3 class="text-center text-success my-3">Customer Registration</h3>
            </div>
            <div class="card-body p-4">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
                    <div class="row my-3">
                        <div class="form-group col-md-6">
                            <label for="firstname">Firstname:</label>
                            <input type="text" name="firstname" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Lastname:</label>
                            <input type="text" name="lastname" class="form-control">
                        </div>


                    </div>
                    <div class="form-group my-3">
                        <label for="email">Email:</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group my-3">
                        <label for="phone-number">Phone number:</label>
                        <input type="text" name="phone-number" class="form-control">
                    </div>
                    <div class="form-group my-3">
                        <label for="username">User name:</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group my-3">
                        <label for="password">Password:</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group my-3">
                        <input type="submit" name="submit" value="Register" class="btn btn-success btn-lg w-100">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>