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

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200" style="display:flex;">
                <?php if(isset($prix)){ for($i=0;$i<count($prix);$i++) { ?>
            
                <!-- Object ko-->
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap" style="width:200px;height:200px;">
                        <img src="<?php echo base_url("assets/image/".$Nomimage[$i]);?>" class="img-fluid" alt="" style="width:200px;height:200px;"/>
                        <div class="portfolio-info">
                            <h4><?php echo $prix[$i]; ?></h4>
                            <p><a href="<?php echo base_url("accuille/AjoutpropositionPorcentage/?iduser=".$idUser[$i]."&&idproduit=".$idp[$i]);?>">Echange</a></p>
                            <span style="color:black"><?php echo $dif[$i]; ?></span>
                        </div>
                        
                      </div>
                     
                </div>
                
                <?php } } ?>
          </div>
      </div>
    </section><!-- End Portfolio Section -->