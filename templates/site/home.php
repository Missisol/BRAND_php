<div class="bigWrap">
    <div class="containerContent">
        <section>
            <div class="theBrand">
                <div class="container imageBrand">
                    <div class="textBrand">
                        <h2>THE BRAND</h2>
                        <h3>OF LUXERIOUS <span>FASHION</span></h3>
                    </div>
                </div>
            </div>
        </section>
        <div class="category">
            <div class="container categoryImage">
                <div class="ctgItem forMen">
                    <a href="#">
                        <img src="img/index/category/for_men.jpg" alt="for men">
                        <div class="ctgText">
                            hOT dEAL<br><span>FOR MEN</span>
                        </div>
                    </a>
                </div>
                <div class="ctgItem accesories">
                    <a href="#">
                        <img src="img/index/category/accesories.jpg" alt="accesories">
                        <div class="ctgText">
                            LUXIROUS & trendy<br><span>ACCESORIES</span>
                        </div>
                    </a>
                </div>
                <div class="ctgItem women">
                    <a href="#">
                        <img src="img/index/category/women.jpg" alt="women">
                        <div class="ctgText">
                            30% offer<br><span>women</span>
                        </div>
                    </a>
                </div>
                <div class="ctgItem for_kids">
                    <a href="#">
                        <img src="img/index/category/for_kids.jpg" alt="for kids">
                        <div class="ctgText">
                            new arrivals<br><span>FOR kids</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <section>
            <div class="feturedItems">
                <div class=" container feturedItemsWrap">
                    <div class="headFeturedItems">
                        <h3>Fetured Items</h3>
                        <p>Shop for items based on what we featured in this week</p>
                    </div>
                    <div class="products">
                      <?php foreach ($prods as $product) : ?>
                          <div class="oneProductWrap" id="<?= $product['id'] ?>"
                               data-category_id="<?= $product['category_id'] ?>">
                              <a class="oneProduct" href="/shop/product.php?id=<?= $product['id'] ?>">
                                  <img class="imageOneProduct" alt="product" src=<?= $product['img'] ?>>
                                  <div class="textProduct">
                                      <p><?= $product['name'] ?></p>
                                      <span>$<?= $product['price'] ?></span>
                                  </div>
                              </a>
                              <div class="addToCartWrap">
                                  <a class="addToCart" href="#">
                                      <img src="/img/basket_white.svg" alt="basket">
                                      <div class="textAddToCart">
                                          Add to Cart
                                      </div>
                                  </a>
                              </div>
                          </div>
                      <?php endforeach; ?>
                    </div>
                    <a class="buttonItem" href="/?action=allproducts">
                        <span>Browse All Product</span>
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                </div>
            </div>
        </section>
        <div class="offer">
            <div class="container offerWrap">
                <div class="imageOffer">
                    <a href="#">
                        <h2>30%<span>OFFER</span></h2>
                        <h3>FOR WOMEN</h3>
                    </a>
                </div>
                <div class="plusesOffer">
                    <div class="iconPlusesHome">
                        <a href="#">
                            <img src="img/index/offer/delivery.svg" alt="delivery">
                        </a>
                        <a href="#">
                            <img src="img/index/offer/sales.svg" alt="sales">
                        </a>
                        <a href="#">
                            <img src="img/index/offer/quality.svg" alt="quality">
                        </a>
                    </div>
                    <div class="textPlusesHome">
                        <article>
                            <div class="oneTextPluses">
                                <a href="#">
                                    <h4>Free Delivery</h4>
                                </a>
                                <p>
                                    Worldwide delivery on all.
                                    Authorit tively morph next-generation
                                    innov tion with extensive models.
                                </p>
                            </div>
                        </article>
                        <article>
                            <div class="oneTextPluses">
                                <a href="#">
                                    <h4>Sales & discounts</h4>
                                </a>
                                <p>
                                    Worldwide delivery on all.
                                    Authorit tively morph next-generation
                                    innov tion with extensive models.
                                </p>
                            </div>
                        </article>
                        <article>
                            <div class="oneTextPluses">
                                <a href="#">
                                    <h4>Quality assurance</h4>
                                </a>
                                <p>
                                    Worldwide delivery on all.
                                    Authorit tively morph next-generation
                                    innov tion with extensive models.
                                </p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
