<!DOCTYPE html>
<html>

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
    <link rel="stylesheet" href="assets/css/Highlight-Clean.css">
    <link rel="stylesheet" href="assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Testimonials.css">
</head>

<body>
    <?php require('header.php') ?>
    <?php
    $choix_boutique = $_GET["choix_boutique"];
    $sqlQuery = 'SELECT * FROM produit INNER JOIN categorie WHERE produit.produit_id = ' . $_GET["id"];
    $ProduitStatement = $mysqlClient->prepare($sqlQuery);
    $ProduitStatement->execute();
    $Produit = $ProduitStatement->fetchAll();
    foreach ($Produit as $Produit) :
        //SELECT * FROM stock INNER JOIN boutique WHERE boutique.id = 1;
        //var_dump($image1);
    ?>
        <?php
        $image1 = $_GET['libelle'];
        $id =  $Produit['produit_id'];
        $libelle = $Produit['nom'];
        $description = $Produit['description'];
        $detail = $Produit['detail'];
        $prix = $Produit['prix'];
        $image = $Produit['image'];
        ?>
        <div class="article-list">
            <div class="container">
                <div class="intro">
                    <h2 class="text-center"><?php echo $libelle ?></h2>
                    <p class="text-center"><em><?php echo $description ?></em></p>
                </div>
                <div class="row articles">
                    <div class="col-sm-6 col-md-4 col-lg-3 item"></div>
                    <div class="col-sm-6 col-md-4 col-lg-6 item"><a href="#"><img height="275px" src="images/<?php echo $image1."/".$image; ?>"></a>
                        <p class="description"><?php echo $detail ?></p>
                        <p><strong>Prix :&nbsp;<?php echo $prix?>&nbsp;€</strong><br><br></p><a href="#" class="action"></a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 item"></div>
                </div>
            </div>
        </div>
        <?php require('footer.php') ?>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/Contact-Form-v2-Modal--Full-with-Google-Map.js"></script>
</body>
<?php
    endforeach;
?>

</html>