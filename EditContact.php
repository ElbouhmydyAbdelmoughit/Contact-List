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
    <title>Edit Contact</title>
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
                <ul class="navbar-nav ms-auto">
                    <!----navb Button Login-->
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link col-3" id="Home_text">Back</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!------Header------>
    <header id="header_login_page">
        <div class="container w-50 pb-2">
            <div class="d-flex w-100 d-flex justify-content-center align-item-center shadow pb-4" id="content">
                <div class="form w-75 pt-3">
                    <!-----Form login------->
                    <h2 class=" border-start border-3 ps-3 mb-5 rounded-1 fw-bold" id="H2_page_login">Login</h2>
                    <form id="form_login" method="POST" action="contact.php" onsubmit="return ValidationContact()">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" value="<?php echo $row['name'];?>" name="name_edit" id="name" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email_edit" id="email"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address_edit" id="address"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" name="phone_edit" class="form-control" id="phone"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="">
                            <input type="submit" name="submit_edit" class="btn form-control" id="btn_create" value="Save Edit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <script src="assets/js/script.js"></script>
    <script src="assets/js/sweetalert2.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
    require('Database.class.php');
    require('Contact.class.php');

    if (isset($_POST['submit_edit'])) {
        $contact->select('idupdate');
        
    }
?>