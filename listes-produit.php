<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>geekzone</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-v2-Modal--Full-with-Google-Map.css">
    <link rel="stylesheet" href="assets/css/Features-Blue.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Testimonials.css">
</head>

<body>
    <?php require('header.php') ?>
    <div class="features-boxed">
        <div class="container">
            <div class="intro">
                <?php if ($_GET['choix_boutique'] == ""){
                    echo '<h2 class="text-center">Vous n\'avez pas séléctionné de boutique !</h2>';
                }else{
                    echo '<h2 class="text-center">Listes Produits</h2>';
                } ?>
                <p class="text-center">Retrouve touts les produits de la catégorie <?php echo $_GET['libelle'] ?></p>
            </div>
            <div class="row justify-content-center features">

                <?php
                $choix_boutique = $_GET["choix_boutique"];
                $name = $_GET["libelle"];
                $sqlQuery = 'SELECT * FROM produit WHERE categorie = ' . $_GET["id"];
                $lstProduitStatement = $mysqlClient->prepare($sqlQuery);
                $lstProduitStatement->execute();
                $lstProduit = $lstProduitStatement->fetchAll();
                foreach ($lstProduit as $lstProduit) {
                ?>
                <?php
                    $id =  $lstProduit['produit_id'];
                    $libelle = $lstProduit['nom'];
                    $prix = $lstProduit['prix'];
                    $image = $lstProduit['image'];
                    $container = '<div class="col-sm-6 col-md-5 col-lg-4 item">
                                    <div class="box"><img height="100px"src="images/' . $_GET["libelle"] . '/' . $image . '">
                                        <h3 class="name">' . $libelle . '</h3>
                                        <h3 class="name">'.$prix.'€</h3><a href="produit.php?id='.$id.'&choix_boutique='.$choix_boutique.'.&libelle='.$name.'" class="learn-more" style="color:#00b760;">Afficher »</a>
                                    </div>
                                  </div>';
                    echo $container;
                    $compteur++;
                    // href ="liste-produit.php?libelle='.$libelle.'"
                }
                ?>
            </div>
        </div>
    </div>
    <?php require('footer.php') ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Contact-Form-v2-Modal--Full-with-Google-Map.js"></script>
</body>

</html>