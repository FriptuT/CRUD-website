<!DOCTYPE html>
<html lang="en">

<head>
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/login.css">

</head>

<body>
    <!-- 
    begin navbar
 -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Teatru</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../html/home.php">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>

            <!-- <span class="navbar-text">
                <li class="nav-item active" style="list-style:none;">
                    <a class="nav-link" href="login.php">Login <span class="sr-only">(current)</span></a>
                </li>
            </span> -->

        </div>
    </nav>


    <h2>LOGIN</h2>

    <style><?php include '../css/login.css'; ?></style>
    <!-- 
    Begin form
 -->
    <form action="into.php" method="post">
        <?php if (isset($_GET['error'])) { ?>
            <p class="eroare"> <?php echo $_GET['error']; ?> </p>
        <?php } ?>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-7">
                <input type="text" name="uname" class="form-control" id="inputEmail3" placeholder="User Name">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-7">
                <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-7">
                <button  class="btn btn-primary">Login</button>
            </div>
        </div>

    </form>

    <!-- 
    END form
 -->


</body>

</html>