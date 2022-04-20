<?php 
    require('Session.php');
    require('Database.class.php');
    require('Contact.class.php');
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $name=Database::Checkinput($_POST['name']);
        $email=Database::Checkinput($_POST['email']);
        $address=Database::Checkinput($_POST['address']);
        $phone=Database::Checkinput($_POST['phone']);

        /*-----insert-----*/
        if (isset($_POST['submit'])) {
            $contact->Add($name,$email,$address,$phone);
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
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
                        <a href="index.php" class="btn" onclick="logout();" id="btn_Logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!------Header------>
    <header class="my-5">
        <section>
            <div class="container">
                <div style=" overflow-x: auto;">
                    <div class="mx-3" style="min-width: 800px;">
                        <table class="table" style="border-collapse:separate;">
                            <thead>
                                <tr style="color: gray;">
                                    <td scopre="col">Id</td>
                                    <td scopre="col">Name</td>
                                    <td scopre="col">Email</td>
                                    <td scopre="col">Address</td>
                                    <td scopre="col">Phone</td>
                                    <td scopre="col">Operator</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $db=Database::Connect();
                                    $statemant=$db->query("SELECT * FROM contact");
                                    if ($statemant) {
                                        foreach ($statemant->fetchAll() as $row ) {
                                            echo'<tr>
                                                    <td>'.$row['id'].'</td>
                                                    <td>'.$row['name'].'</td>
                                                    <td>'.$row['email'].'</td>
                                                    <td>'.$row['address'].'</td>
                                                    <td>'.$row['phone'].'</td>
                                                    <td>
                                                        <a href="#" onclick=delete();><i class="bi bi-pencil text-info btn"></i></a>
                                                        <a href="#" onclick=update();><i class="bi bi-trash text-info btn"></i></a>
							                        </td>
						                        </tr>';
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <?php include('Add_contact.php');?>
    </header>

    <script src="assets/js/sweetalert2.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>