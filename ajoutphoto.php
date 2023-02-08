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
    <title>Ajout photo</title>

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

<body >
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780" style="margin-top:-10%; ">
            <div class="card card-3">
                <div class="card-body">
                    <h2 class="title">Ajouter Photo</h2>
                    <form id="form">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="nombre de photo" name="nbr">
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                    ajoutimage
                    <form action="<?php echo base_url("redirectform/ajoutimage/");?>" id="photo" method="POST" enctype="multipart/form-data">
                        <h2>Ajout Photo</h2>
                    </form> 
                </div>
            </div>
        </div>
    </div>

    
    <script>
          var form = document.getElementById("form");
          form.addEventListener("submit", function (event) {
            event.preventDefault();
            var formphoto = document.getElementById("photo");
            console.log(formphoto);
            for(var i=0;i<form.nbr.value;i++){
                let div = document.createElement("div");
                    div.className="input-group";
                let input1 = document.createElement("input");
                    input1.className="input--style-3";
                    input1.type="file";
                    input1.name="fichier"+i;
                div.appendChild(input1);
                console.log(div);
                formphoto.appendChild(div);
                
                console.log(form.nbr.value);
            }
            let divbutton = document.createElement("div");
            divbutton.className="p-t-10";
            let buttonsubmit = document.createElement("button");
                buttonsubmit.className="btn btn--pill btn--green";
                buttonsubmit.type="submit";
                buttonsubmit.innerHTML="<b>submit</b>"
                divbutton.appendChild(buttonsubmit);
            let inputhidden = document.createElement("input");
                inputhidden.type="hidden";
                inputhidden.name="nbr";
                inputhidden.value=form.nbr.value;
            formphoto.appendChild(divbutton);
            formphoto.appendChild(inputhidden);

            
          });
    </script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->