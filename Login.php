<?php
  require_once('Database.class.php');
  require_once('User.class.php');

  if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name=Database::Checkinput($_POST['username']);
    $password=Database::Checkinput($_POST['password']);
    /*-----insert-----*/
    if (isset($_POST['submit'])) {
        $passwordverify= Database::Checkinput($_POST['passwordverify']);
        $insert->Insert($name,$password,$passwordverify);
    }

  /*-------login------*/
  if (isset($_POST['sub_log'])) {
      
        $db = Database::Connect();
        $result=$db->query("SELECT * FROM user WHERE password_user='$password' && username ='$name'");
        $result=$result->fetch();
        if ($result) {
            echo 'user found';
            session_start();
            $_SESSION['name']=$name;
            $_SESSION['username']=$result['username'];
            $_SESSION['data_insert']=$result['data_insert'];
            $_SESSION['user_id']=$result['id'];
            header("location:profil.php");
            if (isset($_POST['Checkbox'])) {
                setcookie('username',$name,time()+1000*60*2);
                setcookie('password_user',$password,time()+1000*60);
            }
        }
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
                    <form id="form_login" method="POST" onsubmit="return validation_login()">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" id="username_login"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password_login">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" name="checkbox" class="form-check-input" id="CheckBox">
                            <label class="form-check-label" for="CheckBox">Check me out</label>
                        </div>
                        <button type="submit" name="sub_log" class="btn mb-3"
                            id="button_login_page_login">Login</button>
                        <div class="d-flex justify-content-end">
                            <label class="fst-italic">
                                Create account
                                <!----Button Modal---->
                                <a href="#" type="button" class="btn text-primary pt-0 ps-0" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">Sign up
                                </a>
                            </label>
                            <!---Call signup page--->

                        </div>

                    </form>
                    <?php 
                            require "signup.php"; 
                    ?>
                </div>
            </div>
        </div>
    </header>

    <script src="assets/js/script.js"></script>
    <script src="assets/js/sweetalert2.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>