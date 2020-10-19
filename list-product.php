<?php include('includes/header.php') ?>

    <!-- banner -->
    <div class="container-fluid banner">
        <h2 id="lce-text-dark">Nos Produits</h2>
    </div>

    <!-- list product -->

    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-3 sort-bar " style="margin-top:2rem">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action " id="lce-active">
                        Biens consommables
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">Bien non consommables</a>                    
                </div>
                <div class="row">
                    <div class="col-md-12 sort-bar ">                        
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h4>Prix</h4>
                                    </div>
                                    <div class="col-md-3">
                                        <button class="btn text-light" id="lce-bg-primary">
                                            Ok
                                        </button>
                                    </div>
                                </div>
                                <form>
                                    <div class="form-group"><br>
                                      <!--<label for="formControlRange">Example Range input</label>-->
                                      <input type="range" class="form-control-range" id="formControlRange" min="0" max="10000">
                                      <span id="valueRange">0</span> FCFA
                                    </div>
                                </form> 
                            </li>
                          </ul>
                        
                    </div>
                </div>
            </div>

            <div class="col-md-9 info-cart sort-bar ">
                <!-- product list -->
                <div class="row">
                     <div class="col-md-4 card-content">
                        <!--card prodct-->
                        <div class="card" style="width: 18rem;">
                            <img src="https://cdn.pixabay.com/photo/2014/10/23/14/34/network-cables-499792_960_720.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title" style="text-align: center;">Câble Réseaux X500</h5>
                            </div>                            
                            <div class="card-body" align="center">
                                <button class="btn text-light" id="lce-bg-primary" data-toggle="modal" data-target="#exampleModal">
                                    <i class="material-icons">
                                      visibility
                                    </i>
                                  </button>
                                  <button class="btn text-light " id="lce-bg-primary" >
                                    <i class="material-icons">
                                      shopping_cart
                                    </i>
                                  </button>
                            </div>
                          </div>
                          <!--end card product-->
                     </div>
                     <div class="col-md-4 card-content">
                         <!--card prodct-->
                        <div class="card" style="width: 18rem;">
                            <img src="https://cdn.pixabay.com/photo/2014/10/23/14/34/network-cables-499792_960_720.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title" style="text-align: center;">Câble Réseaux X500</h5>
                            </div>                            
                            <div class="card-body" align="center">
                                <button class="btn text-light" id="lce-bg-primary">
                                    <i class="material-icons">
                                      visibility
                                    </i>
                                  </button>
                                  <button class="btn text-light " id="lce-bg-primary" >
                                    <i class="material-icons">
                                      shopping_cart
                                    </i>
                                  </button>
                            </div>
                          </div>
                          <!--end card product-->
                     </div>
                     <div class="col-md-4 card-content">
                         <!--card prodct-->
                        <div class="card" style="width: 18rem;">
                            <img src="https://cdn.pixabay.com/photo/2014/10/23/14/34/network-cables-499792_960_720.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title" style="text-align: center;">Câble Réseaux X500</h5>
                            </div>                            
                            <div class="card-body" align="center">
                                <button class="btn text-light" id="lce-bg-primary">
                                    <i class="material-icons">
                                      visibility
                                    </i>
                                  </button>
                                  <button class="btn text-light " id="lce-bg-primary" >
                                    <i class="material-icons">
                                      shopping_cart
                                    </i>
                                  </button>
                            </div>
                          </div>
                          <!--end card product-->
                     </div>
                </div>

                <!-- end product list -->
                <!-- footer product list -->
                <br>
                  <div class="container cart-chekout ">
                      <div class="row">
                          <div class="col-md-3 ">
                              <button class="btn text-light" id="lce-bg-primary" style="width: 100%;">
                                 <i class="material-icons">navigate_before</i> 
                                 <span class="navigate">Précédent</span>
                                </button>
                          </div>
                          <div class="col-md-3 "></div>
                          <div class="col-md-3 "></div>
                          <div class="col-md-3 ">
                            <button class="btn text-light" id="lce-bg-primary" style="width: 100%;">
                                <span class="navigate">suivant</span>
                                <i class="material-icons">navigate_next</i>
                            </button>
                          </div>
                      </div>
                  </div>
                  <!-- end prodcut list -->
            </div>
        </div>
    </div>
    <!-- end list product -->

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
          <button type="button" class="btn btn-dark" data-dismiss="modal">Fermer</button>
          <button type="button" class="btn text-light" id="lce-bg-primary">Ajouter Panier</button>
        </div>
      </div>
    </div>
  </div>

  
<?php include('includes/footer.php') ?>