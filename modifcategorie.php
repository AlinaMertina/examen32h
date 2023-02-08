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

<body>
<div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780" style="margin-top:-10%; ">
            <div class="card card-3">
                <div class="card-heading" style="background: url('<?php echo base_url("assets/image/".$Nomimage);?>') top left/cover no-repeat;" ></div>
                <div class="card-body">
                    <h2 class="title">Modif categorie</h2>
                    <form method="POST" action="<?php echo base_url("accuille/modifcategorieValue/"); ?>">
                       
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="categorie">
                                <option disabled="disabled" selected="selected" value="<?php echo $idCategorie;?>">Categorie</option>
                                    <?php for($i=0;$i<count($Nom);$i++){?>
                                        <option value="<?php echo $idcategorie[$i];?>"><?php echo $Nom[$i];?></option>
                                    <?php }?>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit">Submit</button>
                            <button class="btn btn--pill btn--green" ><a href="<?php echo base_url("accuille/index/");?>">Retout</button>
                        </div>
                        <div class="p-t-10">
                           
                        </div>
                        <div class="p-t-10">
                           
                        </div>
                        <div class="p-t-10">
                           
                        </div>
                        <div class="p-t-10">
                           
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

</html>
<!-- end document-->