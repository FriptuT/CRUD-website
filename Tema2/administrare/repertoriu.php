<!DOCTYPE html>
<html lang="en">

<head>
    <title>Repertoriu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/repertoriu.css">

    <style>
        <?php include '../css/repertoriu.css'; ?>
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
                    <a class="nav-link" href="echipa.php">Echipa</a>
                </li>
                <li class="nav-item active">
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

    <!-- begin gestionarea repertoriului -->
    <h3>Gestionarea pieselor</h3>

    <form action="repertoriuinsert.php" method="POST">
        <div class="input-group flex-nowrap">
            <input type="text" name="LIST" class="form-control" placeholder="Introduceti piesa" aria-label="Introduceti piesa" aria-describedby="addon-wrapping">
            <button  class="btn btn-primary">ADAUGA</button>

        </div>
    </form>

    <!-- manipulam datele din bd -->
    <?php
        include "../cud/db_conn.php";
        $rawData = mysqli_query($conn, "select * from repertoriu");
    ?>

    <div class="container">
        <div class="col-8 bg-white m-auto mt-3">

            <table class="table">
                <tbody>
                <?php
                    while($row = mysqli_fetch_array($rawData)){

                ?>
                    <tr>
                        <!-- <td><?php echo $row['ID'] ?></td> -->
                        <td><?php echo htmlspecialchars($row['LIST']) ?></td>
                        <td style="width: 10%;"><a href="repertoriudelete.php? ID=<?php echo $row['ID'] ?>" class="btn btn-danger">STERGE</a></td>
                        <td style="width: 10%;"><a href="repertoriuupdate.php? ID=<?php echo $row['ID'] ?>" class="btn btn-success">EDITEAZA</a></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>



</body>

</html>