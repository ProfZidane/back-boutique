<?php include('includes/header.php') ?>

    <!-- banner -->
    <div class="container-fluid banner">
        <h2 id="lce-text-dark">Mon Panier</h2>
    </div>

    <!-- cart -->

    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-3 sort-bar ">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action " id="lce-active">
                        Biens consommables
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">Bien non consommables</a>                    
                  </div>
            </div>
            <div class="col-md-9 info-cart sort-bar ">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">Produit</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Quantité</th>
                        <th scope="col">Total</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row" style="width: 30%;">
                            <img src="https://cdn.pixabay.com/photo/2014/10/23/14/34/network-cables-499792_960_720.jpg" width="100%" alt="">
                        </th>
                        <td>
                            <p class="in-table" style="text-align: center;">
                                Câbles réseaux X500
                            </p>
                        </td>
                        <td>
                            <p class="in-table mob-pos-p" style="text-align: center;">
                                1000 FCFA
                            </p>
                        </td>                        
                        <td align="center">
                            <input type="number" name="" min="0" id="" value="0" style="width: 50%;transform:translateY(200%)">
                        </td>
                        <td>
                            <p class="in-table-2" style="text-align: center;">
                                1000 FCFA
                            </p>
                        </td>
                        <td>
                            <p class="in-table-1" style="text-align: center;">
                                <a href="">
                                    <i class="material-icons lce-primary">highlight_off</i>
                                </a>
                            </p>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row" style="width: 30%;">
                            <img src="https://cdn.pixabay.com/photo/2014/10/23/14/34/network-cables-499792_960_720.jpg" width="100%" alt="">
                        </th>
                        <td>
                            <p class="in-table" style="text-align: center;">
                                Câbles réseaux X500
                            </p>
                        </td>
                        <td>
                            <p class="in-table mob-pos-p" style="text-align: center;">
                                1000 FCFA
                            </p>
                        </td>
                        <td align="center">
                            <input type="number" name="" min="0" id="" value="0"  style="width: 50%;transform:translateY(200%)">
                        </td>
                        <td>
                            <p class="in-table-2" style="text-align: center;">
                                1000 FCFA
                            </p>
                        </td>
                        <td>
                            <p class="in-table-1" style="text-align: center;">
                                    <a href="">
                                        <i class="material-icons lce-primary">highlight_off</i>
                                    </a>
                            </p>
                        </td>                        
                      </tr>                     
                    </tbody>
                  </table>
                  <div class="container cart-chekout ">
                      <div class="row">
                          <div class="col-md-7">

                      </div>
                      <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-6">
                                <button class="btn text-light mob-pos-btn" id="lce-bg-primary" style="width: 100%;">
                                    Continuer
                                </button>                                
                            </div>
                            <div class="col-md-6">
                                <button class="btn text-light" id="lce-bg-primary" style="width: 100%;">
                                    Valider
                                </button>
                            </div>
                        </div>
                      </div>
                      </div>
                  </div>
            </div>
        </div>
    </div>


  <?php include('includes/footer.php') ?>