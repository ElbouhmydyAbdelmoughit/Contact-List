<?php 
    require('Database.class.php');
    require('User.class.php');
    session_start();
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
                        <a href="Add_contact.php" class="btn" id="btn_Contact">Contact</a>
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
            <h2 id="title_contact_page"></span></h2>
            <hr style="border: black;">
        </section>
    </header>

    <script src="assets/js/script.js"></script>
    <script src="assets/js/sweetalert2.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>