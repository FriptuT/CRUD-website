<!DOCTYPE html>
<html lang="en">

<head>
    <title>Echipa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/echipa.css">

    <style>
        <?php include '../css/echipa.css'; ?>
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

                <li class="nav-item active">
                    <a class="nav-link" href="echipa.php">Echipa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="repertoriu.php">Repertoriu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="program.php">Program</a>
                </li>

            </ul>

            <span class="navbar-text">
                <li class="nav-item active" style="list-style:none;">
                    <a class="nav-link" href="../login/login.php">Logout <span class="sr-only">(current)</span></a>
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


    <?php
    $id = $_GET['ID'];
    include "../cud/db_conn.php";
    $Rdata = mysqli_query($conn, "select * from membrii where id = $id");
    $data = mysqli_fetch_array($Rdata);
    ?>


    <!-- begin gestionarea membrilor -->
    <h3>EDITARE</h3>

    <form action="echipaupdate1.php" method="POST">
        <div class="input-group flex-nowrap">
            <input type="text" value="<?php echo htmlspecialchars($data['list']) ?>" name="list" class="form-control" placeholder="Editeaza" aria-label="Editeaza" aria-describedby="addon-wrapping">
            <button class="btn btn-primary">EDITEAZA</button>
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">

        </div>
    </form>

</body>

</html>






<!-- include "../cud/db_conn.php";
$id = $_GET['ID'];
$query = "UPDATE `membrii` SET `id`='[value-1]',`list`='[value-2]' WHERE 1";
mysqli_query($conn, $query); -->