<?php include('includes/header.php') ?>

      <!-- banner -->
      <div class="container-fluid lce-banner ">
        <div class="row">
            <div class="col-md-6 ">
                <div>
                    <h1>
                        <span>
                          ACHETER EN 
                        </span>
                        <span class="lce-primary">
                          SECURITE
                        </span>
                    </h1>
                    <br>
                    <p>
                        LCE-SHOP est une boutique en ligne d'articles informatiques divers. ALors n'hésitez plus et passer vos commandes !
                    </p>
                    <br>
                    <a class="btn btn-lg" id="lce-bg-primary">DEMARRER</a>
                </div>
            </div>
            <div class="col-md-6 ">
                <img src="img/mag2.png" class="from-right" width="100%" alt="">
            </div>
        </div>
      </div>
      <!-- end of banner -->

      <!-- detail component -->
      <div class="container-fluid lce-section">
          <div class="container">
              <!--<div class="lce-title">
                  <h1>Type De Produit</h1>
              </div>-->
              <div class="row">
                  <div class="col-md-6 lce-card from-left1" id="lce-detail" align="center">
                    <div>
                        <img src="img/b-0.png" alt="" width="30%">
                        <br><br>
                        <h4>
                        Biens Consommables
                    </h4>
                    <span>
                        Obtenez vos articles facilement et rapidement avec Lce-shop. Plus de besoins de chercher loin, cliquez ci-dessous !
                    </span>
                    <br><br>
                    <button class="btn text-light" id="lce-bg-primary">Voir Plus</button>
                    </div>
                  </div>
                  <div class="col-md-6 lce-card from-right1" align="center">
                    <div>
                        <img src="img/b-1.png" alt="" width="30%">
                        <br><br>
                        <h4>
                        Biens Non-consommables
                    </h4>
                    <span>
                        Lce-shop vous propose des produits hors du commun. Choisissez-les et discuter avec un commercial pour toutes les modalités.
                    </span>
                    <br><br>
                    <button class="btn text-light" id="lce-bg-primary">Voir Plus</button>
                    </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- end of detail component -->


      <!-- Product component -->
      <div class="container-fluid lce-section">
        <div class="container">
            <div class="lce-title">
                <h1>Nouveautés</h1>
            </div>
        </div>
          <div class="row">
              <div class="col-md-4 from-left1" align="center">
                <div class="lce-prod-card">
                    <img src="https://cdn.pixabay.com/photo/2014/10/23/14/34/network-cables-499792_960_720.jpg" width="100%" alt="">
                    <h4>Câble réseau RTX</h4>
                    <span>105 FCFA</span>
                    <br><br>
                    <div align="center">
                      <button class="btn" id="lce-bg-primary" data-toggle="modal" data-target="#exampleModal">
                        <i class="material-icons">
                          visibility
                        </i>
                      </button>
                      <button class="btn  " id="lce-bg-primary"  >
                      <i class="material-icons">
                        shopping_cart
                      </i>
                    </button>
                    </div>
                </div>                   
              </div>
              <div class="col-md-4 from-left1" align="center">
                <div class="lce-prod-card">
                    <img src="https://cdn.pixabay.com/photo/2014/10/23/14/34/network-cables-499792_960_720.jpg" width="100%" alt="">
                    <h4>Câble réseau RTX</h4>
                    <span>105 FCFA</span>
                    <br><br>
                    <div align="center">
                      <button class="btn" id="lce-bg-primary">
                        <i class="material-icons">
                          visibility
                        </i>
                      </button>
                      <button class="btn  " id="lce-bg-primary" >
                      <i class="material-icons">
                        shopping_cart
                      </i>
                    </button>
                    </div>
                </div>            
              </div>
              <div class="col-md-4 from-right1" align="center">
                <div class="lce-prod-card">
                    <img src="https://cdn.pixabay.com/photo/2014/10/23/14/34/network-cables-499792_960_720.jpg" width="100%" alt="">
                    <h4>Câble réseau RTX</h4>
                    <span>105 FCFA</span>
                    <br><br>
                    <div align="center">
                      <button class="btn" id="lce-bg-primary">
                        <i class="material-icons">
                          visibility
                        </i>
                      </button>
                      <button class="btn " id="lce-bg-primary" >
                      <i class="material-icons">
                        shopping_cart
                      </i>
                    </button>
                    </div>
                </div>            
              </div>
          </div>

          <!--<div class="row">
            <div class="col-md-4" align="center">
              <div class="lce-prod-card">
                  <img src="https://cdn.pixabay.com/photo/2014/10/23/14/34/network-cables-499792_960_720.jpg" width="100%" alt="">
                  <h4>Câble réseau RTX</h4>
                  <span>105 FCFA</span>
              </div>                   
            </div>
            <div class="col-md-4" align="center">
              <div class="lce-prod-card">
                  <img src="https://cdn.pixabay.com/photo/2014/10/23/14/34/network-cables-499792_960_720.jpg" width="100%" alt="">
                  <h4>Câble réseau RTX</h4>
                  <span>105 FCFA</span>
              </div>            
            </div>
            <div class="col-md-4" align="center">
              <div class="lce-prod-card">
                  <img src="https://cdn.pixabay.com/photo/2014/10/23/14/34/network-cables-499792_960_720.jpg" width="100%" alt="">
                  <h4>Câble réseau RTX</h4>
                  <span>105 FCFA</span>
              </div>            
            </div>
        </div>-->
      </div>

      <!-- modal view -->
      <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Voir Produit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid ">
          <div class="row">
            <div class="col-md-7 ">
              <img src="https://cdn.pixabay.com/photo/2014/10/23/14/34/network-cables-499792_960_720.jpg" width="100%" alt="">
            </div>
            <div class="col-md-5 ">
              <div class="lce-detail-prod">
                <h3 class="lce-primary">Câble Réseaux X500</h3>
                <br>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, molestiae. Consequatur minus itaque dignissimos voluptatem cumque quos inventore, facilis, velit nisi ab asperiores quisquam praesentium expedita aut ea, sapiente atque.
                </p>
                <br>
                <div class="row">
                  <div class="col-md-12 ">
                    <h4>Prix : <span class="lce-w-50">1000 FCFA</span></h4>
                  </div>
                  <br><br>
                  <div class="col-md-12 ">
                    <h4>Disponibilité : <span class="lce-w-50">En stock</span></h4>
                  </div>
                  <br><br>
                  <div class="col-md-12 ">                    
                    <div class="row">
                      <div class="col-md-3 ">
                        <h4>Quantité</h4>
                      </div>
                     
                      <div class="col-md-5 ">
                        <input type="number" class="form-control" value="1" min="0">
                      </div>
                      
                    </div> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="button" class="btn text-light" id="lce-bg-primary">Ajouter Panier</button>
      </div>
    </div>
  </div>
</div>


<?php include('includes/footer.php') ?>