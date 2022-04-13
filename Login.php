<?php
// require ('Database.class.php');
  require ('User.class.php');
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $insert->Insert($_POST['submit'],$_POST['username'],$_POST['password'],$_POST['passwordverify']);
    if (isset($_POST['submit'])) {
        $name= $_POST['username'];
        $password= $_POST['password'];
        $requete=" SELECT * FROM user WHERE password_user='$password' && username ='$name'";
        $db = D_base::Connect();
        $statement= $db->query($requete);
        $result= $statement->fetchAll();
        
        // $count= $statement->rowCount();
        // if ($count==1) {
        //     header('location:contact.php');
        // }
    }

  }
  
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
            <button 
                    class="navbar-toggler" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#navmenu"
                    aria-controls="navmenu" 
                    aria-expanded="false" 
                    aria-label="Toggle navigation" 
                    style="background-color: #FF8303;">
                    <!-------icon menu--->
                <span class="navbar-toggler-icon"></span>
            </button>
            <!----List navbar--->
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <!----navb Button Login-->
                    <li class="nav-item">
                        <a href="index.php" class="nav-link col-3" id="Home_text">Home</a>
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
                    <form id="form_login" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" name="checkbox" class="form-check-input" id="CheckBox">
                            <label class="form-check-label" for="CheckBox">Check me out</label>
                        </div>
                        <button type="submit" name="submit" class="btn mb-3" id="button_login_page_login">Login</button>
                        <div class="d-flex justify-content-end">
                            <label class="fst-italic">
                                Create account
                                <!----Button Modal---->
                                <a href="#" 
                                    type="button" 
                                    class="btn text-primary pt-0 ps-0" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#exampleModal">Sign up
                                </a>
                            </label>
                                <!---Call signup page--->
                            <?php 
                                include "signup.php" 
                            ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>