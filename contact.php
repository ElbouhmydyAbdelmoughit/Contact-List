<?php 
    require('Session.php');
    require('Database.class.php');
    require('User.class.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/Normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2">
    <title>Contact List</title>
</head>

<body>
    <!---Create navbar--->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="NAVBAR_HOME_PAGE">
        <div class="container">
            <!---Logo navbar-->
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/Contact_logo_copy-removebg-preview.png" id="Logo_page" alt="image logo">
            </a>
            <!----Button menu--->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu"
                aria-controls="navmenu" aria-expanded="false" aria-label="Toggle navigation"
                style="background-color: #FF8303;">
                <!-------icon menu--->
                <span class="navbar-toggler-icon"></span>
            </button>
            <!----List navbar--->
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto" id="navbar_contact_page">
                    <!----navb Button Login-->
                    <li class="nav-item">
                        <a href="#" class="btn" id="btn_Contact"><?php echo $_SESSION['username'];?></a>
                    </li>
                    <li class="nav-item">
                        <a href="Add_contact.php" type="button" class="btn" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" id="btn_Contact">Add Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="btn" id="btn_Logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!------Header------>
    <header class="my-5">
        <section>
            <div class="container">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                            <th scope="col">Operator</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <?php include('Add_contact.php');?>
    </header>

    <script src="assets/js/script.js"></script>
    <script src="assets/js/sweetalert2.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>