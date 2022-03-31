<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>geekzone</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-v2-Modal--Full-with-Google-Map.css">
    <link rel="stylesheet" href="assets/css/Features-Blue.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="assets/css/Highlight-Clean.css">
    <link rel="stylesheet" href="assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Testimonials.css">
</head>

<body>

    <?php require('header.php'); ?>
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form method="post">
                <h2 class="text-center">Modifier le mot de passe</h2>
                <div class="form-group"><input class="form-control" type="text" name="identifiant" placeholder="Identifiant"></div>
                <div class="form-group"><input class="form-control" type="password" name="new-password" placeholder="Nouveau mot de passe"></div>
                <div class="form-group"><button class="btn btn-primary btn-block" name="envoi" value="envoi" style="background-color:#00b760;" type="submit">Modifier</button></div>
            </form>
        </div>
    </div>
    <?php
    var_dump($_POST['envoi']);
    $identifiant = $_POST['identifiant'];
    $newmdp = $_POST['new-password'];
    if ($_POST['envoi'] == "envoi" && $login['identifiant'] == $identifiant) {
        $sqlQuery = "UPDATE compte SET password = $newmdp WHERE identifiant = '$identifiant'";
        $loginStatement = $mysqlClient->prepare($sqlQuery);
        $loginStatement->execute();
        $login = $loginStatement->fetchAll();
    }
    ?>
    <div class="footer-dark" style="padding-top:20px;">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>A propos</h3>
                        <ul>
                            <li><a href="#">Conditions général</a></li>
                            <li><a href="#">Mentions légal</a></li>
                            <li><a href="#">Cookie</a></li>
                            <li><a href="#">Donnée Personnel</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>GeekZone</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">GeekZone - 2022</p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Contact-Form-v2-Modal--Full-with-Google-Map.js"></script>
</body>

</html>