<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="<?php echo base_url("assetsT/vendor/mdi-font/css/material-design-iconic-font.min.css");?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url("assetsT/vendor/font-awesome-4.7/css/font-awesome.min.css")?>" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url("assetsT/vendor/select2/select2.min.css");?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url("assetsT/vendor/datepicker/daterangepicker.css");?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url("assetsT/css/main.css");?>" rel="stylesheet" media="all">
</head>

<body style="overflow: hidden;">
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780" style="margin-top:-10%; ">
            <div class="card card-3">
                <div class="card-heading" style="background: url('<?php echo base_url("assetsT/img/bg-heading-03.jpg");?>') top left/cover no-repeat;" ></div>
                <div class="card-body">
                    <h2 class="title">Ajouter Produit</h2>
                    <form method="POST" action="<?php echo base_url("redirectform/ajoutproduit/"); ?>">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Description" name="description">
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="categorie">
                                <option disabled="disabled" selected="selected">Categorie</option>
                                    <?php for($i=0;$i<count($Nom);$i++){?>
                                        <option value="<?php echo $idcategorie[$i];?>"><?php echo $Nom[$i];?></option>
                                    <?php }?>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="number" placeholder="Prix estimatif" name="prix">
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit">Submit</button>
                            <button class="btn btn--pill btn--green" ><a href="<?php echo base_url("accuille/index/");?>">Retout</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url("assetsT/vendor/jquery/jquery.min.js");?>"></script>
    <!-- Vendor JS-->
    <script src="<?php echo base_url("assetsT/vendor/select2/select2.min.js");?>"></script>
    <script src="<?php echo base_url("assetsT/vendor/datepicker/moment.min.js"); ?>"></script>
    <script src="<?php echo base_url("assetsT/vendor/datepicker/daterangepicker.js"); ?>"></script>

    <!-- Main JS-->
    <script src="<?php echo base_url("assetsT/js/global.js"); ?>"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->