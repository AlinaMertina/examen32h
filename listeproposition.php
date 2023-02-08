

   <!-- ======= Portfolio Section ======= -->
   <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-left">
          <h2 style="color:white">Portfolio</h2>
          <p style="color:white">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <?php for($i=0;$i<count($Nom);$i++){ ?>
                    <li data-filter="<?php echo ".filter-app"; ?>" ><a href="<?php echo $idcategorie[$i];?>"><?php echo $Nom[$i]; ?></a></li>
              <?php } ?>
            <!-- 
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li> -->
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                <?php if(isset($descE)){ for($i=0;$i<count($descE);$i++) { ?>
            <div class="section" style="display:flex;">
                <!-- Object ko-->
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap" style="width:200px;height:200px;">
                
                <img src="<?php echo base_url("assets/image/".$NomimageE[$i]);?>" class="img-fluid" alt="" style="width:200px;height:200px;">
                <div class="portfolio-info">
                    <h4><?php echo $prixE[$i]; ?></h4>
                    <p><?php echo $descE[$i]; ?></p>
                    
                </div>
                </div>
            </div>
             <!-- Object takalo-->
             <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap" style="width:200px;height:200px;">
                
                <img src="<?php echo base_url("assets/image/".$NomimageT[$i]);?>" class="img-fluid" alt="" style="width:200px;height:200px;">
                <div class="portfolio-info">
                    <h4><?php echo $prixT[$i]; ?></h4>
                    <p><?php echo $descT[$i]; ?></p>
                    <div class="portfolio-links">
                        <a href="<?php echo base_url("redirectform/accepter/?idproposition=".$idpT[$i]);?>" ><i class="bx bx-plus"></i></a>
                        <a href="<?php echo base_url("redirectform/refuser/?idproposition=".$idpT[$i]);?>"style="font-size:50px;color:white; hover{color:green;}">-</a>
                    </div>
                </div>
                </div>
            </div>
                  </div>
                <?php } } ?>

          
        </div>

      </div>
    </section><!-- End Portfolio Section -->
