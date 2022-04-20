<?php 
    require('Session.php');
    require('Database.class.php');
    require('User.class.php');
    require('Contact.class.php');

    /*--time of lest login--*/
    $date=date('Y-m-d H:i:s');
    $_SESSION['Date_login'] = $date;
    
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
                        <a href="contact.php" class="btn" id="btn_Contact">Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="btn" onclick="logout();" id="btn_Logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!------Header------>
    <header class="my-5">
        <section>
            <h3 class="fw-bold fst-italic" id="title_contact_page">Welcome <span id="span_user" class="badge d-inline" style="background-color: #FF8C32;"><?php echo $_SESSION['username'];?> !</span></h3>
            <hr class="my-5">
        </section>
        <section id="info_profil">
            <div class="container w-50 pb-2">
                <div class="d-flex w-100 d-flex justify-content-center align-item-center shadow pb-4" id="content">
                    <div class="form w-75 pt-3">
                        <!-----Form Info User Profil------->
                        <h3 class=" border-start border-3 ps-3 mb-5 rounded-1 fw-bold" id="H2_page_login">Info Profile
                        </h3>
                        <div class="mx-auto">
                            <p>
                                Name :<span class="ms-3 text-wrap"><?php echo $_SESSION['username'];?></span>
                            </p>
                            <p>
                                Signup Date :<span class="ms-3 text-wrap"><?php echo $_SESSION['data_insert'];?></span>
                            </p>
                            <p>
                                Last Login :<span class="ms-3 text-wrap"><?php echo $date;?></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>

    <script src="assets/js/script.js"></script>
    <script src="assets/js/sweetalert2.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>