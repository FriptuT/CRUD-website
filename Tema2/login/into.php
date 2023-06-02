<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/into.css">
    <style>
        <?php include '../css/into.css'; ?>
    </style>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Teatru</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link" href="../administrare/echipa.php">Echipa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../administrare/repertoriu.php">Repertoriu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../administrare/program.php">Program</a>
                </li>
            </ul>

            <span class="navbar-text">
                <li class="nav-item active" style="list-style:none;">
                    <a class="nav-link" href="login.php">Logout <span class="sr-only">(current)</span></a>
                </li>
            </span>

            <?php
            session_start();
            if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
            }
            ?>
            <span class="navbar-text">
                <li class="nav-item active" style="list-style:none;">
                    <a class="nav-link"><?php echo $_SESSION['name'];  ?> <span class="sr-only">(current)</span></a>
                </li>
            </span>



        </div>
    </nav>

    <div class="center-div">
        
        
        <!-- // if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
        // } -->

        <h1>Welcome, <?php echo $_SESSION['user_name'];  ?> !</h1>


        <?php
        // session_start();
        include "../cud/db_conn.php";


        if (isset($_POST['uname']) && isset($_POST['password'])) {

            function validate($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            $uname = validate($_POST['uname']);
            $pass = validate($_POST['password']);

            if (empty($uname)) {
                header("Location: login.php?error=User Name is required");
                exit();
            } else if (empty($pass)) {
                header("Location: login.php?error=Password is required");
                exit();
            } else {
                $sql = "SELECT * FROM users WHERE user_name = '$uname' AND password = '$pass' ";

                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) === 1) {
                    $row = mysqli_fetch_assoc($result);

                    if ($row['user_name'] === $uname && $row['password'] === $pass) {
                        $_SESSION['user_name'] = $row['user_name'];
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['id'] = $row['id'];
                    } else {
                        header("Location: login.php?error=Incorect User Name or password");
                        exit();
                    }
                } else {
                    header("Location: login.php?error=Incorect User Name or password");
                    exit();
                }
            }
        } else {
            header("Location: login.php");
            exit();
        }
        ?>

    </div>


</body>

</html>